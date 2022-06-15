@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="d-flex justify-content-between mb-4">

            <h5 class="font-weight-bold">لیست ویژگی ها ({{$attribute->total()}})</h5>

            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.attributes.create')}}">

                <li class="fa fa-plus"></li>

                ایجاد ویژگی

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
                        قیمت
                    </th>

                    <th>
                        اولویت
                    </th>

                    <th>
                        عملیات
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach ($attribute as $key => $attributes)

                <tr>
                    <th>
                    {{$attribute->firstItem() + $key}}
                    </th>

                    <th>
                        {{$attributes->name}}
                    </th>
                    <th>
                        {{$attributes->price}}
                    </th>
                    <th>
                        {{$attributes->priority}}
                    </th>


                    <th>
                        <a href="{{route('admin.attributes.edit' , ['attribute' => $attributes->id])}}" class="btn btn-outline-info">ویرایش</a>
                    </th>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>

@endsection
