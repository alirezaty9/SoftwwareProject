@extends('admin.layouts.master')

@section('scripts')

<script>

$("#czContainer").czMore();


$("#categorySelect").selectpicker({
    'title': 'انتخاب دسته بندی'
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

            <h5 class="font-weight-bold">ویرایش دسته بندی محصول : {{$product->name}}</h5>

            <hr>

            @include('admin.sections.errors')

            <form action="{{route('admin.product.EditCategory.update' , ['product' => $product->id])}}" method="POST">
                @csrf
                @method('put')

                {{-- images section --}}

               <div class="col-md-12">
                   <div class="row justify-content-center">

                    <div class="form-group col-md-3">

                        <label for="parent_id">انتخاب دسته بندی</label>
                        <select id="categorySelect" data-live-search="true" name="category_id"class="form-control">

                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{$category->id == $product->category->id ? 'selected' : ''}}>{{$category->name}} - {{$category->parent->name}}</option>
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

                <button type="submit" class="btn btn-outline-primary mt-5">ثبت ویرایش</button>
                <a href="{{route('admin.products.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>


            </form>


        </div>

    </div>

</div>


@endsection
