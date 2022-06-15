@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ارسال پیغام</h5>

            <hr>

            @include('admin.sections.errors')

            <form action="{{route('admin.messages.store')}}" method="POST">
                @csrf

               <div class="form-row">

                <div class="form-group col-md-3">

                    <select class="form-control" name="user_id" id="user_id">

                        @foreach ($users as $user)

                        <option value="{{$user->id}}">{{$user->cellphone}}</option>

                        @endforeach

                    </select>

                    <br>

                    <label for="name">عنوان</label>
                    <input class="form-control" type="text" name="title" id="name">

                    <label for="name">متن</label>
                    <textarea class="form-control" rows="4" cols="50" name="message" id="message"></textarea>

                    <label for="name">ارسال لینک</label>
                    <textarea class="form-control" rows="4" cols="30" name="link" id="link"></textarea>

                </div>
               </div>

                <button type="submit" class="btn btn-outline-primary mt-5">ثبت پیغام</button>
                <a href="{{route('admin.messages.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

            </form>


        </div>

    </div>

</div>


@endsection
