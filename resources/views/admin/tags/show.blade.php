@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">برند : {{$brand->name}}</h5>

            <hr>


               <div class="row">

                <div class="form-group col-md-3">

                    <label for="name">نام</label>
                    <input class="form-control" type="text" value="{{$brand->name}}" disabled>

                </div>


                <div class="form-group col-md-3">

                    <label for="name">وضعیت</label>
                    <input class="form-control" type="text" value="{{$brand->is_active}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">تاریخ ایجاد برند</label>
                    <input class="form-control" type="text" value="{{verta($brand->created_at)}}" disabled>

                </div>


                </div>
               </div>

                <a href="{{route('admin.brands.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>



        </div>

    </div>

</div>


@endsection
