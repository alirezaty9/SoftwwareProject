@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ایجاد برند</h5>

            <hr>

            @include('admin.sections.errors')

            <form action="{{route('admin.brands.update' , ['brand' => $brand->id])}}" method="POST">
                @csrf
                @method('put')

               <div class="form-row">

                <div class="form-group col-md-3">

                    <label for="name">نام</label>
                    <input class="form-control" value="{{$brand->name}}" type="text" name="name" id="name">

                </div>

                <div class="form-group col-md-3">

                    <label for="is_active">وضعیت</label>
                    <select class="form-control" name="is_active" id="is_active">

                        <option value="1" {{$brand->getRawOriginal('is_active') ? 'selected':''}}>فعال</option>
                        <option value="0" {{$brand->getRawOriginal('is_active') ? 'selected' : ''}}>غیرفعال</option>

                    </select>

                </div>
               </div>

                <button type="submit" class="btn btn-outline-primary mt-5">ویرایش</button>
                <a href="{{route('admin.brands.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

            </form>


        </div>

    </div>

</div>


@endsection
