@extends('admin.layouts.master')

@section('scripts')


<script>

$("#image").change(function(){

var filename = $(this).val();
$(this).next('.custom-file-label').html(filename);

});


</script>

@endsection

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ویرایش بنر {{$banner->title}}</h5>

            <hr>

            @include('admin.sections.errors')




            <form action="{{route('admin.banners.update' , ['banner' => $banner])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row justify-content-center">

                    <div class="col-md-3">

                        <label for="primary-image">تصویر</label>

                        <div class="card">

                            <img src="{{url(env('BANNER_IMAGE_UPLOAD_PATH').$banner->image)}}" class="card-image-top" alt="">

                        </div>

                    </div>

                <div class="row">

                <div class="form-group col-md-3">

                    <label for="primary-image">انتخاب تصویر</label>

                    <div class="custom-file">

                        <input type="file" name="image" class="custom-file-input" id="image">
                        <label for="primay_image" class="custom-file-label">انتخاب فایل</label>

                    </div>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">عنوان</label>
                    <input class="form-control" value="{{$banner->title}}" type="text" name="title" id="title">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">متن</label>
                    <input class="form-control" value="{{$banner->text}}" name="text" id="text">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">اولیوت</label>
                    <input class="form-control" value="{{$banner->priority}}" type="number" name="priority" id="priority">

                </div>

                <div class="form-group col-md-3">

                    <label for="is_active">وضعیت</label>
                    <select class="form-control" name="is_active" id="is_active">

                        <option value="1" {{$banner->getRawOriginal('is_active') ? 'selected' : ''}}>فعال</option>
                        <option value="0" {{$banner->getRawOriginal('is_active') ? '' : 'selected'}}>غیرفعال</option>

                    </select>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">نوع بنر</label>
                    <input class="form-control" value="{{$banner->type}}" type="text" name="type" id="type">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">متن دکمه</label>
                    <input class="form-control" value="{{$banner->button_text}}" type="text" name="button_text" id="button_text">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">لینک دکمه</label>
                    <input class="form-control" value="{{$banner->button_link}}" type="text" name="button_link" id="button_link">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">آیکون دکمه</label>
                    <input class="form-control" value="{{$banner->button_icon}}" type="text" name="button_icon" id="button_icon">

                </div>

               </div>

                <button type="submit" class="btn btn-outline-primary mt-5">ویرایش بنر</button>
                <a href="{{route('admin.banners.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>
            </div>

            </form>


        </div>

    </div>

</div>


@endsection
