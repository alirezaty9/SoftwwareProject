@extends('home.layouts.master')

@section('content')
    <!-- Main Section ---------------------------------------------------------------->



    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-12 col-xl-11 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="_card_  px-0 pt-4 pb-0 mt-3 mb-3">
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>خدمات</strong></li>
                            <li id="personal"><strong>زمان و مکان</strong></li>
                            <li id="payment"><strong>پرداخت</strong></li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                            <h2 id="heading">انتخاب خدمات</h2>
                            </select>
                            <div class="form-card">
                                <div class="row">
                                    <div class="tabs">
                                        <div class="tabby-tab">
                                            <input type="radio" id="tab-1" name="tabby-tabs">
                                            <label class="gg" for="tab-1">طراحی سایت</label>
                                            <div class="tabby-content">
                                                <hr class="aaa">
                                                <div class="col-12 d-flex d-flex justify-content-center  mt-5">
                                                    <div class="col-12 col-md-10 col-lg-8">
                                                        <div class="row  d-flex justify-content-center pricing-box-Shadow">
                                                            <div class="col-12 col-md-5 col-lg-6    ">
                                                                <select class="form-select my-5 mx-auto w-100 w-lg-50"
                                                                    id='PhotographySelection'>
                                                                    <option selected> انتخاب پکیچ ها</option>
                                                                    <option value="1"> برنزی قیمت </option>
                                                                    <option value="2">نقره ای </option>
                                                                    <option value="3">طلایی </option>
                                                                </select>
                                                                <button
                                                                    class="button d-none d-md-block custom-margin-pricing"
                                                                    role="button" id="CartBtnPhotography"> افزودن به سبد
                                                                    خرید</button>
                                                            </div>
                                                            <div class="col-12 col-md-7 col-lg-6 ">
                                                                <h4 class="text-center pt-5"> توضیحات خدمت انتخاب شده
                                                                </h4>
                                                                <hr class="aaa w-75 mx-auto">
                                                                <p class="mx-auto p-2 text-justify d-block" id="bronze">
                                                                    ویژگی های برنزی با قیمت ۱۰</p>
                                                                <p class="mx-auto p-2 text-justify d-none" id="silver">
                                                                    ویژگی
                                                                    های نقره ای با قیمت ۱۰۰</p>
                                                                <p class="mx-auto p-2 text-justify d-none" id="gold">
                                                                    ویژگی های طلاایی با قیمت ۱۰۰۰
                                                                </p>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-9"></div> --}}
                                                        <button class="button d-block d-md-none my-5" role="button">افزودن
                                                            به سبد خرید</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabby-tab">
                                            <input type="radio" id="tab-2" name="tabby-tabs" value="عکاسی">
                                            <label class="gg" for="tab-2">عکاسی</label>
                                            <div class="tabby-content">
                                                <div class="col-12 d-flex d-flex justify-content-center  mt-5">
                                                    <div class="col-12 col-md-8">
                                                        <div class="row  d-flex justify-content-center pricing-box-Shadow">
                                                            <div class="col-12 col-md-5 col-lg-6    ">

                                                                <select class="form-select my-5 mx-auto w-100 w-lg-50">
                                                                    <option selected>انتخاب پکیچ ها</option>
                                                                    <option value="1">نقره ای</option>
                                                                    <option value="2">طلایی</option>
                                                                    <option value="3">برنزی</option>
                                                                </select>
                                                                <button
                                                                    class="button d-none d-md-block custom-margin-pricing">
                                                                    افزودن به سبد خرید</button>
                                                            </div>
                                                            <div class="col-12 col-md-7 col-lg-6 ">
                                                                <h4 class="text-center pt-5"> توضیحات خدمت انتخاب شده
                                                                </h4>
                                                                <p class="mx-auto p-2 text-justify">لورم ایپسوم متن
                                                                    ساختگی
                                                                    با تولید سادگی نامفهوم از صنعت چاپ و
                                                                    با استفاده از طراحان گرافیک است.لورم ایپسوم متن
                                                                    ساختگی
                                                                    با تولید سادگی نامفهوم از صنعت چاپ و
                                                                    با استفاده از طراحان گرافیک است.لورم ایپسوم متن
                                                                    ساختگی
                                                                    با تولید سادگی نامفهوم از صنعت چاپ و
                                                                    با استفاده از طراحان گرافیک است.لورم ایپسوم متن
                                                                    ساختگی
                                                                    با تولید سادگی نامفهوم از صنعت چاپ و
                                                                    با استفاده از طراحان گرافیک است.لورم ایپسوم متن
                                                                    ساختگی
                                                                    با تولید سادگی نامفهوم از صنعت چاپ و
                                                                    با استفاده از طراحان گرافیک است.</p>
                                                            </div>
                                                        </div>
                                                        <button class="button d-block d-md-none my-3">افزودن
                                                            به سبد خرید</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabby-tab">
                                            <input type="radio" id="tab-3" name="tabby-tabs" checked>
                                            <label class="gg" for="tab-3">فیلم برداری</label>
                                            <div class="tabby-content">
                                                <div class="col-12 d-flex d-flex justify-content-center  mt-5">
                                                    <div class="col-12 col-md-10">
                                                        <div class="row  d-flex justify-content-center pricing-box-Shadow">
                                                            <div class="col-12    ">
                                                                <select class="form-select my-5 mx-auto w-50 w-lg-25" id=filmingSelection>
                                                                    <option selected>انتخاب پکیچ ها</option>
                                                                    <option value="1">فیلم برداری ۱</option>
                                                                    <option value="2">فیلم برداری ۲</option>
                                                                    <option value="3">فیلم برداری ۳</option>
                                                                    <option value="4">فیلم برداری 4</option>
                                                                </select>
                                                                <div class="col-12" id="filming1">
                                                                    <p>filming1</p>
                                                                    <div class="row">
                                                                        <h6 class="mx-auto d-md-none mt-3 ">حالت دوربین
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">

                                                                        <div class="col-10 col-md-6  col-lg-4 bg-secendory">
                                                                            <div class=" d-md-flex flex-column d-none">
                                                                                <h6 class="mx-auto ">حالت دوربین</h6>
                                                                                <hr class="aaa w-50 mx-auto mt-0">
                                                                            </div>

                                                                            <div class="form-check m-2 ">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault4" />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckDefault4">
                                                                                    دوریبن ثابت: (ساعتی: 1000M) </label>
                                                                            </div>
                                                                            <!-- Checked checkbox -->
                                                                            <div class="form-check m-2 ">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked5" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked5">
                                                                                    دوریبن حرکتی(ساعتی: 1000M)</label>
                                                                            </div>
                                                                            <div class="form-check m-2 ">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked6" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked6">
                                                                                    دوریبن کرین: (ساعتی: 1000M)</label>
                                                                            </div>

                                                                        </div>




                                                                        <h6 class="mx-auto d-md-none mt-3">مدت زمان درخواستی
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">

                                                                        <div class="col-10 col-md-6  col-lg-4  ">


                                                                            <div class="d-md-flex flex-column d-none ">
                                                                                <h6 class="mx-auto "> مدت زمان
                                                                                    درخواستی</h6>
                                                                                <hr class="aaa w-50 mx-auto mt-0">
                                                                            </div>



                                                                            <div class="1 form-check m-1"> <label
                                                                                    for="tentacles1" class="ccustom-margin">
                                                                                    مدت زمان
                                                                                    درخواستی
                                                                                </label>
                                                                                <input type="number" id="tentacles1"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="1" class="text-center">
                                                                                <span>ساعت</span>
                                                                            </div>
                                                                            <div class="2 form-check m-1"> <label
                                                                                    for="tentacles2" class="ccustom-margin">
                                                                                    مدت زمان
                                                                                    درخواستی</label>
                                                                                <input type="number" id="tentacles2"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="1" class="text-center">
                                                                                <span>ساعت</span>
                                                                            </div>
                                                                            <div class="3 form-check m-1"> <label
                                                                                    for="tentacles3"
                                                                                    class="ccustom-margin">مدت زمان
                                                                                    درخواستی</label>
                                                                                <input type="number" id="tentacles3"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="1" class="text-center">
                                                                                <span>ساعت</span>
                                                                            </div>
                                                                        </div>





                                                                        <h6 class="mx-auto d-md-none mt-3">تعداد دوربین
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">
                                                                        <div
                                                                            class="col-10 col-md-6  col-lg-4  text-justify mt-lg-0 mt-3">
                                                                            <div class=" d-md-flex flex-column d-none">
                                                                                <h6 class="mx-auto ">تعداد دوربین
                                                                                </h6>
                                                                                <hr class="aaa w-50 mx-auto mt-0">
                                                                            </div>
                                                                            <div
                                                                                class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start  custom-border mt-md-4 mt-lg-0">
                                                                                <label for="tentacles3 "
                                                                                    class="ccustom-margin"> تعداد دوربین
                                                                                    : ثابت</label>
                                                                                <input type="number" id="tentacles3"
                                                                                    class=" text-center h-25 border-custom"
                                                                                    name="tentacles t" min="1" max="10"
                                                                                    value="1" class="text-center">
                                                                            </div>
                                                                            <div
                                                                                class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start ">
                                                                                <label for="tentacles4 "
                                                                                    class="ccustom-margin"> تعداد دوربین
                                                                                    حرکتی</label>
                                                                                <input type="number" id="tentacles4"
                                                                                    class=" text-center h-25 border-custom"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="1" class="text-center">
                                                                            </div>
                                                                            <div
                                                                                class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start ">
                                                                                <label for="tentacles5 "
                                                                                    class="ccustom-margin"> تعداد دوربین
                                                                                    : کرین</label>
                                                                                <input type="number" id="tentacles5"
                                                                                    class=" text-center h-25 border-custom"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="1" class="text-center">
                                                                            </div>


                                                                        </div>



                                                                        <h6 class="mx-auto d-md-none mt-3">ویژگی ها
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">
                                                                        <div class="d-block">

                                                                            <div class=" d-md-flex flex-column d-none ">
                                                                                <h6 class="mx-auto mt-3">ویژگی ها </h6>
                                                                                <hr class="aaa w-25 mx-auto mt-0">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-10 col-md-6  col-lg-4 mt-2 text-justify mt-3 d-flex ">

                                                                            <div class="form-check m-2 d-child-flex">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault1" />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckDefault1">
                                                                                    صدابرداری</label>
                                                                            </div>

                                                                            <!-- Checked checkbox -->
                                                                            <div class="form-check m-2 d-child-flex">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked2" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked2">
                                                                                    نورپردازی</label>
                                                                            </div>
                                                                            <div class="form-check m-2 d-child-flex">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked3" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked3">
                                                                                    تدوین</label>
                                                                            </div>


                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 d-none" id="filming2">
                                                                    <p>filming2</p>

                                                                    <div class="row">
                                                                        <h6 class="mx-auto d-md-none mt-3 ">حالت دوربین
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">

                                                                        <div class="col-10 col-md-6  col-lg-4 bg-secendory">
                                                                            <div class=" d-md-flex flex-column d-none">
                                                                                <h6 class="mx-auto ">حالت دوربین</h6>
                                                                                <hr class="aaa w-50 mx-auto mt-0">
                                                                            </div>

                                                                            <div class="form-check m-2 ">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault4" />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckDefault4">
                                                                                    دوریبن ثابت: (ساعتی: 1000M) </label>
                                                                            </div>
                                                                            <!-- Checked checkbox -->
                                                                            <div class="form-check m-2 ">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked5" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked5">
                                                                                    دوریبن حرکتی(ساعتی: 1000M)</label>
                                                                            </div>
                                                                            <div class="form-check m-2 ">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked6" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked6">
                                                                                    دوریبن کرین: (ساعتی: 1000M)</label>
                                                                            </div>

                                                                        </div>




                                                                        <h6 class="mx-auto d-md-none mt-3">مدت زمان درخواستی
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">

                                                                        <div class="col-10 col-md-6  col-lg-4  ">


                                                                            <div class="d-md-flex flex-column d-none ">
                                                                                <h6 class="mx-auto "> مدت زمان
                                                                                    درخواستی</h6>
                                                                                <hr class="aaa w-50 mx-auto mt-0">
                                                                            </div>



                                                                            <div class="1 form-check m-1"> <label
                                                                                    for="tentacles1" class="ccustom-margin">
                                                                                    مدت زمان
                                                                                    درخواستی
                                                                                </label>
                                                                                <input type="number" id="tentacles1"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="2" class="text-center">
                                                                                <span>ساعت</span>
                                                                            </div>
                                                                            <div class="2 form-check m-1"> <label
                                                                                    for="tentacles2" class="ccustom-margin">
                                                                                    مدت زمان
                                                                                    درخواستی</label>
                                                                                <input type="number" id="tentacles2"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="2" class="text-center">
                                                                                <span>ساعت</span>
                                                                            </div>
                                                                            <div class="3 form-check m-1"> <label
                                                                                    for="tentacles3"
                                                                                    class="ccustom-margin">مدت زمان
                                                                                    درخواستی</label>
                                                                                <input type="number" id="tentacles3"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="3" class="text-center">
                                                                                <span>ساعت</span>
                                                                            </div>
                                                                        </div>





                                                                        <h6 class="mx-auto d-md-none mt-3">تعداد دوربین
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">
                                                                        <div
                                                                            class="col-10 col-md-6  col-lg-4  text-justify mt-lg-0 mt-3">
                                                                            <div class=" d-md-flex flex-column d-none">
                                                                                <h6 class="mx-auto ">تعداد دوربین
                                                                                </h6>
                                                                                <hr class="aaa w-50 mx-auto mt-0">
                                                                            </div>
                                                                            <div
                                                                                class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start  custom-border mt-md-4 mt-lg-0">
                                                                                <label for="tentacles3 "
                                                                                    class="ccustom-margin"> تعداد دوربین
                                                                                    : ثابت</label>
                                                                                <input type="number" id="tentacles3"
                                                                                    class=" text-center h-25 border-custom"
                                                                                    name="tentacles t" min="1" max="10"
                                                                                    value="2" class="text-center">
                                                                            </div>
                                                                            <div
                                                                                class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start ">
                                                                                <label for="tentacles4 "
                                                                                    class="ccustom-margin"> تعداد دوربین
                                                                                    حرکتی</label>
                                                                                <input type="number" id="tentacles4"
                                                                                    class=" text-center h-25 border-custom"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="2" class="text-center">
                                                                            </div>
                                                                            <div
                                                                                class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start ">
                                                                                <label for="tentacles5 "
                                                                                    class="ccustom-margin"> تعداد دوربین
                                                                                    : کرین</label>
                                                                                <input type="number" id="tentacles5"
                                                                                    class=" text-center h-25 border-custom"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="2" class="text-center">
                                                                            </div>


                                                                        </div>



                                                                        <h6 class="mx-auto d-md-none mt-3">ویژگی ها
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">
                                                                        <div class="d-block">

                                                                            <div class=" d-md-flex flex-column d-none ">
                                                                                <h6 class="mx-auto mt-3">ویژگی ها </h6>
                                                                                <hr class="aaa w-25 mx-auto mt-0">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-10 col-md-6  col-lg-4 mt-2 text-justify mt-3 d-flex ">

                                                                            <div class="form-check m-2 d-child-flex">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault1" />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckDefault1">
                                                                                    صدابرداری</label>
                                                                            </div>

                                                                            <!-- Checked checkbox -->
                                                                            <div class="form-check m-2 d-child-flex">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked2" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked2">
                                                                                    نورپردازی</label>
                                                                            </div>
                                                                            <div class="form-check m-2 d-child-flex">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked3" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked3">
                                                                                    تدوین</label>
                                                                            </div>


                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div class="col-12 d-none" id="filming3">
                                                                    <p>filming3</p>

                                                                    <div class="row">
                                                                        <h6 class="mx-auto d-md-none mt-3 ">حالت دوربین
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">

                                                                        <div class="col-10 col-md-6  col-lg-4 bg-secendory">
                                                                            <div class=" d-md-flex flex-column d-none">
                                                                                <h6 class="mx-auto ">حالت دوربین</h6>
                                                                                <hr class="aaa w-50 mx-auto mt-0">
                                                                            </div>

                                                                            <div class="form-check m-2 ">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault4" />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckDefault4">
                                                                                    دوریبن ثابت: (ساعتی: 1000M) </label>
                                                                            </div>
                                                                            <!-- Checked checkbox -->
                                                                            <div class="form-check m-2 ">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked5" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked5">
                                                                                    دوریبن حرکتی(ساعتی: 1000M)</label>
                                                                            </div>
                                                                            <div class="form-check m-2 ">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked6" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked6">
                                                                                    دوریبن کرین: (ساعتی: 1000M)</label>
                                                                            </div>

                                                                        </div>




                                                                        <h6 class="mx-auto d-md-none mt-3">مدت زمان درخواستی
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">

                                                                        <div class="col-10 col-md-6  col-lg-4  ">


                                                                            <div class="d-md-flex flex-column d-none ">
                                                                                <h6 class="mx-auto "> مدت زمان
                                                                                    درخواستی</h6>
                                                                                <hr class="aaa w-50 mx-auto mt-0">
                                                                            </div>



                                                                            <div class="1 form-check m-1"> <label
                                                                                    for="tentacles1" class="ccustom-margin">
                                                                                    مدت زمان
                                                                                    درخواستی
                                                                                </label>
                                                                                <input type="number" id="tentacles1"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="3" class="text-center">
                                                                                <span>ساعت</span>
                                                                            </div>
                                                                            <div class="2 form-check m-1"> <label
                                                                                    for="tentacles2" class="ccustom-margin">
                                                                                    مدت زمان
                                                                                    درخواستی</label>
                                                                                <input type="number" id="tentacles2"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="3" class="text-center">
                                                                                <span>ساعت</span>
                                                                            </div>
                                                                            <div class="3 form-check m-1"> <label
                                                                                    for="tentacles3"
                                                                                    class="ccustom-margin">مدت زمان
                                                                                    درخواستی</label>
                                                                                <input type="number" id="tentacles3"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="3" class="text-center">
                                                                                <span>ساعت</span>
                                                                            </div>
                                                                        </div>





                                                                        <h6 class="mx-auto d-md-none mt-3">تعداد دوربین
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">
                                                                        <div
                                                                            class="col-10 col-md-6  col-lg-4  text-justify mt-lg-0 mt-3">
                                                                            <div class=" d-md-flex flex-column d-none">
                                                                                <h6 class="mx-auto ">تعداد دوربین
                                                                                </h6>
                                                                                <hr class="aaa w-50 mx-auto mt-0">
                                                                            </div>
                                                                            <div
                                                                                class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start  custom-border mt-md-4 mt-lg-0">
                                                                                <label for="tentacles3 "
                                                                                    class="ccustom-margin"> تعداد دوربین
                                                                                    : ثابت</label>
                                                                                <input type="number" id="tentacles3"
                                                                                    class=" text-center h-25 border-custom"
                                                                                    name="tentacles t" min="1" max="10"
                                                                                    value="3" class="text-center">
                                                                            </div>
                                                                            <div
                                                                                class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start ">
                                                                                <label for="tentacles4 "
                                                                                    class="ccustom-margin"> تعداد دوربین
                                                                                    حرکتی</label>
                                                                                <input type="number" id="tentacles4"
                                                                                    class=" text-center h-25 border-custom"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="3" class="text-center">
                                                                            </div>
                                                                            <div
                                                                                class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start ">
                                                                                <label for="tentacles5 "
                                                                                    class="ccustom-margin"> تعداد دوربین
                                                                                    : کرین</label>
                                                                                <input type="number" id="tentacles5"
                                                                                    class=" text-center h-25 border-custom"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="3" class="text-center">
                                                                            </div>


                                                                        </div>



                                                                        <h6 class="mx-auto d-md-none mt-3">ویژگی ها
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">
                                                                        <div class="d-block">

                                                                            <div class=" d-md-flex flex-column d-none ">
                                                                                <h6 class="mx-auto mt-3">ویژگی ها </h6>
                                                                                <hr class="aaa w-25 mx-auto mt-0">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-10 col-md-6  col-lg-4 mt-2 text-justify mt-3 d-flex ">

                                                                            <div class="form-check m-2 d-child-flex">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault1" />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckDefault1">
                                                                                    صدابرداری</label>
                                                                            </div>

                                                                            <!-- Checked checkbox -->
                                                                            <div class="form-check m-2 d-child-flex">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked2" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked2">
                                                                                    نورپردازی</label>
                                                                            </div>
                                                                            <div class="form-check m-2 d-child-flex">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked3" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked3">
                                                                                    تدوین</label>
                                                                            </div>


                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 d-none" id="filming4">
                                                                    <p>filming4</p>

                                                                    <div class="row">
                                                                        <h6 class="mx-auto d-md-none mt-3 ">حالت دوربین
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">

                                                                        <div class="col-10 col-md-6  col-lg-4 bg-secendory">
                                                                            <div class=" d-md-flex flex-column d-none">
                                                                                <h6 class="mx-auto ">حالت دوربین</h6>
                                                                                <hr class="aaa w-50 mx-auto mt-0">
                                                                            </div>

                                                                            <div class="form-check m-2 ">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault4" />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckDefault4">
                                                                                    دوریبن ثابت: (ساعتی: 1000M) </label>
                                                                            </div>
                                                                            <!-- Checked checkbox -->
                                                                            <div class="form-check m-2 ">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked5" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked5">
                                                                                    دوریبن حرکتی(ساعتی: 1000M)</label>
                                                                            </div>
                                                                            <div class="form-check m-2 ">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked6" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked6">
                                                                                    دوریبن کرین: (ساعتی: 1000M)</label>
                                                                            </div>

                                                                        </div>




                                                                        <h6 class="mx-auto d-md-none mt-3">مدت زمان درخواستی
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">

                                                                        <div class="col-10 col-md-6  col-lg-4  ">


                                                                            <div class="d-md-flex flex-column d-none ">
                                                                                <h6 class="mx-auto "> مدت زمان
                                                                                    درخواستی</h6>
                                                                                <hr class="aaa w-50 mx-auto mt-0">
                                                                            </div>



                                                                            <div class="1 form-check m-1"> <label
                                                                                    for="tentacles1" class="ccustom-margin">
                                                                                    مدت زمان
                                                                                    درخواستی
                                                                                </label>
                                                                                <input type="number" id="tentacles1"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="4" class="text-center">
                                                                                <span>ساعت</span>
                                                                            </div>
                                                                            <div class="2 form-check m-1"> <label
                                                                                    for="tentacles2" class="ccustom-margin">
                                                                                    مدت زمان
                                                                                    درخواستی</label>
                                                                                <input type="number" id="tentacles2"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="4" class="text-center">
                                                                                <span>ساعت</span>
                                                                            </div>
                                                                            <div class="3 form-check m-1"> <label
                                                                                    for="tentacles3"
                                                                                    class="ccustom-margin">مدت زمان
                                                                                    درخواستی</label>
                                                                                <input type="number" id="tentacles3"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="4" class="text-center">
                                                                                <span>ساعت</span>
                                                                            </div>
                                                                        </div>





                                                                        <h6 class="mx-auto d-md-none mt-3">تعداد دوربین
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">
                                                                        <div
                                                                            class="col-10 col-md-6  col-lg-4  text-justify mt-lg-0 mt-3">
                                                                            <div class=" d-md-flex flex-column d-none">
                                                                                <h6 class="mx-auto ">تعداد دوربین
                                                                                </h6>
                                                                                <hr class="aaa w-50 mx-auto mt-0">
                                                                            </div>
                                                                            <div
                                                                                class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start  custom-border mt-md-4 mt-lg-0">
                                                                                <label for="tentacles3 "
                                                                                    class="ccustom-margin"> تعداد دوربین
                                                                                    : ثابت</label>
                                                                                <input type="number" id="tentacles3"
                                                                                    class=" text-center h-25 border-custom"
                                                                                    name="tentacles t" min="1" max="10"
                                                                                    value="4" class="text-center">
                                                                            </div>
                                                                            <div
                                                                                class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start ">
                                                                                <label for="tentacles4 "
                                                                                    class="ccustom-margin"> تعداد دوربین
                                                                                    حرکتی</label>
                                                                                <input type="number" id="tentacles4"
                                                                                    class=" text-center h-25 border-custom"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="4" class="text-center">
                                                                            </div>
                                                                            <div
                                                                                class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start ">
                                                                                <label for="tentacles5 "
                                                                                    class="ccustom-margin"> تعداد دوربین
                                                                                    : کرین</label>
                                                                                <input type="number" id="tentacles5"
                                                                                    class=" text-center h-25 border-custom"
                                                                                    name="tentacles" min="1" max="10"
                                                                                    value="4" class="text-center">
                                                                            </div>


                                                                        </div>



                                                                        <h6 class="mx-auto d-md-none mt-3">ویژگی ها
                                                                        </h6>
                                                                        <hr class="aaa w-50 d-md-none mb-4">
                                                                        <div class="d-block">

                                                                            <div class=" d-md-flex flex-column d-none ">
                                                                                <h6 class="mx-auto mt-3">ویژگی ها </h6>
                                                                                <hr class="aaa w-25 mx-auto mt-0">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-10 col-md-6  col-lg-4 mt-2 text-justify mt-3 d-flex ">

                                                                            <div class="form-check m-2 d-child-flex">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckDefault1" />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckDefault1">
                                                                                    صدابرداری</label>
                                                                            </div>

                                                                            <!-- Checked checkbox -->
                                                                            <div class="form-check m-2 d-child-flex">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked2" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked2">
                                                                                    نورپردازی</label>
                                                                            </div>
                                                                            <div class="form-check m-2 d-child-flex">
                                                                                <input
                                                                                    class="form-check-input float-right-checkbox"
                                                                                    type="checkbox" value=""
                                                                                    id="flexCheckChecked3" checked />
                                                                                <label
                                                                                    class="form-check-label float-right-checkbox"
                                                                                    for="flexCheckChecked3">
                                                                                    تدوین</label>
                                                                            </div>


                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <button
                                                                    class="button d-none d-md-block custom-margin-pricing w-50 text-center mx-auto"
                                                                    role="button " id="CartBtnFilming"> افزودن به سبد خرید</button>
                                                            </div>




                                                        </div>
                                                        <button class="button d-block d-md-none my-3" role="button" id="CartBtnFilming">افزودن
                                                            به سبد خرید</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabby-tab">
                                            <input type="radio" id="tab-4" name="tabby-tabs">
                                            <label class="gg" for="tab-4">خدمات دیگر</label>
                                            <div class="tabby-content">
                                                <div class="col-12 d-flex d-flex justify-content-center  mt-5">
                                                    <div class="col-12 col-md-8">
                                                        <div class="row  d-flex justify-content-center pricing-box-Shadow">
                                                            <div class="col-12 col-md-5 col-lg-6    ">
                                                                <select class="form-select my-5 mx-auto w-100 w-lg-50">
                                                                    <option selected> انتخاب خدمات </option>
                                                                    <option value="1"> مشاوره کسب و کار</option>
                                                                    <option value="2">شبکه های اجتماعی</option>
                                                                    <option value="3">تبلیغات</option>
                                                                    <option value="3">پادکست</option>
                                                                </select>
                                                                <button
                                                                    class="button d-none d-md-block custom-margin-pricing"
                                                                    role="button "> افزودن به سبد خرید</button>
                                                            </div>
                                                            <div class="col-12 col-md-7 col-lg-6 ">
                                                                <h4 class="text-center pt-5"> توضیحات خدمت انتخاب شده
                                                                </h4>
                                                                <p class="mx-auto p-2 text-justify">لورم ایپسوم متن
                                                                    ساختگی
                                                                    با تولید سادگی نامفهوم از صنعت چاپ و
                                                                    با استفاده از طراحان گرافیک است.لورم ایپسوم متن
                                                                    ساختگی
                                                                    با تولید سادگی نامفهوم از صنعت چاپ و
                                                                    با استفاده از طراحان گرافیک است.لورم ایپسوم متن
                                                                    ساختگی
                                                                    با تولید سادگی نامفهوم از صنعت چاپ و
                                                                    با استفاده از طراحان گرافیک است.لورم ایپسوم متن
                                                                    ساختگی
                                                                    با تولید سادگی نامفهوم از صنعت چاپ و
                                                                    با استفاده از طراحان گرافیک است.لورم ایپسوم متن
                                                                    ساختگی
                                                                    با تولید سادگی نامفهوم از صنعت چاپ و
                                                                    با استفاده از طراحان گرافیک است.</p>
                                                            </div>
                                                        </div>
                                                        <button class="button d-block d-md-none my-3" role="button">افزودن
                                                            به سبد خرید</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button custom-pricing-margin-btn "
                                value="بعدی" />
                        </fieldset>
                        <fieldset>
                            <h2 id="heading"> آدرس و تاریخ</h2>
                            <hr class="aaa">
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-md-6 col-12 ">
                                        <div class="well">
                                            <div class="row">
                                                <div class="col-sm-6 ">
                                                    <div class="form-group" dir="ltr">
                                                        <label class='float-right mt-4 mb-2 gg' for="state">:استان</label>
                                                        <div class="form-contorol mx-xl-3">
                                                            <select id="Ostan" runat="server" onchange="Func(this.value)"
                                                                class="form-control" name="state">
                                                                <option class="form-group" value=""></option>
                                                                <option class="form-group"
                                                                    value=",آذرشهر ,اسکو ,اهر ,بستان‌آباد ,بناب ,تبریز ,جلفا ,چاراویماق ,سراب ,شبستر ,عجب‌شیر ,کلیبر ,مراغه ,مرند ,ملکان ,میانه ,ورزقان ,هریس ,هشترود">
                                                                    آذربایجان شرقی</option>
                                                                <option class="form-group"
                                                                    value="  ,ارومیه ,اشنویه ,بوکان ,پیرانشهر ,تکاب ,چالدران ,خوی ,سردشت ,سلماس ,شاهین‌دژ ,ماکو ,مهاباد ,میاندوآب ,نقده">
                                                                    آذربایجان غربی</option>
                                                                <option class="form-group"
                                                                    value="  ,اردبیل ,بیله‌سوار ,پارس‌آباد ,خلخال ,کوثر ,گِرمی ,مِشگین‌شهر ,نَمین ,نیر">
                                                                    اردبیل</option>
                                                                <option class="form-group"
                                                                    value="  ,آران و بیدگل ,اردستان ,اصفهان ,برخوار و میمه ,تیران و کرون ,چادگان ,خمینی‌شهر ,خوانسار ,سمیرم ,شهرضا ,سمیرم سفلی ,فریدن ,فریدون‌شهر ,فلاورجان ,کاشان ,گلپایگان ,لنجان ,مبارکه ,نائین ,نجف‌آباد ,نطنز">
                                                                    اصفهان</option>
                                                                <option class="form-group"
                                                                    value="  ,طالقان ,اشتهارد ,چهارباغ ,نظرآباد ,ساوجبلاغ ,فردیس ,کرج">
                                                                    البرز</option>
                                                                <option class="form-group"
                                                                    value="  ,آبدانان ,ایلام ,ایوان ,دره‌شهر ,دهلران ,شیروان و چرداول ,مهران">
                                                                    ایلام</option>
                                                                <option class="form-group"
                                                                    value="  ,بوشهر ,تنگستان ,جم ,دشتستان ,دشتی,دیر ,دیلم ,کنگان ,گناوه">
                                                                    بوشهر</option>
                                                                <option class="form-group"
                                                                    value="  ,اسلام‌شهر ,پاکدشت ,تهران ,دماوند ,رباط‌کریم ,ری ,ساوجبلاغ ,شمیرانات ,شهریار ,فیروزکوه ,کرج ,نظرآباد ,ورامین">
                                                                    تهران</option>
                                                                <option class="form-group"
                                                                    value="  ,اردل ,بروجن ,شهرکرد ,فارسان ,کوهرنگ ,لردگان">
                                                                    چهارمحال و بختیاری</option>
                                                                <option class="form-group"
                                                                    value="  ,بیرجند ,درمیان ,سرایان ,سربیشه ,فردوس ,قائنات,نهبندان">
                                                                    خراسان جنوبی</option>
                                                                <option class="form-group"
                                                                    value="  ,بردسکن ,تایباد ,تربت جام ,تربت حیدریه ,چناران ,خلیل‌آباد ,خواف ,درگز ,رشتخوار ,سبزوار ,سرخس ,فریمان ,قوچان ,کاشمر ,کلات ,گناباد ,مشهد ,مه ولات ,نیشابور">
                                                                    خراسان رضوی</option>
                                                                <option class="form-group"
                                                                    value="  ,اسفراین ,بجنورد ,جاجرم ,شیروان ,فاروج ,مانه و سملقان">
                                                                    خراسان شمالی</option>
                                                                <option class="form-group"
                                                                    value="  ,آبادان ,امیدیه ,اندیمشک ,اهواز ,ایذه ,باغ‌ملک ,بندر ماهشهر ,بهبهان ,خرمشهر ,دزفول ,دشت آزادگان ,رامشیر ,رامهرمز ,شادگان ,شوش ,شوشتر ,گتوند ,لالی ,مسجد سلیمان,هندیجان ">
                                                                    خوزستان</option>
                                                                <option class="form-group"
                                                                    value="  ,ابهر ,ایجرود ,خدابنده ,خرمدره ,زنجان ,طارم ,ماه‌نشان">
                                                                    زنجان</option>
                                                                <option class="form-group"
                                                                    value="  ,دامغان ,سمنان ,شاهرود ,گرمسار ,مهدی‌شهر">
                                                                    سمنان
                                                                </option>
                                                                <option class="form-group"
                                                                    value="  ,ایرانشهر ,چابهار ,خاش ,دلگان ,زابل ,زاهدان ,زهک ,سراوان ,سرباز ,کنارک ,نیک‌شهر">
                                                                    سیستان و بلوچستان</option>
                                                                <option class="form-group"
                                                                    value="  ,آباده ,ارسنجان ,استهبان ,اقلید ,بوانات ,پاسارگاد ,جهرم ,خرم‌بید ,خنج ,داراب ,زرین‌دشت ,سپیدان ,شیراز ,فراشبند ,فسا ,فیروزآباد ,قیر و کارزین ,کازرون ,لارستان ,لامِرد ,مرودشت ,ممسنی ,مهر ,نی‌ریز">
                                                                    فارس</option>
                                                                <option class="form-group"
                                                                    value="  ,آبیک ,البرز ,بوئین‌زهرا ,تاکستان ,قزوین">
                                                                    قزوین
                                                                </option>
                                                                <option class="form-group" value="  ,قم">قم</option>
                                                                <option class="form-group"
                                                                    value="  ,بانه ,بیجار ,دیواندره ,سروآباد ,سقز ,سنندج ,قروه ,کامیاران ,مریوان">
                                                                    کردستان</option>
                                                                <option class="form-group"
                                                                    value="  ,بافت ,بردسیر ,بم ,جیرفت ,راور ,رفسنجان ,رودبار جنوب ,زرند ,سیرجان ,شهر بابک ,عنبرآباد ,قلعه گنج ,کرمان ,کوهبنان ,کهنوج ,منوجان">
                                                                    کرمان</option>
                                                                <option class="form-group"
                                                                    value="  ,اسلام‌آباد غرب ,پاوه ,ثلاث باباجانی ,جوانرود ,دالاهو ,روانسر ,سرپل ذهاب ,سنقر ,صحنه ,قصر شیرین ,کرمانشاه ,کنگاور ,گیلان غرب ,هرسین">
                                                                    کرمانشاه</option>
                                                                <option class="form-group"
                                                                    value="  ,بویراحمد ,بهمئی ,دنا ,کهگیلویه ,گچساران">
                                                                    کهگیلویه و بویراحمد</option>
                                                                <option class="form-group"
                                                                    value="  ,آزادشهر ,آق‌قلا ,بندر گز ,ترکمن ,رامیان ,علی‌آباد ,کردکوی ,کلاله ,گرگان ,گنبد کاووس ,مراوه‌تپه ,مینودشت">
                                                                    گلستان</option>
                                                                <option class="form-group"
                                                                    value="  ,آستارا ,آستانه اشرفیه ,اَملَش ,بندر انزلی ,رشت ,رضوانشهر ,رودبار ,رودسر ,سیاهکل ,شَفت ,صومعه‌سرا ,طوالش ,فومَن ,لاهیجان ,لنگرود ,ماسال">
                                                                    گیلان</option>
                                                                <option class="form-group"
                                                                    value="  ,ازنا ,الیگودرز ,بروجرد ,پل‌دختر ,خرم‌آباد ,دورود ,دلفان ,سلسله ,کوهدشت">
                                                                    لرستان</option>
                                                                <option class="form-group"
                                                                    value="  ,آمل ,بابل ,بابلسر ,بهشهر ,تنکابن ,جویبار ,چالوس ,رامسر ,ساری ,سوادکوه ,قائم‌شهر ,گلوگاه ,محمودآباد ,نکا ,نور ,نوشهر">
                                                                    مازندران</option>
                                                                <option class="form-group"
                                                                    value="  ,آشتیان ,اراک ,تفرش ,خمین ,دلیجان ,زرندیه ,ساوه ,شازند ,کمیجان ,محلات">
                                                                    مرکزی</option>
                                                                <option class="form-group"
                                                                    value="  ,ابوموسی ,بستک ,بندر عباس ,بندر لنگه ,جاسک ,حاجی‌آباد ,شهرستان خمیر ,رودان  ,قشم ,گاوبندی ,میناب">
                                                                    هرمزگان</option>
                                                                <option class="form-group"
                                                                    value="  ,اسدآباد ,بهار ,تویسرکان ,رزن ,کبودرآهنگ ,ملایر ,نهاوند ,همدان">
                                                                    همدان</option>
                                                                <option class="form-group"
                                                                    value="  ,ابرکوه ,اردکان ,بافق ,تفت ,خاتم ,صدوق ,طبس ,مهریز ,مِیبُد ,یزد">
                                                                    یزد</option>
                                                            </select>
                                                        </div>








                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class='float-right mt-4 mb-2 gg' for="city">شهرستان
                                                            :</label>
                                                        <select id="Shahrestan" name='city' class="form-control col-3">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class='float-right mt-4 mb-2 gg' for="line1">خیابان:</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class='float-right mt-4 mb-2 gg' for="line1">بلوار:</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class='float-right mt-4 mb-2 gg' for="line1">کدپستی:</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class='float-right mt-4 mb-2 gg' for="line1">واحد:</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class='float-right mt-4 mb-2 gg' for="line1">پلاک:</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class='float-right mt-4 mb-2 gg'
                                                        for="exampleFormControlTextarea4">آدرس کامل: </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="col-12 text-right">

                                                        <label class=' mt-4 mb-2 gg' for="data-picker">انتخاب تاریخ:</label>
                                                    </div>
                                                    <div class="input-group date-input col">
                                                        <span class="input-group-text" id="dtp1"><i
                                                                class="fas fa-calendar-alt"></i></span>
                                                        <input type="text" class="form-control text-center"
                                                            placeholder="انتخاب تاریخ" id="data-picker"
                                                            data-name="dtp1-text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-12 mt-5 mt-lg-0">
                                        <div class="map-responsive">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12940.907541046576!2d50.982656499780035!3d35.81890868259695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dbfb277ea5b55%3A0xd658d7cac8273c3e!2z2YjZhNuM2LnYtdix2Iwg2YXZhti32YLZhyDbudiMINqp2LHYrNiMINin2LPYqtin2YYg2KfZhNio2LHYstiMINin24zYsdin2YY!5e0!3m2!1sfa!2snl!4v1652547526293!5m2!1sfa!2snl"
                                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>




                                {{-- <div class="input-group date-input col-md-6 col-12">
                                    <label class='float-right mt-4 mb-2 gg' for="data-picker">تاریخ انتخاب :</label>
                                    <span class="input-group-text" id="dtp1"><i class="fas fa-calendar-alt"></i></span>
                                    <input type="text" class="form-control text-center" placeholder="انتخاب تاریخ" id="data-picker"
                                        data-name="dtp1-text">
                                </div> --}}


                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="cardddd col-lg-6 ffffff  mx-auto">
                                <div class="card-body">
                                    <h5 class="card-title">سفارش شما</h5>
                                    <p class="card-text"></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item"></li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>



                            <div class="cardddd col-lg-6 ffffff  mx-auto">
                                <div class="card-body">
                                    <h5 class="card-title">سفارش شما</h5>
                                    <p class="card-text"></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item"></li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>

                            <input type="button" name="next" class="next action-button" value="Submit" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- </main> --}}
