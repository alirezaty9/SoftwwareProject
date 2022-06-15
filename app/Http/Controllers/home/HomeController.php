<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\bottomBannerResource;
use App\Http\Resources\V1\sliderResource;
use App\Http\Resources\V1\topBannerResource;
use App\Models\Banner;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $main = Banner::where('type' , 'main')->where('is_active' , 1)->first();
        $sliders = Banner::where('type' , 'slider')->where('is_active' , 1)->orderBy('priority')->get();
        $logos = Banner::where('type' , 'logo-sazmani')->where('is_active' , 1)->orderBy('priority')->get();
        $second_logos = Banner::where('type' , 'logo-sherkati')->where('is_active' , 1)->orderBy('priority')->get();
        // $products = Product::where('is_active' , 1)->get();
        // return (sliderResource::collection($sliders))->additional(['topBanners' => [topBannerResource::collection($TopBanners)] , 'bottomBanners' => [bottomBannerResource::collection($BottomBanners)]]);


        return view('home.index' , compact('main' , 'sliders' , 'logos','second_logos'));

    }


    public function about(){

        return view('home.about-us');

    }



    public function services(){

        return view('home.services');

    }

    public function projects(){

        return view('home.projects');

    }
    public function order(){

        $user = User::where('id' , auth()->id())->first();
        return view('home.order' , compact('user'));

    }
    public function profile(){


        $user = User::where('id' , auth()->id())->first();
        return view('home.profile' , compact('user'));


    }

    public function editname(Request $request , $id){

        $user = User::find($id);

        if($request->has('name')){

            $request->validate([

                'name' => 'required'

            ]);

            $user->update([

                'name' => $request->name

            ]);

            return redirect()->route('home.profile');



        }

        if($request->has('email')){

            $request->validate([

                'email' => 'required'

            ]);

            $user->update([

                'email' => $request->email

            ]);

            return redirect()->route('home.profile');



        }

    }

    public function logout(){

        auth()->logout();

        return redirect('/');

    }

}
