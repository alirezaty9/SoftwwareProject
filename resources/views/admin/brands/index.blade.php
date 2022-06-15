@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="d-flex justify-content-between mb-4">

            <h5 class="font-weight-bold">لیست برندها ({{$brand->total()}})</h5>

            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.brands.create')}}">

                <li class="fa fa-plus"></li>

                ایجاد برند

            </a>


        </div>

        <table class="table table-bordered table-striped text-center">

            <thead>

                <tr>

                    <th>
                        #
                    </th>
                    <th>
                        نام
                    </th>
                    <th>
                        وضعیت
                    </th>
                    <th>
                        عملیات
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach ($brand as $key => $brands)

                <tr>
                    <th>
                    {{$brand->firstItem() + $key}}
                    </th>

                    <th>
                        {{$brands->name}}
                    </th>

                    <th>
                     <span class="{{$brands->getRawOriginal('is_active') ? 'text-success':'text-danger'}}">   {{$brands->is_active}} </span>
                    </th>

                    <th>
                        <a href="{{route('admin.brands.show' , ['brand' => $brands->id])}}" class="btn btn-outline-success">نمایش</a>
                        <a href="{{route('admin.brands.edit' , ['brand' => $brands->id])}}" class="btn btn-outline-info">ویرایش</a>
                    </th>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>

@endsection
