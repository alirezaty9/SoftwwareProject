<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\productImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductEditImage extends Controller
{
    public function edit(Product $product){

        return view('admin.products.edit_image' , compact('product'));

    }

    public function destroy(Request $request){

        $request->validate([

            'image_id' => 'required|exists:product_images,id'

        ]);

        productImages::destroy($request->image_id);
        alert()->success('تصویر مورد نظر با موفقیت حذف شد', '');

        return redirect()->back();

    }


    public function setPrimary(Request $request , Product $product){

        $request->validate([
            'image_id' => 'required|exists:product_images,id'
        ]);

        $productImage = productImages::findOrFail($request->image_id);

        $product->update([
            'primary_image' => $productImage->image
        ]);

        alert()->success('تصویر مورد نظر به عنوان تصویر اصلی قرار گرفت', '');
        return redirect()->back();

    }

    public function add(Request $request , Product $product){


        $request->validate([

            'primary_image' => 'nullable|mimes:jpg,jpeg,png',
            'images.*' => 'nullable|mimes:jpg,jpeg,png',

        ]);

        try {
            DB::beginTransaction();

            if($request->primary_image == null && $request->images == null){
                return redirect()->back()->withErrors(['msg' => 'فیلد انتخاب تصاویر نمیتواند خالی باشد']);
            }

            if($request->has('primary_image')){

                $filePrimaryName = generateFileName($request->primary_image->getClientOriginalName());

                $request->primary_image->move(public_path(env('PRODUCT_IMAGE_UPLOAD_PATH')) , $filePrimaryName);

                $product->update([
                    'primary_image' => $filePrimaryName
                ]);

            }

            if($request->has('images')){


                foreach($request->images as $image){
                    $fileImagesName = generateFileName($image->getClientOriginalName());

                    $image->move(public_path(env('PRODUCT_IMAGE_UPLOAD_PATH')) , $fileImagesName);

                    productImages::create([
                        'product_id' => $product->id,
                        'image' => $fileImagesName
                    ]);


                }

            }

            DB::commit();

            alert()->success('ویرایش با موفقیت انجام شد', '');
            return redirect()->back();

        } catch (\Exception $exception) {
            DB::rollback();

            alert()->error('خطا در ویرایش تصاویر', $exception->getMessage())->persistent('باشه');
            return redirect()->back();
        }

}


}

