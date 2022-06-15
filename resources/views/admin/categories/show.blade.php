@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">دسته بندی : {{$category->name}}</h5>

            <hr>


               <div class="row">

                <div class="form-group col-md-3">

                    <label for="name">نام</label>
                    <input class="form-control" type="text" value="{{$category->name}}" disabled>

                </div>


                <div class="form-group col-md-3">

                    <label for="name">وضعیت</label>
                    <input class="form-control" type="text" value="{{$category->is_active}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">والد</label>
                    <div class="form-control div-desabled" type="text">
                        @if ($category->parent_id == 0)

                        {{$category->name}}

                        @else

                        {{$category->parent->name}}

                        @endif
                    </div>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">تاریخ ایجاد دسته بندی</label>
                    <input class="form-control" type="text" value="{{verta($category->created_at)}}" disabled>

                </div>

                <div class="form-group col-md-12">

                    <label for="name">توضیحات</label>
                    <textarea class="form-control" type="text"" disabled>{{$category->description}}</textarea>

                </div>




                </div>

                <div class="col-md-12">

                    <hr>

                    <div class="row">

                        <div class="col-md-3">

                            <label for="">ویژگی ها</label>

                            <div class="form-control div-desabled">

                                @foreach ($category->attributes as $attribute)

                                {{$attribute->name}} {{$loop->last ? '' : '،'}}

                                @endforeach

                            </div>

                        </div>

                        <div class="col-md-3">

                            <label for="">ویژگی های قابل فیلتر</label>

                            <div class="form-control div-desabled">

                                @foreach ($category->attributes()->wherePivot('if_filter' , 1)->get() as $attribute)

                                {{$attribute->name}} {{$loop->last ? '' : '،'}}

                                @endforeach

                            </div>

                        </div>

                        <div class="col-md-3">

                            <label for="">متغیر</label>

                            <div class="form-control div-desabled">

                                @foreach ($category->attributes()->wherePivot('is_variation' , 1)->get() as $attribute)

                                {{$attribute->name}} {{$loop->last ? '' : '،'}}

                                @endforeach

                            </div>

                    </div>



                </div>

               </div>

                <a href="{{route('admin.categories.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>



        </div>

    </div>

</div>


@endsection
