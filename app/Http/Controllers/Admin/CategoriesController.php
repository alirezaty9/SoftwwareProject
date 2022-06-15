<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Tag;
use Hamcrest\Arrays\IsArray;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(20);
        return view('admin.categories.index'  , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentCategories = Category::where('parent_id' , 0)->get();
        $attributes = Attribute::all();
        $tags = Tag::all();
        return view('admin.categories.create' , compact('parentCategories' , 'attributes' , 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate([

            'name' => 'required',
            'slug' => 'required|unique:categories,slug',
            'parent_id' => 'required',
            'attribute_ids' => 'required',
            'attribute_ids.*' => 'exists:attributes,id',
            'tag_ids' => 'required',
            'tag_ids.*' => 'exists:tags,id',

        ]);

        try {

            DB::beginTransaction();

            $category = Category::create([

                'name' => $request->name,
                'slug' => $request->slug,
                'description' => $request->description,
                'parent_id' => $request->parent_id,
                'icon' => $request->icon

            ]);

            foreach($request->attribute_ids as $attributeId){
                    $attribute = Attribute::findOrFail($attributeId);
                    $attribute->categories()->attach($category->id);
            }

            foreach($request->tag_ids as $tagId){
                $tag = Tag::findOrFail($tagId);
                $tag->tags()->attach($category->id);
        }

            DB::commit();

        } catch (\Exception $exception) {
            DB::rollback();

            alert()->error('خطا در ایجاد دسته بندی', $exception->getMessage())->persistent('باشه');
            return redirect()->back();
        }

        alert()->success('دسته بندی با موفقیت ایجاد شد', '');
        return redirect()->route('admin.categories.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.categories.show' , compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $parentCategories = Category::where('parent_id' , 0)->get();
        $attributes = Attribute::all();
        $tags = Tag::all();
        return view('admin.categories.edit' , compact('category' , 'attributes' , 'parentCategories' , 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([

            'name' => 'required',
            'slug' => 'required|unique:categories,slug,'.$category->id,
            'parent_id' => 'required',
            'attribute_ids' => 'required',
            'tag_ids' => 'required',
            'tag_ids.*' => 'exists:tags,id',

        ]);

        try {

            DB::beginTransaction();

            $category->update([

                'name' => $request->name,
                'slug' => $request->slug,
                'is_active' => $request->is_active,
                'description' => $request->description,
                'parent_id' => $request->parent_id,
                'icon' => $request->icon

            ]);

            $category->attributes()->detach();
            $category->tagCategories()->detach();

            foreach($request->attribute_ids as $attributeId){
                    $attribute = Attribute::findOrFail($attributeId);
                    $attribute->categories()->attach($category->id);
            }

            foreach($request->tag_ids as $tagId){
                $tag = Tag::findOrFail($tagId);
                $tag->tags()->attach($category->id);
        }

            DB::commit();

        } catch (\Exception $exception) {
            DB::rollback();

            alert()->error('خطا در ایجاد دسته بندی', $exception->getMessage())->persistent('باشه');
            return redirect()->back();
        }

        alert()->success('دسته بندی با موفقیت ویرایش شد', '');
        return redirect()->route('admin.categories.index');
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

    public function getAttribute(Category $category){

        $attributes = $category->attributes()->wherePivot('is_variation' , 0)->get();
        $variation = $category->attributes()->wherePivot('is_variation' , 1)->first();

        return ['attributes' => $attributes , 'variation' => $variation];


    }
}
