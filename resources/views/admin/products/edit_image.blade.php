@extends('admin.layouts.master')

@section('scripts')

<script>

$("#primary_image").change(function(){

var filename = $(this).val();
$(this).next('.custom-file-label').html(filename);

});


$("#images").change(function(){

var filename = $(this).val();
$(this).next('.custom-file-label').html(filename);

});

</script>

@endsection

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ویرایش تصویر:{{$product->name}}</h5>

            <hr>

            @include('admin.sections.errors')

            <div class="row">

                <div class="col-md-12">
                    <h5>تصویر اصلی</h5>
                </div>

                <div class="col-md-3">

                    <div class="card">
                        <img src="{{url(env('PRODUCT_IMAGE_UPLOAD_PATH') . $product->primary_image)}}" alt="{{$product->name}}" class="card-img-top">
                    </div>

                </div>

            </div>

            <hr>

            <div class="row">


                <div class="col-md-12">
                    <h5>تصاویر</h5>
                </div>

                @foreach ($product->images as $image)

                   <div class="col-md-3">

                        <div class="card">

                            <img src="{{url(env('PRODUCT_IMAGE_UPLOAD_PATH') . $image->image)}}" alt="{{$product->name}}" class="card-img-top">


                            <div class="card-body text-center">

                                <form action="{{route('admin.product.image.destroy' , ['product' => $product->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="hidden" name="image_id" value="{{$image->id}}">
                                    <button type="submit" class="btn btn-danger mb-5">حذف</button>

                                </form>

                                <form action="{{route('admin.product.image.setPrimary', ['product' => $product->id])}}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <input type="hidden" name="image_id" value="{{$image->id}}">
                                    <button type="submit" class="btn btn-primary">انتخاب به عنوان تصویر اصلی</button>

                                </form>

                            </div>

                        </div>

                   </div>


                @endforeach

                </div>

                <hr>

                <form action="{{route('admin.product.image.add' , ['product' => $product->id])}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">

                            <label for="primary-image">انتخاب تصویر اصلی</label>

                            <div class="custom-file">

                                <input type="file" name="primary_image" class="custom-file-input" id="primary_image">
                                <label for="primay_image" class="custom-file-label">انتخاب فایل</label>

                            </div>

                        </div>

                        <div class="form-group col-md-4">

                            <label for="primary-image">سایر تصاویر</label>

                            <div class="custom-file">

                                <input type="file" name="images[]" multiple class="custom-file-input" id="images">
                                <label for="images" class="custom-file-label">انتخاب فایل</label>

                            </div>
                        </div>

                    </div>


                    <button type="submit" class="btn btn-outline-primary mt-5">ویرایش</button>
                    <a href="{{route('admin.products.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>
                </form>

    </div>

</div>


@endsection
