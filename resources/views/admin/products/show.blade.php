@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">محصول : {{$product->name}}</h5>

            <hr>


               <div class="row">

                <div class="form-group col-md-3">

                    <label for="name">نام</label>
                    <input class="form-control" type="text" value="{{$product->name}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">نام برند</label>
                    <input class="form-control" type="text" value="{{$product->brand->name}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">نام دسته بندی</label>
                    <input class="form-control" type="text" value="{{$product->category->name}}" disabled>

                </div>


                <div class="form-group col-md-3">

                    <label for="name">وضعیت</label>
                    <input class="form-control" type="text" value="{{$product->is_active}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">تاریخ ایجاد محصول</label>
                    <input class="form-control" type="text" value="{{verta($product->created_at)}}" disabled>

                </div>

                <div class="form-group col-md-12">

                    <label for="name">توضیحات</label>
                    <textarea class="form-control" type="text" disabled>{{$product->description}}</textarea>

                </div>

                <div class="col-md-12">

                    <hr>

                    <p>هزینه ارسال</p>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">هزینه ارسال</label>
                    <input class="form-control" type="text" value="{{$product->delivery_amount}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">هزینه ارسال به ازای هر محصول</label>
                    <input class="form-control" type="text" value="{{$product->delivery_amount_per_product}}" disabled>

                </div>

                <div class="col-md-12">

                    <hr>

                    <p>ویژگی ها</p>

                </div>

                @foreach ($productAttribute as $productAttributes)

                <div class="form-group col-md-3">

                    <label for="name">{{$productAttributes->attribute->name}}</label>
                    <input class="form-control" type="text" value="{{$productAttributes->value}}" disabled>

                </div>


                @endforeach

               </div>

               @foreach ($productVariations as $variation)

               <div class="col-md-12">

                    <hr>

                    <div class="d-flex">

                        <p class="mb-0"> قیمت و موجودی برای متغیر ({{$variation->value}}) </p>

                        <p class="mb-0 mr-3">

                            <button class="btn btn-sm btn-primary" type="button" data-toggle="collapse" data-target="#collapse-{{$variation->id}}">

                                نمایش

                            </button>

                        </p>

                    </div>

               </div>

               <div class="col-md-12">

                    <div class="collapse mt-2" id="collapse-{{$variation->id}}">


                        <div class="card card-body">

                            <div class="row">


                                <div class="form-group col-md-3">

                                    <label for="name">قیمت</label>
                                    <input class="form-control" type="text" value="{{$variation->price}}" disabled>

                                </div>

                                <div class="form-group col-md-3">

                                    <label for="name">تعداد</label>
                                    <input class="form-control" type="text" value="{{$variation->quantity}}" disabled>

                                </div>

                                <div class="form-group col-md-3">

                                    <label for="name">شناسه انبار</label>
                                    <input class="form-control" type="text" value="{{$variation->sku}}" disabled>

                                </div>

                                <div class="col-md-12">

                                    <hr>

                                    <p>حراجی</p>

                                </div>

                                <div class="form-group col-md-3">

                                    <label for="name">قیمت تخفیف</label>
                                    <input class="form-control" type="text" value="{{$variation->sale_price}}" disabled>

                                </div>

                                <div class="form-group col-md-3">

                                    <label for="name">تاریخ شروع تخفیف</label>
                                    <input class="form-control" type="text" value="{{$variation->date_on_sale_from == null ? null:verta($variation->date_on_sale_from)}}" disabled>

                                </div>

                                <div class="form-group col-md-3">

                                    <label for="name">تاریخ پایان تخفیف</label>
                                    <input class="form-control" type="text" value="{{$variation->date_on_sale_to == null ? null:verta($variation->date_on_sale_to)}}" disabled>

                                </div>


                            </div>

                        </div>

                    </div>

               </div>

               @endforeach


               <div class="col-md-12">

                <hr>

                <p>تصویر اصلی محصول</p>

            </div>


               <div class="col-md-3">

                    <div class="card">

                        <img src="{{url(env('PRODUCT_IMAGE_UPLOAD_PATH') . $product->primary_image)}}" alt="{{$product->name}}" class="card-img-top">

                    </div>

               </div>


               <div class="col-md-12">

                <hr>

                <p>سایر تصاویر محصول</p>

            </div>

            <div class="row">
            @foreach ($productImages as $image)

               <div class="col-md-3">

                    <div class="card">

                        <img src="{{url(env('PRODUCT_IMAGE_UPLOAD_PATH') . $image->image)}}" alt="{{$product->name}}" class="card-img-top">

                    </div>

               </div>


            @endforeach

            </div>


          </div>



                <a href="{{route('admin.products.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>



        </div>

    </div>

</div>


@endsection
