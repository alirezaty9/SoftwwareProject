@extends('admin.layouts.master')

@section('scripts')
    <script>

            $('#attributeSelect').selectpicker({'title' : 'انتخاب ویژگی'});
            $('#tagSelect').selectpicker({'title' : 'انتخاب تگ'});

            $('#attributeSelect').on('changed.bs.select', function() {
            let attributesSelected = $(this).val();
            let attributes = @json($attributes);

            let attributeForFilter = [];

            attributes.map((attribute) => {
                $.each(attributesSelected , function(i,element){
                    if( attribute.id == element ){
                        attributeForFilter.push(attribute);
                    }
                });
            });

            $("#attributeIsFilterSelect").find("option").remove();
            $("#variationSelect").find("option").remove();
            attributeForFilter.forEach((element)=>{
                let attributeFilterOption = $("<option/>" , {
                    value : element.id,
                    text : element.name
                });

                let variationOption = $("<option/>" , {
                    value : element.id,
                    text : element.name
                });

                $("#attributeIsFilterSelect").append(attributeFilterOption);
                $("#attributeIsFilterSelect").selectpicker('refresh');

                $("#variationSelect").append(variationOption);
                $("#variationSelect").selectpicker('refresh');
            });


        });

        $("#attributeIsFilterSelect").selectpicker({
            'title': 'انتخاب ویژگی'
        });

        $("#variationSelect").selectpicker({
            'title': 'انتخاب ویژگی'
        });



    </script>
@endsection

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ایجاد دسته بندی</h5>

            <hr>

            @include('admin.sections.errors')

            <form action="{{route('admin.categories.store')}}" method="POST">
                @csrf

               <div class="form-row">

                <div class="form-group col-md-3">

                    <label for="name">نام</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}">

                </div>

                <div class="form-group col-md-3">

                    <label for="slug">نام انگلیسی</label>
                    <input class="form-control" type="text" name="slug" id="slug" value="{{old('slug')}}">

                </div>

                <div class="form-group col-md-3">

                    <label for="parent_id">والد</label>
                    <select class="form-control" name="parent_id" id="parent_id">

                        <option value="0" selected>بدون والد</option>
                        @foreach ($parentCategories as $parentCategory)

                        <option value="{{$parentCategory->id}}">{{$parentCategory->name}}</option>

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

                    <label for="parent_id">ویژگی</label>
                    <select id="attributeSelect" data-live-search="true" name="attribute_ids[]" multiple class="form-control">

                        @foreach ($attributes as $attribute)
                        <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                        @endforeach
                      </select>

                </div>

                <div class="form-group col-md-3">

                    <label for="parent_id">تگ</label>
                    <select id="tagSelect" data-live-search="true" name="tag_ids[]" multiple class="form-control">

                        @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                      </select>

                </div>

                {{-- <div class="form-group col-md-3">

                    <label for="parent_id">ویژگی های قابل فیلتر</label>
                    <select id="attributeIsFilterSelect" data-live-search="true" name="attribute_is_filter_ids[]" multiple class="form-control">

                      </select>

                </div>

                <div class="form-group col-md-3">

                    <label for="parent_id">متغیر</label>
                    <select id="variationSelect" data-live-search="true" name="attribute_variation_id" class="form-control">

                      </select>

                </div> --}}

                <div class="form-group col-md-3">

                    <label for="name">آیکون</label>
                    <input class="form-control" type="text" name="icon" id="icon" value="{{old('icon')}}">

                </div>

               </div>



            <div class="form-group col-md-12">

                <label for="name">توضیحات</label>
                <textarea class="form-control" type="text" name="description" id="description">{{old('description')}}</textarea>

            </div>

                <button type="submit" class="btn btn-outline-primary mt-5">ثبت</button>
                <a href="{{route('admin.brands.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

            </form>


        </div>

    </div>

</div>


@endsection
