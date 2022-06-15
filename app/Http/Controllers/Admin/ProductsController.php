<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\productImages;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $tags = Tag::all();
        $categories = Category::where('parent_id' , '!=' , 0)->get();

        return view('admin.products.create' , compact('brands' , 'tags' , 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'brand_id' => 'required',
            'is_active' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'tag_ids' => 'required',
            'primary_image' => 'required|mimes:jpg,jpeg,png',
            'images' => 'required',
            'images.*' => 'mimes:jpg,jpeg,png',
            'attribute_ids' => 'required',
            'attribute_ids.*' => 'required',
            'variation_values' => 'required',
            'variation_values.*' => 'required',
            'variation_values.price.*' => 'integer',
            'variation_quantity.*' => 'integer',
            'delivery_amount' => 'required|integer',
            'delivery_amount_per_product' => 'nullable|integer'



        ]);


        try {

            DB::beginTransaction();


            $getProductImage = new getProductImages();

            $imgFiles = $getProductImage->upload($request->primary_image , $request->images);

             $product = Product::create([

                'name' => $request->name,
                'brand_id' => $request->brand_id,
                'category_id' => $request->category_id,
                'primary_image' => $imgFiles['filePrimaryName'],
                'description' => $request->description,
                'is_active' => $request->is_active,
                'delivery_amount' => $request->delivery_amount,
                'delivery_amount_per_product' => $request->delivary_amount_per_product

             ]);

             foreach($imgFiles['arrayImages'] as $img){


                productImages::create([
                    'product_id' => $product->id,
                    'image' => $img
                ]);
             }

            $productAttributeController = new productAttributeController();

            $productAttributeController->store($request->attribute_ids , $product);

            $category = Category::find($request->category_id);

            $productVariationController = new productVariationController();

            $productVariationController->store($request->variation_values , $category->attributes()->wherePivot('is_variation' , 1)->first()->id, $product);

            $product->tags()->attach($request->tag_ids);


            DB::commit();

        } catch (\Exception $exception) {
            DB::rollBack();

            alert()->error('خطا در ایجاد محصول', $exception->getMessage())->persistent('باشه');
            return redirect()->back();
        }


        alert()->success('محصول با موفقیت ایجاد شد', '');
        return redirect()->route('admin.products.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $productAttribute = $product->attributes()->with('attribute')->get();
        $productVariations = $product->variations()->get();
        $productImages = $product->images()->get();
        return view('admin.products.show' , compact('product' , 'productAttribute' , 'productVariations' , 'productImages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $productAttribute = $product->attributes()->with('attribute')->get();
        $productVariations = $product->variations()->get();
        $brands = Brand::all();
        $tags = Tag::all();
        return view('admin.products.edit' , compact('product' , 'brands' , 'tags' , 'productAttribute' , 'productVariations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $product)
    {

        $request->validate([

            'name' => 'required',
            'brand_id' => 'required|exists:brands,id',
            'is_active' => 'required',
            'description' => 'required',
            'tag_ids' => 'required',
            'tag_ids.*' => 'exists:tags,id',
            'Attribute_values' => 'required',
            'variation_values' => 'required',
            'variation_values.*.price' => 'required|integer',
            'variation_values.*.quantity' => 'required|integer',
            'variation_values.*.sale_price' => 'nullable|integer',
            'variation_values.*.date_on_sale_from' => 'nullable|date',
            'variation_values.*.date_on_sale_to' => 'nullable|date',
            'delivery_amount' => 'required|integer',
            'delivery_amount_per_product' => 'nullable|integer'



        ]);

        try {

            DB::beginTransaction();


             $product->update([

                'name' => $request->name,
                'brand_id' => $request->brand_id,
                'description' => $request->description,
                'is_active' => $request->is_active,
                'delivery_amount' => $request->delivery_amount,
                'delivery_amount_per_product' => $request->delivery_amount_per_product

             ]);


            $productAttributeController = new productAttributeController();

            $productAttributeController->update($request->Attribute_values);

            $productVariationController = new productVariationController();

            $productVariationController->update($request->variation_values);

            $product->tags()->sync($request->tag_ids);


            DB::commit();

        } catch (\Exception $exception) {
            DB::rollBack();

            alert()->error('خطا در ویرایش محصول', $exception->getMessage())->persistent('باشه');
            return redirect()->back();
        }


        alert()->success('محصول با موفقیت ویرایش شد', '');
        return redirect()->route('admin.products.index');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function EditCategory(Request $request , Product $product){

        $categories = Category::where('parent_id' ,'!=' ,0)->get();
        return view('admin.products.EditCategory' , compact('product' , 'categories'));
    }

    public function UpdateCategory(Request $request , Product $product){
        $request->validate([
            'attribute_ids' => 'required',
            'attribute_ids.*' => 'required',
            'variation_values' => 'required',
            'variation_values.*' => 'required',
            'variation_values.price.*' => 'integer',
            'variation_quantity.*' => 'integer',



        ]);


        try {

            DB::beginTransaction();

             $product->update([

                'category_id' => $request->category_id,

             ]);

            $productAttributeController = new productAttributeController();

            $productAttributeController->change($request->attribute_ids , $product);

            $category = Category::find($request->category_id);

            $productVariationController = new productVariationController();

            $productVariationController->change($request->variation_values , $category->attributes()->wherePivot('is_variation' , 1)->first()->id, $product);


            DB::commit();

        } catch (\Exception $exception) {
            DB::rollBack();

            alert()->error('خطا در ایجاد محصول', $exception->getMessage())->persistent('باشه');
            return redirect()->back();
        }


        alert()->success('محصول با موفقیت ایجاد شد', '');
        return redirect()->route('admin.products.index');
    }
}
