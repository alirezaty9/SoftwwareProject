@extends('admin.layouts.master')

@section('content')

@section('scripts')

<script>

$("#czContainer").czMore();

$("#brandSelect").selectpicker({
    'title': 'انتخاب برند'
});

$("#is_active").selectpicker({
    'title': 'وضعیت'
});

$("#tagSelect").selectpicker({
    'title': 'انتخاب تگ'
});

let variations = @json($productVariations);

variations.forEach(variation => {

    $(`#variationDateOnSaleFrom-${variation.id}`).MdPersianDateTimePicker({
    targetTextSelector: `#variationInputDateOnSaleFrom-${variation.id}`,
    englishNumber: true,
    enableTimePicker: true,
    textFormat: 'yyyy-MM-dd HH:mm:ss',
});

$(`#variationDateOnSaleTo-${variation.id}`).MdPersianDateTimePicker({
    targetTextSelector: `#variationInputDateOnSaleTo-${variation.id}`,
    englishNumber: true,
    enableTimePicker: true,
    textFormat: 'yyyy-MM-dd HH:mm:ss',

});

});

$("#variationDateOnSaleFrom").MdPersianDateTimePicker({
  targetTextSelector: '#variationInputDateOnSaleFrom'});

</script>

@endsection



<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ویراش محصول {{$product->name}}</h5>

            <hr>

            @include('admin.sections.errors')

            <form action="{{route('admin.products.update' , ['product' => $product->id])}}" method="POST">
                @csrf
                @method('put')

               <div class="form-row">

                <div class="form-group col-md-3">

                    <label for="name">نام</label>
                    <input class="form-control" value="{{$product->name}}" type="text" name="name" id="name">

                </div>


                <div class="form-group col-md-3">

                    <label for="parent_id">انتخاب برند</label>
                    <select id="brandSelect" data-live-search="true" name="brand_id"class="form-control">

                        @foreach ($brands as $brand)
                        <option value="{{$brand->id}}" {{$brand->id == $product->brand->id ? 'selected' : ''}}>{{$brand->name}}</option>
                        @endforeach
                      </select>

                </div>


                <div class="form-group col-md-3">

                    <label for="is_active">وضعیت</label>
                    <select class="form-control" name="is_active" id="is_active">

                        <option value="1" {{$product->getRawOriginal('is_active') ? 'selected' : ''}}>فعال</option>
                        <option value="0" {{$product->getRawOriginal('is_active') ? '' : 'selected'}}>غیرفعال</option>

                    </select>

                </div>


                <div class="form-group col-md-3">

                    <label for="tag_ids">انتخاب تگ</label>
                    <select id="tagSelect" multiple data-live-search="true" name="tag_ids[]" class="form-control">

                        @php
                            $getTags = $product->tags()->pluck('id')->toArray()
                        @endphp

                        @foreach ($tags as $tag)
                        <option value="{{$tag->id}}" {{in_array($tag->id , $getTags) ? 'selected' : ''}}>{{$tag->name}}</option>
                        @endforeach
                      </select>

                </div>


                <div class="form-group col-md-12">

                    <label for="name">توضیحات</label>
                    <textarea class="form-control" rows="4" type="text" name="description" id="description">{{$product->description}}</textarea>

                </div>

                <div class="col-md-12">

                    <hr>

                    <p>هزینه ارسال</p>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">هزینه ارسال</label>
                    <input class="form-control" type="text" name="delivery_amount" value="{{$product->delivery_amount}}" >

                </div>

                <div class="form-group col-md-3">

                    <label for="name">هزینه ارسال به ازای هر محصول</label>
                    <input class="form-control" name="delivery_amount_per_product" type="text" value="{{$product->delivery_amount_per_product}}" >

                </div>

                <div class="col-md-12">

                    <hr>

                    <p>ویژگی ها</p>

                </div>

                @foreach ($productAttribute as $productAttributes)

                <div class="form-group col-md-3">

                    <label for="name">{{$productAttributes->attribute->name}}</label>
                    <input class="form-control" name="Attribute_values[{{$productAttributes->id}}]" type="text" value="{{$productAttributes->value}}" >

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
                                    <input class="form-control" type="text" name="variation_values[{{$variation->id}}][price]" value="{{$variation->price}}" >

                                </div>

                                <div class="form-group col-md-3">s

                                    <label for="name">تعداد</label>
                                    <input class="form-control" name="variation_values[{{$variation->id}}][quantity]" type="text" value="{{$variation->quantity}}" >

                                </div>

                                <div class="form-group col-md-3">

                                    <label for="name">شناسه انبار</label>
                                    <input class="form-control" name="variation_values[{{$variation->id}}][sku]" type="text" value="{{$variation->sku}}" >

                                </div>

                                <div class="col-md-12">

                                    <hr>

                                    <p>حراجی</p>

                                </div>

                                <div class="form-group col-md-3">

                                    <label for="name">قیمت حراجی</label>
                                    <input class="form-control" name="variation_values[{{$variation->id}}][sale_price]" type="text" name="sale_price" value="{{$variation->sale_price}}" >

                                </div>

                                <div class="form-group col-md-3">

                                    <label for="name">تاریخ شروع تخفیف</label>

                                    <div class="input-group">

                                        <div class="input-group-prepend order-2">

                                            <span class="input-group-text" id="variationDateOnSaleFrom-{{$variation->id}}">

                                                <i class="fas fa-clock"></i>

                                            </span>

                                        </div>

                                        <input id="variationInputDateOnSaleFrom-{{$variation->id}}" class="form-control" name="variation_values[{{$variation->id}}][date_on_sale_from]" type="text" value="{{$variation->date_on_sale_from == null ? null:verta($variation->date_on_sale_from)}}" >

                                    </div>



                                </div>

                                <div class="form-group col-md-3">

                                    <label for="name">تاریخ پایان تخفیف</label>

                                    <div class="input-group">

                                        <div class="input-group-prepend order-2">

                                            <span class="input-group-text" id="variationDateOnSaleTo-{{$variation->id}}">

                                                <i class="fas fa-clock"></i>

                                            </span>

                                        </div>

                                        <input id="variationInputDateOnSaleTo-{{$variation->id}}" class="form-control" name="variation_values[{{$variation->id}}][date_on_sale_to]" type="text" value="{{$variation->date_on_sale_to == null ? null:verta($variation->date_on_sale_to)}}" >

                                    </div>



                                </div>


                            </div>

                        </div>

                    </div>

               </div>

               @endforeach

                    <button type="submit" class="btn btn-outline-primary mt-5">ویرایش</button>
                    <a href="{{route('admin.products.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

               </div>

            </form>


        </div>

    </div>

</div>


@endsection
