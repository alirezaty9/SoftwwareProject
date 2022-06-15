@extends('admin.layouts.master')

@section('content')
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5">

            <div class="mb-4">

                <h5 class="font-weight-bold">ایجاد ویژگی</h5>

                <hr>

                @include('admin.sections.errors')

                <form action="{{ route('admin.attributes.store') }}" method="POST">
                    @csrf

                    <div class="form-row">

                        <div class="form-group col-md-3">

                            <label for="name">نام</label>
                            <input class="form-control" type="text" name="name" id="name">

                        </div>
                        <div class="form-group col-md-3">

                            <label for="name">قیمت</label>
                            <input class="form-control" type="text" name="price" id="price">

                        </div>

                        <div class="form-group col-md-3">

                            <label for="priority">اولیوت</label>
                            <input class="form-control" type="number" name="priority" id="priority">

                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-primary mt-5">ثبت ویژگی</button>
                    <a href="{{ route('admin.attributes.index') }}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

                </form>


            </div>

        </div>

    </div>
@endsection
