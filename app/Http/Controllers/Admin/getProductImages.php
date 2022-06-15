<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class getProductImages extends Controller
{

    public function upload($primaryImage , $images){

        $filePrimaryName = generateFileName($primaryImage->getClientOriginalName());

        $primaryImage->move(public_path(env('PRODUCT_IMAGE_UPLOAD_PATH')) , $filePrimaryName);

        $arrayImages = [];

        foreach($images as $image){
            $fileImagesName = generateFileName($image->getClientOriginalName());

            $image->move(public_path(env('PRODUCT_IMAGE_UPLOAD_PATH')) , $fileImagesName);

            array_push($arrayImages , $fileImagesName);
        }


        return ['filePrimaryName' => $filePrimaryName  , 'arrayImages' => $arrayImages];

    }


    public function uploadBanner($imageBanner){
        $imageFile = generateFileName($imageBanner->getClientOriginalName());
        $imageBanner->move(public_path(env('BANNER_IMAGE_UPLOAD_PATH')) , $imageFile);

        return ['imageFile' => $imageFile];
    }

}
