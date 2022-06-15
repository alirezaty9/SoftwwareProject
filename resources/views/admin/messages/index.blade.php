@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="d-flex justify-content-between mb-4">

            <h5 class="font-weight-bold"> لیست پیام ها ({{$messages->total()}})</h5>

            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.messages.create')}}">

                <li class="fa fa-plus"></li>

                 ارسال پیام

            </a>


        </div>

        <table class="table table-bordered table-striped text-center">

            <thead>

                <tr>

                    <th>
                        #
                    </th>
                    <th>
                        ID کاربر
                    </th>

                    <th>
                        تلفن کاربر
                    </th>

                    <th>
                        عنوان پیام
                    </th>

                    <th>
                        متن پیام
                    </th>

                    <th>
                        عملیات
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach ($messages as $key => $message)

                <tr>
                    <th>
                    {{-- {{$message->firstItem() + $key}} --}}
                    </th>

                    <th>
                        {{$message->user_id}}
                    </th>

                    <th>
                        {{$message->user->cellphone}}
                    </th>

                    <th>
                        {{$message->title}}
                    </th>

                    <th>
                        {{$message->message}}
                    </th>


                    <th>
                        <a href="{{route('admin.messages.edit' , ['message' => $message->id])}}" class="btn btn-outline-info">ویرایش</a>
                    </th>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>

@endsection