@endsection






@section('js')
    <script>
        $(document).ready(function() {
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;
            setProgressBar(current);
            $(".next").click(function() {
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function() {
                return false;
            })



        });



        // ****************(state and city)***********************
        function Func(Shahrestanha) {
            var _Shahrestan = document.getElementById("Shahrestan");
            _Shahrestan.options.length = 0;
            if (Shahrestanha != "") {
                var arr = Shahrestanha.split(",");
                for (i = 0; i < arr.length; i++) {
                    if (arr[i] != "") {
                        _Shahrestan.options[_Shahrestan.options.length] = new Option(arr[i], arr[i]);
                    }
                }
            }
        }

        // ****************(Select beetween option  part 1   )***********************
        let ShoppingCart = 0
        // ****** site section  variable ********
        let PhotographySelection = document.getElementById('PhotographySelection')
        let CartBtnPhotography = document.getElementById('CartBtnPhotography')
        let gold = document.getElementById('gold')
        let bronze = document.getElementById('bronze')
        let silver = document.getElementById('silver')
        CartBtnPhotography.addEventListener('click', CartBtnPhotographyFunc)
        PhotographySelection.addEventListener('click', PhotographyFunc)

        function PhotographyFunc() {
            if (PhotographySelection.value == 1) {
                bronze.classList.add('d-block');
                bronze.classList.remove('d-none');
                silver.classList.add('d-none');
                gold.classList.add('d-none');
            } else if (PhotographySelection.value == 2) {
                silver.classList.add('d-block');
                silver.classList.remove('d-none');
                bronze.classList.add('d-none');
                gold.classList.add('d-none');
            } else if (PhotographySelection.value == 3) {
                gold.classList.add('d-block');
                gold.classList.remove('d-none');
                bronze.classList.add('d-none');
                silver.classList.add('d-none');
            }

        }

        function CartBtnPhotographyFunc(event) {
            event.preventDefault();
            if (PhotographySelection.value == 1) {
                ShoppingCart = ShoppingCart + 10
                console.log(ShoppingCart)
                alert(`    پکیج برنزی با قیمت ۱۰ به سبد خرید شما اضافه شد و مجموع سبد خرید شما ${ShoppingCart} میباشد `)

            } else if (PhotographySelection.value == 2) {
                ShoppingCart = ShoppingCart + 100
                console.log(ShoppingCart)
                alert(`    پکیج برنزی با قیمت ۱۰۰ به سبد خرید شما اضافه شد و مجموع سبد خرید شما ${ShoppingCart} میباشد `)

            } else if (PhotographySelection.value == 3) {
                ShoppingCart = ShoppingCart + 1000
                console.log(ShoppingCart)
                alert(`    پکیج برنزی با قیمت ۱۰۰۰ به سبد خرید شما اضافه شد و مجموع سبد خرید شما ${ShoppingCart} میباشد `)

            }

        }


















        let filmingSelection = document.getElementById('filmingSelection')
        console.log('filmingSelection')
        let CartBtnFilming = document.getElementById('CartBtnFilming')
        let filming1 = document.getElementById('filming1')
        let filming2 = document.getElementById('filming2')
        let filming3 = document.getElementById('filming3')
        let filming4 = document.getElementById('filming4')
        CartBtnFilming.addEventListener('click', CartBtnFilming)
        filmingSelection.addEventListener('click', filmingFunc)
        function filmingFunc() {
            if (filmingSelection.value == 1) {
                console.log('filming111111')
                // filming1.classList.add('d-block');
                // filming1.classList.remove('d-none');
                // filming2.classList.add('d-none');
                // filming3.classList.add('d-none');
                // filming4.classList.add('d-none');

            } else if (filmingSelection.value == 2) {
                console.log('filming2222')

                // filming2.classList.add('d-block');
                // filming2.classList.remove('d-none');
                // filming1.classList.add('d-none');
                // filming3.classList.add('d-none');
                // filming4.classList.add('d-none');

            } else if (filmingSelection.value == 3) {
                console.log('filming3333333')

                // filming3.classList.add('d-block');
                // filming3.classList.remove('d-none');
                // filming1.classList.add('d-none');
                // filming2.classList.add('d-none');
                // filming4.classList.add('d-none');

            }else if (filmingSelection.value == 4) {
                console.log('filming4444444')

                // filming4.classList.add('d-block');
                // filming4.classList.remove('d-none');
                // filming1.classList.add('d-none');
                // filming2.classList.add('d-none');
                // filming3.classList.add('d-none');
            }

        }
        function CartBtnFilming(event) {
            event.preventDefault();
            if (filmingSelection.value == 1) {
                ShoppingCart = ShoppingCart + 10
                console.log(ShoppingCart)
                alert(`    پکیج filming1 با قیمت ۱۰ به سبد خرید شما اضافه شد و مجموع سبد خرید شما ${ShoppingCart} میباشد `)

            } else if (filmingSelection.value == 2) {
                ShoppingCart = ShoppingCart + 100
                console.log(ShoppingCart)
                alert(`    پکیج filming2 با قیمت ۱۰۰ به سبد خرید شما اضافه شد و مجموع سبد خرید شما ${ShoppingCart} میباشد `)

            } else if (filmingSelection.value == 3) {
                ShoppingCart = ShoppingCart + 1000
                console.log(ShoppingCart)
                alert(`    پکیج filming3 با قیمت ۱۰۰۰ به سبد خرید شما اضافه شد و مجموع سبد خرید شما ${ShoppingCart} میباشد `)

            }else if (filmingSelection.value == 4) {
                ShoppingCart = ShoppingCart + 10000
                console.log(ShoppingCart)
                alert(`    پکیج filming4 با قیمت ۱۰۰۰ به سبد خرید شما اضافه شد و مجموع سبد خرید شما ${ShoppingCart} میباشد `)

            }

        }


























        // const dtp1Instance = new mds.MdsPersianDateTimePicker(document.getElementById('dtp1'), {
        //     targetTextSelector: '[data-name="dtp1-text"]',
        //     targetDateSelector: '[data-name="dtp1-date"]',
        //     persianNumber: true,
        //     enableTimePicker: true,
        //     isGregorian: false

        // });
    </script>
@endsection
