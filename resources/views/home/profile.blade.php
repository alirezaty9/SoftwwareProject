@extends('home.layouts.master')

@section('content')
    <main class="user-profile-panel">
        <div class="container-fluid px-0">
            <nav class="nav__cont">
                <ul class="nav__">
                    <li class="nav___items ">
                        <i class='bx bxs-user-pin'></i>
                        <a class="text-nowrap" href="#user-profile">پروفایل</a>
                    </li>

                    <li class="nav___items ">
                        <i class='bx bxs-shopping-bag-alt'></i>
                        <a class="text-nowrap" href="#order">سفارش ها</a>
                    </li>

                    <li class="nav___items ">
                        <i class='bx bxs-briefcase-alt'></i>
                        <a class="text-nowrap" href="#order-status">روند پروژه ها</a>
                    </li>

                    <li class="nav___items ">
                        <i class='bx bxs-location-plus'></i>
                        <a class="text-nowrap" href="#user-addresses">آدرس ها</a>
                    </li>

                    <li class="nav___items ">
                        <i class='bx bxs-comment-dots'></i>
                        <a class="text-nowrap" href="#messages">پیغام ها</a>
                    </li>

                    <li class="nav___items ">
                        <i class='bx bx-log-out'></i>
                        <a class="                        <a class="text-nowrap" href="{{ route('logout') }}">خروج</a>
       </ul>
            </nav>

            <div class="container-fluid costume-container">
                {{-- All The Dynamic Content --}}
                <div id="dynamic-content" class="row">

                    <div id="user-profile" class="row tab_content">

                        {{-- User Type CheckBox --}}
                        <div class="c-type-trigger d-flex justify-content-start align-items-center">
                            <input class="checkbox" type="checkbox" id="i">

                            <label class="checkbox-label" for="i">
                            </label>
                            <div class="checkbox__text">
                                <span>کاربر</span>
                                <div class="checkbox__text--options">
                                    <span class="on text-secondary">حقوقی</span>
                                    <span class="off text-secondary">حقیقی</span>
                                </div>
                            </div>
                        </div>
                        <div class="footer-line"><span></span></div>
                        {{-- Real User Information --}}
                        <div id="realUser" class="row m-0 p-0">
                            <div class="col-md-6 col-sm-12">
                                <ul>
                                    <li><span class="text-secondary">نام</span>
                                        <h6>{{ $user->name }}</h6>
                                        <i id="modalBtn" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. نام شما
                                                        باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                    <form action="{{ route('home.editprofile', ['id' => $user->id]) }}" ,
                                                        method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group">
                                                            <label for="firstName">نام</label>
                                                            <input type="text" name="name" class="form-control"
                                                                id="firstName" placeholder="نام شما">
                                                        </div>

                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>

                                    <li><span class="text-secondary">نام خانوادگی</span>
                                        <h6>ناصحی ارجمند</h6>
                                        <i id="modalBtn1" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal1" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. نام
                                                        خانوادگی شما باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.
                                                    </p>
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="lastName">نام خانوادگی</label>
                                                            <input type="text" class="form-control" id="lastName"
                                                                placeholder="نام خانوادگی شما">
                                                        </div>
                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>

                                    <li><span class="text-secondary">شماره موبایل</span>
                                        <h6>{{ $user->cellphone }}</h6>
                                        <i id="modalBtn2" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal2" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">برای ثبت این شماره باید آن را تایید کنید.</p>
                                                    <form id="loginForm" action="">
                                                        <div class="form-group">
                                                            <label for="mobileNumber">شماره موبایل</label>
                                                            <input type="text" class="form-control" id="phoneInput"
                                                                placeholder="۰۹۱۲۱۱۱۲۲۳۳">
                                                        </div>

                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>
                                                    <form id="OTPinput" action="">
                                                        <div class="form-group">
                                                            <label for="mobileNumber">شماره موبایل</label>
                                                            <input type="text" class="form-control" id="codeInput"
                                                                placeholder="کد">
                                                        </div>

                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <ul>
                                    <li><span class="text-secondary">کد ملی</span>
                                        <h6>۰۰۱۷۵۴۰۲۹۱</h6>
                                        <i id="modalBtn3" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal3" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. کد ملی
                                                        شما
                                                        باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="nationalNumber">کد ملی</label>
                                                            <input type="text" class="form-control" id="nationalNumber"
                                                                placeholder="۰۰۱۲۳۴۵۶۷۸">
                                                        </div>
                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>

                                    <li><span class="text-secondary">ایمیل</span>
                                        <h6>{{ $user->email }}</h6>
                                        <i id="modalBtn4" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal4" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <form action="{{ route('home.editprofile', ['id' => $user->id]) }}" ,
                                                        method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group">
                                                            <label for="userEmail">ایمیل</label>
                                                            <input type="email" name="email" class="form-control"
                                                                id="userEmail" placeholder="example@info.com">
                                                        </div>
                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>

                                    <li><span class="text-secondary">آدرس</span>
                                        <h6>کرج،میدان سپاه به سمت سه راه
                                            گوهردشت،خ گلستان</h6>
                                        <i id="modalBtn5" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal5" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. آدرس
                                                        شما
                                                        باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                    <form id="addressForm">
                                                        <div id="addressForm" class="form-group">
                                                            <label for="userAddress">آدرس</label>
                                                            <input type="text" id="addresses" name="addresses"
                                                                class="form-control" id="address"
                                                                placeholder="تهران، خیابان ۹ شرقی...">
                                                        </div>

                                                        <div name="map" id="map" style="height: 200px"></div>
                                                        <button class="secondary-btn">ذخیره</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                        </div>

                        {{-- Company User Information --}}
                        <div id="companyUser" class="row m-0 p-0">
                            <div class="col-md-6 col-sm-12">
                                <ul>
                                    <li><span class="text-secondary">نام شرکت</span>
                                        <h6>به نگاران تجارت آزما</h6>
                                        <i id="modalBtn6" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal6" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">لطفا اطلاعات شرکت خود را وارد کنید. نام شرکت
                                                        باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                    <form action="">

                                                        <div class="form-group">
                                                            <label for="companyName">نام شرکت</label>
                                                            <input type="text" name="company-name" class="form-control"
                                                                id="companyName" placeholder="نام شرکت">
                                                        </div>

                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>

                                    <li><span class="text-secondary">شماره ثبت</span>
                                        <h6>۱۲۳۴۵۶۷۸۹</h6>
                                        <i id="modalBtn7" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal7" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">لطفا اطلاعات شرکت خود را وارد کنید. شماره ثبت
                                                        شرکت شما باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="submitNumber">شماره ثبت</label>
                                                            <input type="text" class="form-control" id="submitNumber"
                                                                placeholder="شماره ثبت شرکت">
                                                        </div>
                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>

                                    <li><span class="text-secondary">شماره ملی</span>
                                        <h6>۱۲۳۴۵۶۷۸۹</h6>
                                        <i id="modalBtn8" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal8" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">لطفا اطلاعات شرکت خود را وارد کنید. شماره ملی
                                                        شرکت شما باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="companyNationalNumber">شماره ملی</label>
                                                            <input type="text" class="form-control"
                                                                id="companyNationalNumber" placeholder="شماره ملی شرکت">
                                                        </div>

                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>

                                    <li><span class="text-secondary">کد اقتصادی</span>
                                        <h6>۱۲۳۴۵۶۷۸۹</h6>
                                        <i id="modalBtn9" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal9" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">لطفا اطلاعات شرکت خود را وارد کنید. کد
                                                        اقتصادی
                                                        شرکت شما باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="marketCode">کد اقتصادی</label>
                                                            <input type="text" class="form-control" id="marketCode"
                                                                placeholder="کد اقتصادی شرکت">
                                                        </div>

                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <ul>
                                    <li><span class="text-secondary">استان و شهرستان</span>
                                        <h6>البرز، کرج</h6>
                                        <i id="modalBtn10" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal10" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">لطفا اطلاعات شرکت خود را وارد کنید. محل کار
                                                        شرکت
                                                        باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                    <form action="">

                                                        <div class="form-group">
                                                            <label for="companyState">استان</label>
                                                            <input type="text" name="company-state" class="form-control"
                                                                id="companyState" placeholder="استان شرکت">
                                                            <label for="companyCity">شهرستان</label>
                                                            <input type="text" name="company-city" class="form-control"
                                                                id="companyCity" placeholder="شهرستان شرکت">
                                                        </div>

                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>

                                    <li><span class="text-secondary">آدرس</span>
                                        <h6>کرج،میدان سپاه به سمت سه راه
                                            گوهردشت،خ گلستان</h6>
                                        <i id="modalBtn11" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal11" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">لطفا اطلاعات شرکت خود را وارد کنید. آدرس
                                                        شرکت شما باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="companyAddress">آدرس</label>
                                                            <input type="text" class="form-control" id="companyAddress"
                                                                placeholder="آدرس شرکت">
                                                        </div>

                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>

                                    <li><span class="text-secondary">کد پستی</span>
                                        <h6>۱۲۳۴۵۶۷۸۹</h6>
                                        <i id="modalBtn12" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal12" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">لطفا اطلاعات شرکت خود را وارد کنید. کدپستی
                                                        شرکت شما باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="companyPostalCode">کد پستی</label>
                                                            <input type="text" class="form-control"
                                                                id="companyPostalCode" placeholder="کد پستی شرکت">
                                                        </div>

                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>

                                    <li><span class="text-secondary">شماره تلفن</span>
                                        <h6>۰۲۶۳۱۱۱۲۲۳۳</h6>
                                        <i id="modalBtn13" class="fas fa-edit"></i>
                                        <!-- The Modal -->
                                        <div id="myModal13" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-body">
                                                    <p class="text-secondary">لطفا اطلاعات شرکت خود را وارد کنید. شماره
                                                        تلفن
                                                        شرکت شما باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="marketCode">شماره تلفن</label>
                                                            <input type="text" class="form-control" id="marketCode"
                                                                placeholder="شماره تلفن شرکت">
                                                        </div>

                                                        <button type="submit" class="secondary-btn">ذخیره</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>


                    {{-- User Orders Content --}}
                    <div id="order" class="row tab_content">
                        <h4>سفارش های شما</h4>
                        <div class="footer-line"><span></span></div>
                        <div class="col-md-12">
                            <ul>
                                <li><span class="text-secondary">مکان</span>
                                    <h6>کرج، جهانشهر</h6>
                                </li>
                                <li><span class="text-secondary">زمان</span>
                                    <h6> پنج شنبه ۲۰ شهریور ساعت ۱۲:۰۰ </h6>
                                </li>
                                <li><span class="text-secondary">خدمات</span>
                                    <h6>ویدیو - دوربین ثابت ، ۲ ساعت</h6>
                                </li>
                                <li><span class="text-secondary">مبلغ</span>
                                    <h6>۳٫۰۰۰٫۰۰۰ تومان</h6>
                                </li>
                            </ul>
                            <span class="order-details">جزئیات</span>

                            <div class="order-collapse">
                                <ul class="responsive-table">
                                    <li class="table-header">
                                        <div class="col col-1">هزینه خدمات</div>
                                        <div class="col col-2">تخفیف</div>
                                        <div class="col col-3">مالیات و عوارض</div>
                                        <div class="col col-4">مبلغ کل</div>
                                        <div class="col col-5">وضعیت سفارش</div>
                                    </li>
                                    <li class="table-row">
                                        <div class="col col-1" data-label="هزینه پکیج">۲٬۵۰۰٬۰۰۰ تومان</div>
                                        <div class="col col-2" data-label="ایاب و ذهاب">۲۰۰٬۰۰۰ تومان</div>
                                        <div class="col col-3" data-label="خدمت اضافه">۳۰۰٬۰۰۰ تومان</div>
                                        <div class="col col-4" data-label="مبلغ کل">۳٬۰۰۰٬۰۰۰ تومان</div>
                                        <div class="col col-5" data-label="وضعیت سفارش">در حال انجام</div>
                                    </li>

                                </ul>
                                <div class="w-50 d-flex align-items-center me-auto">
                                    <button id="recipt-print" class="secondary-btn">چاپ فاکتور</button>
                                    <button id="exclusive-recipt-print" class="secondary-btn">درخواست فاکتور رسمی</button>
                                </div>
                            </div>
                            <hr>
                        </div>




                    </div>

                    {{-- User Orders status --}}
                    <div id="order-status" class="row tab_content">
                        <h4>وضعیت پروژه شما</h4>
                        <div class="footer-line"><span></span></div>
                        <div class="col-md-12">


                            <ul class="responsive-table">
                                <li class="table-header">
                                    <div class="col col-1">عنوان</div>
                                    <div class="col col-2">تاریخ</div>
                                    <div class="col col-3">وضعیت فعلی</div>
                                    <div class="col col-4">وضعیت بعدی</div>
                                </li>
                                <li class="table-row">
                                    <div class="col col-1" data-label="عنوان">پروژه عکاسی</div>
                                    <div class="col col-2" data-label="تاریخ">۰۱\۰۱\۱۴۰۰</div>
                                    <div class="col col-3" data-label="وضعیت فعلی">اعظام تیم به محل</div>
                                    <div class="col col-4" data-label="وضعیت بعدی">شروع عکاسی</div>
                                </li>

                            </ul>

                            <hr>
                        </div>




                    </div>

                    {{-- User Addresses --}}
                    <div class="row tab_content" id="user-addresses">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>آدرس های شما</h4>
                            <button id="modalBtn14" class="secondary-btn">افزودن آدرس</button>

                            <div id="myModal14" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div class="modal-body">
                                        <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. آدرس
                                            شما
                                            باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                        <form id="addressForm1">
                                            <div id="addressForm" class="form-group">
                                                <label for="userAddress">آدرس</label>
                                                <input type="text" id="addresses1" name="addresses" class="form-control"
                                                    id="address" placeholder="تهران، خیابان ۹ شرقی...">
                                            </div>

                                            <div name="map" id="Addmap" style="height: 200px"></div>
                                            <button class="secondary-btn">ذخیره</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer-line"><span></span></div>
                        <div class="col-md-12">
                            <div class="addresses-box">
                                <ul>
                                    @foreach ($user->addresses as $address)
                                        <li>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-column">
                                                    <span class="text-secondary">آدرس کامل</span>
                                                </div>
                                                <button class="secondary-btn remove-address-btn h-50">حذف آدرس</button>
                                            </div>
                                            <h6> {{ $address->address }} </h6>

                                            <div id="map{{ $address->id }}" style="height: 160px"></div>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>


                        </div>

                    </div>

                    {{-- User Messages --}}
                    <div class="row tab_content" id="messages">
                        <h4>پیغام های شما</h4>


                        <div class="footer-line"><span></span></div>
                        <div class="col-md-12">

                            @foreach ($user->messages as $message)
                                <div class="user-message-box">
                                    <ul>
                                        <li>
                                            <span class="text-secondary">تاریخ</span>
                                            <h6>{{ verta($message->created_at) }}</h6>
                                        </li>
                                        <li>
                                            <span class="text-secondary">عنوان</span>
                                            <h6>{{ $message->title }}</h6>
                                        </li>

                                        <li>
                                            <span class="text-secondary">لینک</span>
                                            <h6> <a href="{{ url('https://') . $message->link }}">
                                                    {{ $message->link }}
                                                </a>
                                            </h6>
                                        </li>
                                        <li class="message-text">
                                            <span class="text-secondary">متن</span>
                                            <h6>{{ $message->message }}</h6>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach

                        </div>

                    </div>



                </div>

            </div>

        </div>



    </main>
