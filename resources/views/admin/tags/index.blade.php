@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="d-flex justify-content-between mb-4">

            <h5 class="font-weight-bold">لیست ویژگی ها ({{$tags->total()}})</h5>

            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.tags.create')}}">

                <li class="fa fa-plus"></li>

                ایجاد تگ

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
                        عملیات
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach ($tags as $key => $tag)

                <tr>
                    <th>
                    {{$tags->firstItem() + $key}}
                    </th>

                    <th>
                        {{$tag->name}}
                    </th>


                    <th>
                        <a href="{{route('admin.tags.edit' , ['tag' => $tag->id])}}" class="btn btn-outline-info">ویرایش</a>
                    </th>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>

@endsection
