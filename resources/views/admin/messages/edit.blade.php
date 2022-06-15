@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ایجاد برند</h5>

            <hr>

            @include('admin.sections.errors')

            <form action="{{route('admin.messages.update' , ['message' => $message->id])}}" method="POST">
                @csrf
                @method('put')

               <div class="form-row">

                <div class="form-group col-md-3">

                    <label for="name">کاربر مورد نظر</label>
                    <input class="form-control" value="{{$message->user->cellphone}}" type="text" name="cellphone" id="cellphone" disabled>

                    <label for="name">عنوان</label>
                    <input class="form-control" value="{{$message->title}}" type="text" name="title" id="name">

                    <label for="name">متن</label>
                    <textarea class="form-control" rows="4" cols="50" name="message" id="message">{{$message->message}}</textarea>

                    <label for="name">لینک</label>
                    <textarea class="form-control" rows="4" cols="50" name="link" id="link">{{$message->link}}</textarea>
                </div>
               </div>

                <button type="submit" class="btn btn-outline-primary mt-5">ویرایش</button>
                <a href="{{route('admin.messages.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

            </form>


        </div>

    </div>

</div>


@endsection
