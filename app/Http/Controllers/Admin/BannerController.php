<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::latest()->paginate(20);
        return view('admin.banners.index' , compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Banner $banners)
    {
        return view('admin.banners.create' , compact('banners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Banner $banners)
    {
        $request->validate([

            'image' => 'required|mimes:jpg,jpeg,png,svg',
            'title' => 'required',
            'text' => 'required',
            'priority' => 'required|integer',
            'type' => 'required'


        ]);

        $getBannerimage = new getProductImages();

        $img  = $getBannerimage->uploadBanner($request->image);


        Banner::create([

            'image' => $img['imageFile'],
            'title' => $request->title,
            'text' => $request->text,
            'priority' => $request->priority,
            'type' => $request->type,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'button_icon' => $request->button_icon

        ]);

        alert()->success('بنر با موفقیت ایجاد شد', '');
        return redirect()->route('admin.banners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit' , compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {

        $request->validate([

            'image' => 'nullable|mimes:jpg,jpeg,png,svg',
            'title' => 'required',
            'text' => 'required',
            'priority' => 'required|integer',
            'type' => 'required'

        ]);

        if($request->has('image')){


            $getBannerimage = new getProductImages();
            $img = $getBannerimage->uploadBanner($request->image);


        }

        $banner->update([
            'image' => $request->has('image') ? $img['imageFile'] : $banner->image,
            'title' => $request->title,
            'text' => $request->text,
            'is_active' => $request->is_active,
            'priority' => $request->priority,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'button_icon' => $request->button_icon
        ]);

        alert()->success('بنر با موفقیت ویرایش شد', '');
        return redirect()->route('admin.banners.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
