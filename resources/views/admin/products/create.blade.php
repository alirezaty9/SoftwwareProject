@extends('admin.layouts.master')

@section('scripts')

<script>

$("#czContainer").czMore();

$("#brandSelect").selectpicker({
    'title': 'انتخاب برند'
});

$("#is_active").selectpicker({
    'title': 'انتخاب تگ'
});

$("#tagSelect").selectpicker({
    'title': 'انتخاب تگ'
});

$("#categorySelect").selectpicker({
    'title': 'انتخاب دسته بندی'
});

$("#primary_image").change(function(){

    var filename = $(this).val();
    $(this).next('.custom-file-label').html(filename);

});


$("#images").change(function(){

    var filename = $(this).val();
    $(this).next('.custom-file-label').html(filename);

});


$("#attributeControl").hide();

$('#categorySelect').on('changed.bs.select', function(){

    let attributeId = $(this).val();

    $.get(`{{url('admin-panel/managment/category-attribute/${attributeId}')}}` , function(response, status){

        if(status == 'success'){

            $('#attribute-control').find('div').remove();


            $('#attributeControl').fadeIn();

            response.attributes.forEach(element => {

                let formControlGroup = $('<div />' , {
                    class: 'form-group col-md-3'

                });

                formControlGroup.append($('<label />' , {
                    for : element.name,
                    text : element.name
                }));

                formControlGroup.append($('<input />' , {
                    input : 'text',
                    class : 'form-control',
                    id : element.name,
                    name: `attribute_ids[${element.id}]`
                }));

                $('#attribute-control').append(formControlGroup);

            });

            $("#getVariation").text(response.variation.name)


        }else{alert('مشکل در برقراری ارتباط با سرور');}

    }).fail(function(){alert('مشکل در برقراری ارتباط با سرور');})

});

</script>



@endsection

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ایجاد محصول</h5>

            <hr>

            @include('admin.sections.errors')

            <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="form-row">

                <div class="form-group col-md-3">

                    <label for="name">نام</label>
                    <input class="form-control" type="text" name="name" id="name">

                </div>

                <div class="form-group col-md-3">

                    <label for="parent_id">انتخاب برند</label>
                    <select id="brandSelect" data-live-search="true" name="brand_id"class="form-control">

                        @foreach ($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                      </select>

                </div>


                <div class="form-group col-md-3">

                    <label for="is_active">وضعیت</label>
                    <select class="form-control" name="is_active" id="is_active">

                        <option value="1" selected>فعال</option>
                        <option value="0">غیرفعال</option>

                    </select>

                </div>


                <div class="form-group col-md-3">

                    <label for="tag_ids">انتخاب تگ</label>
                    <select id="tagSelect" multiple data-live-search="true" name="tag_ids[]" class="form-control">

                        @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                      </select>

                </div>


                <div class="form-group col-md-12">

                    <label for="name">توضیحات</label>
                    <textarea class="form-control" type="text" name="description" id="description">{{old('description')}}</textarea>

                </div>

                {{-- images section --}}


                <div class="col-md-12">

                    <hr>



                </div>

                    <div class="form-group col-md-3">

                        <label for="primary-image">انتخاب تصویر اصلی</label>

                        <div class="custom-file">

                            <input type="file" name="primary_image" class="custom-file-input" id="primary_image">
                            <label for="primay_image" class="custom-file-label">انتخاب فایل</label>

                        </div>

                    </div>

                    <div class="form-group col-md-3">

                        <label for="primary-image">انتخاب تصاویر</label>

                        <div class="custom-file">

                            <input type="file" name="images[]" multiple class="custom-file-input" id="images">
                            <label for="images" class="custom-file-label">انتخاب فایل</label>

                        </div>

               </div>

               <div class="col-md-12">

                <hr>

                <p>دسته بندی و ویژگی</p>

               </div>

               <div class="col-md-12">
                   <div class="row justify-content-center">

                    <div class="form-group col-md-3">

                        <label for="parent_id">انتخاب دسته بندی</label>
                        <select id="categorySelect" data-live-search="true" name="category_id"class="form-control">

                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}} - {{$category->parent->name}}</option>
                            @endforeach
                          </select>

                        </div>

                   </div>
               </div>

              <div class="col-md-12">

                <div id="attribute-control" class="row"></div>

                <div id="attributeControl" class="col-md-12">
                    <hr>

                    <p>قیمت گذاری بر اساس متغیر <span class="text-danger font-weight-bold" id="getVariation"></span></p>


                    <div id="czContainer">
                        <div id="first">
                            <div class="recordset">

                                <div class="row">

                                    <div class="form-group col-md-3">

                                        <label>نام</label>
                                        <input class="form-control" type="text" name="variation_values[value][]">

                                    </div>

                                    <div class="form-group col-md-3">

                                        <label>قیمت</label>
                                        <input class="form-control" type="text" name="variation_values[price][]">

                                    </div>

                                    <div class="form-group col-md-3">

                                        <label>تعداد</label>
                                        <input class="form-control" type="text" name="variation_values[quantity][]">

                                    </div>

                                    <div class="form-group col-md-3">

                                        <label>شناسه انبار</label>
                                        <input class="form-control" type="text" name="variation_values[sku][]">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


              </div>

              <div class="col-md-12">

                <hr>

                <p>هزینه ارسال</p>

            </div>

            <div class="form-group col-md-3">

                <label for="name">هزینه ارسال</label>
                <input class="form-control" type="text" name="delivery_amount" id="delivery_amount">

            </div>

            <div class="form-group col-md-3">

                <label for="name">هزینه ارسال به ازای محصول اضافی</label>
                <input class="form-control" type="text" name="delivary_amount_per_product" id="delivary_amount_per_product">

            </div>

               </div>

                <button type="submit" class="btn btn-outline-primary mt-5">ثبت محصول</button>
                <a href="{{route('admin.products.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>


            </form>


        </div>

    </div>

</div>


@endsection
