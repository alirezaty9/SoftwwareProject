@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="d-flex justify-content-between mb-4">

            <h5 class="font-weight-bold">لیست برندها ({{$categories->total()}})</h5>

            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.categories.create')}}">

                <li class="fa fa-plus"></li>

                ایجاد دسته بندی

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
                        نام انگلیسی
                    </th>
                    <th>
                        والد
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

                @foreach ($categories as $key => $category)

                <tr>
                    <th>
                    {{$categories->firstItem() + $key}}
                    </th>

                    <th>
                        {{$category->name}}
                    </th>

                    <th>
                        {{$category->slug}}
                    </th>

                    <th>
                        @if ($category->parent_id == 0)

                        {{$category->name}}

                        @else

                        {{$category->parent->name}}

                        @endif

                    </th>

                    <th>
                     <span class="{{$category->getRawOriginal('is_active') ? 'text-success':'text-danger'}}">   {{$category->is_active}} </span>
                    </th>

                    <th>
                        <a href="{{route('admin.categories.show' , ['category' => $category->id])}}" class="btn btn-outline-success">نمایش</a>
                        <a href="{{route('admin.categories.edit' , ['category' => $category->id])}}" class="btn btn-outline-info">ویرایش</a>
                    </th>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>

@endsection
