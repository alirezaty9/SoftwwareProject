@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="d-flex justify-content-between mb-4">

            <h5 class="font-weight-bold">لیست بنر ها ({{$banner->total()}})</h5>

            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.banners.create')}}">

                <li class="fa fa-plus"></li>

                ایجاد بنر

            </a>


        </div>

        <table class="table table-bordered table-striped text-center">

            <thead>

                <tr>

                    <th>
                        #
                    </th>
                    <th>
                        تصویر
                    </th>
                    <th>
                        عنوان
                    </th>
                    <th>
                        متن
                    </th>
                    <th>
                        اولویت
                    </th>
                    <th>
                        وضعیت
                    </th>
                    <th>
                        نوع
                    </th>
                    <th>
                        متن دکمه
                    </th>
                    <th>
                        لینک دکمه
                    </th>
                    <th>
                        آیکون دکمه
                    </th>
                    <th>
                        عملیات
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach ($banner as $key => $banners)

                <tr>
                    <th>
                    {{$banner->firstItem() + $key}}
                    </th>

                    <th>
                       <a target="_blank" href="{{url(env('BANNER_IMAGE_UPLOAD_PATH').$banners->image)}}">{{$banners->image}}</a>
                    </th>

                    <th>
                        {{$banners->title}}
                     </th>

                     <th>
                        {{$banners->text}}
                     </th>
                     <th>
                        {{$banners->priority}}
                     </th>

                     <th>
                        <span class="{{$banners->getRawOriginal('is_active') ? 'text-success' : 'text-danger'}}">{{$banners->is_active}}</span>
                     </th>
                     <th>
                        {{$banners->type}}
                     </th>
                     <th>
                        {{$banners->button_text}}
                     </th>
                     <th>
                        {{$banners->button_link}}
                     </th>
                     <th>
                        {{$banners->button_icon}}
                     </th>


                    <th>
                        <a href="{{route('admin.banners.edit' , ['banner' => $banners->id])}}" class="btn btn-outline-info">ویرایش</a>

                        <form action="{{ route('admin.banners.destroy', ['banner'=>$banners->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger" type="submit">حذف</button>

                    </form>
                    </th>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>

@endsection
