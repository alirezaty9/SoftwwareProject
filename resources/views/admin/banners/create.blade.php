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

            <h5 class="font-weight-bold">ایجاد بنر</h5>

            <hr>

            @include('admin.sections.errors')

            <form action="{{route('admin.banners.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="form-row">

                <div class="form-group col-md-3">

                    <label for="primary-image">انتخاب تصویر</label>

                    <div class="custom-file">

                        <input type="file" name="image" class="custom-file-input" id="image">
                        <label for="primay_image" class="custom-file-label">انتخاب فایل</label>

                    </div>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">عنوان</label>
                    <input class="form-control" type="text" name="title" id="title">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">متن</label>
                    <input class="form-control" type="text" name="text" id="text">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">اولیوت</label>
                    <input class="form-control" type="number" name="priority" id="priority">

                </div>

                <div class="form-group col-md-3">

                    <label for="is_active">وضعیت</label>
                    <select class="form-control" name="is_active" id="is_active">

                        <option value="1" selected>فعال</option>
                        <option value="0">غیرفعال</option>

                    </select>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">نوع بنر</label>
                    <input class="form-control" type="text" name="type" id="type">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">متن دکمه</label>
                    <input class="form-control" type="text" name="button_text" id="button_text">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">لینک دکمه</label>
                    <input class="form-control" type="text" name="button_link" id="button_link">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">آیکون دکمه</label>
                    <input class="form-control" type="text" name="button_icon" id="button_icon">

                </div>

               </div>

                <button type="submit" class="btn btn-outline-primary mt-5">ثبت بنر</button>
                <a href="{{route('admin.banners.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

            </form>


        </div>

    </div>

</div>


@endsection