@endsection

@section('js')
    <script>
        var lat = 35.699739;
        var lng = 51.338097;

        var map = new L.Map('map', {
            key: 'web.5j4qJGGkEPdoi3S18YqklpipMjVUa7nDm8cuiiL9',
            maptype: 'dreamy',
            center: [lat, lng],
            zoom: 14,
            traffic: true,
            onTrafficLayerSwitched: function(state) {
                console.log(state);
            }
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: false
        }).addTo(map);



        var marker = L.marker([32.4279, 53.6880]).addTo(map)
            .openPopup();

        var map1 = new L.Map('Addmap', {
            key: 'web.5j4qJGGkEPdoi3S18YqklpipMjVUa7nDm8cuiiL9',
            maptype: 'dreamy',
            center: [lat, lng],
            zoom: 14,
            traffic: true,
            onTrafficLayerSwitched: function(state) {
                console.log(state);
            }
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: false
        }).addTo(map1);

        var marker = L.marker([32.4279, 53.6880]).addTo(map1)
            .openPopup();



        var marker = L.marker([32.4279, 53.6880]).addTo(map1)
            .openPopup();

        map.on('click', function(e) {
            map.removeLayer(marker);
            marker = new L.marker(e.latlng).addTo(map);
            lat = marker._latlng.lat;
            lng = marker._latlng.lng;

            console.log(lat, lng);
        });

        map1.on('click', function(e) {
            map1.removeLayer(marker);
            marker = new L.marker(e.latlng).addTo(map1);
            lat = marker._latlng.lat;
            lng = marker._latlng.lng;

            console.log(lat, lng);
        });

        var getId = @json($user);
        console.log(getId);

        getId.addresses.forEach(element => {
            var map = new L.Map(`map${element.id}`, {
                key: 'web.5j4qJGGkEPdoi3S18YqklpipMjVUa7nDm8cuiiL9',
                maptype: 'dreamy',
                center: [element.latitude, element.longitude],
                zoom: 14,
                traffic: true,
                onTrafficLayerSwitched: function(state) {
                    console.log(state);
                }
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: false
            }).addTo(map);

            var marker = L.marker([element.latitude, element.longitude]).addTo(map)
                .openPopup();

        });

        // Hide And Show All Contents With Right Side Navbar ---------------------------
        $(document).ready(function() {

            $('#addressForm').submit(function(event) {

                console.log($('#addresses').val());
                event.preventDefault();

                $.post("{{ route('addresses.store') }}", {

                    '_token': "{{ csrf_token() }}",
                    'address': $('#addresses').val(),
                    'user_id': "{{ $user->id }}",
                    'lat': lat,
                    'lng': lng

                }, function(response, status) {
                    console.log(response, status);

                }).fail(function(response) {

                    console.log(response);
                })

            });

            $('#addressForm1').submit(function(event) {

                console.log($('#addresses').val());
                event.preventDefault();

                $.post("{{ route('addresses.store') }}", {

                    '_token': "{{ csrf_token() }}",
                    'address': $('#addresses1').val(),
                    'user_id': "{{ $user->id }}",
                    'lat': lat,
                    'lng': lng

                }, function(response, status) {
                    console.log(response, status);

                }).fail(function(response) {

                    console.log(response);
                })

            });

            //When page loads...
            $(".tab_content").hide(); //Hide all content
            $("ul.nav__ li:first").addClass("active").show(); //Activate first tab
            $(".tab_content:first").show(); //Show first tab content

            //On Click Event
            $("ul.nav__ li").click(function() {

                $("ul.nav__ li").removeClass("active"); //Remove any "active" class
                $(this).addClass("active"); //Add "active" class to selected tab
                $(".tab_content").hide(); //Hide all tab content

                var activeTab = $(this).find("a").attr(
                    "href"); //Find the href attribute value to identify the active tab + content
                $(activeTab).fadeIn(); //Fade in the active ID content
                return false;
            });

        });

        // Hide And Show User Type Form With Checkbox -------------------------
        $(document).ready(function() {
            $("#companyUser").hide();
            $('#i').change(function() {

                if ($(this).is(':checked')) {
                    $('#companyUser').fadeIn("slow").toggleClass("hidden");
                    $('#realUser').fadeOut("slow").toggleClass("hidden");
                } else {
                    $('#realUser').fadeIn("slow").toggleClass("hidden");
                    $('#companyUser').fadeOut("slow").toggleClass("hidden");
                }
            });

        });

        // Expand The Content For User Order ---------------------
        var coll = document.getElementsByClassName("order-details");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("order-collapse-active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }

        // Modals For User Information Inputs --------------------------
        var datamap = new Map([
            [document.getElementById("modalBtn"), document.getElementById("myModal")],
            [document.getElementById("modalBtn1"), document.getElementById("myModal1")],
            [document.getElementById("modalBtn2"), document.getElementById("myModal2")],
            [document.getElementById("modalBtn3"), document.getElementById("myModal3")],
            [document.getElementById("modalBtn4"), document.getElementById("myModal4")],
            [document.getElementById("modalBtn5"), document.getElementById("myModal5")],
            [document.getElementById("modalBtn6"), document.getElementById("myModal6")],
            [document.getElementById("modalBtn7"), document.getElementById("myModal7")],
            [document.getElementById("modalBtn8"), document.getElementById("myModal8")],
            [document.getElementById("modalBtn9"), document.getElementById("myModal9")],
            [document.getElementById("modalBtn10"), document.getElementById("myModal10")],
            [document.getElementById("modalBtn11"), document.getElementById("myModal11")],
            [document.getElementById("modalBtn12"), document.getElementById("myModal12")],
            [document.getElementById("modalBtn13"), document.getElementById("myModal13")],
            [document.getElementById("modalBtn14"), document.getElementById("myModal14")],
        ]);

        datamap.forEach((value, key) => {
            doModal(key, value);
        });

        function doModal(anchor, popupbox) {

            // Get the <span> element that closes the modal
            var span = popupbox.getElementsByClassName("close")[0];

            anchor.addEventListener("click", function(event) {
                popupbox.style.display = "block";
            });

            span.addEventListener("click", function(event) {
                popupbox.style.display = "none";
            });

            window.addEventListener("click", function(event) {
                if (event.target == popupbox) {
                    popupbox.style.display = "none";
                }
            });
        }

        let logintoken;

        $('#OTPinput').hide();

        $('#loginForm').submit(function(event) {

            console.log($('#phoneInput').val());
            event.preventDefault();

            $.post("{{ route('home.editPhoneNumber') }}", {

                '_token': "{{ csrf_token() }}",
                'login_token': "{{ $user->login_token }}"

            }, function(response, status) {
                console.log(response, status);
                logintoken = response.login_token;
                $('#loginForm').fadeOut();
                $('#OTPinput').fadeIn();

            }).fail(function(response) {

                console.log(response.responseJSON);
                $('#errorPhone').fadeIn();
                $('#errorText').html(response.responseJSON);

            })

        });

        $('#OTPinput').submit(function(event) {

            console.log($('#codeInput').val());
            event.preventDefault();

            $.post("{{ url('/checkeditNumber') }}", {

                '_token': "{{ csrf_token() }}",
                'otp': $('#codeInput').val(),
                'login_token': logintoken,
                'cellphone': $('#phoneInput').val()

            }, function(response, status) {
                console.log(response, status);
                logintoken = response.login_token;

                $(location).attr('href', "{{ route('home.profile') }}");
                // $('#loginForm').fadeOut();
                // $('#OTPinput').fadeIn();

            }).fail(function(response) {

                console.log(response.responseJSON.errors);
                $('#errorCode').fadeIn();
                $('#errorOtpText').html(response.responseJSON.errors.otp[0]);

            })

        });
    </script>
@endsection
