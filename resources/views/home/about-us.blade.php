@extends('home.layouts.master')

@section('content')
    <!-- Banner Section ---------------------------------------------------------------->
    <main class="main-section">
        <div class="container-fluid px-0">
            <div class="page-content container mt-5">
                <div class="row">
                    <div class="col col-md-7">
                        <h2 class="aboutUs-h2-color">
                            چرا هستیم؟
                        </h2>
                        <div class="footer-line"><span></span></div>
                        <p class="mb-4">به‌نگاران اولین سامانه یکپارچه تولید محتوای دیجیتال در کشوره که تقریبا تمام
                            خدمات تولید محتوا و تبلیغات رو پوشش میده.</p>
                        <p class="mb-4">اینکه کاربر وارد سایت شود و بتونه تمام خدمات مد نظرش رو به صورت آنلاین
                            سفارش بده و به جای ارتباط گرفتن و صرف زمان زیاد برای هماهنگی با چندین نفر از طریق همین سایت
                            تمامی خدمات رو پیگیری کنه تا به سرانجام برسه اصلی‌ترین دلیل به وجود اومدن ماست.</p>
                        <p>به‌نگاران با قدرت کنار شماست تا به تمامی نیاز شما برای تولید محتوا و تبلیغات پاسخ بده.</p>
                    </div>
                    <div class="col-md-5 col-sm-12 digital-marketing-pic">
                        <img class="img-fluid" src="{{ asset('images/aboutus-cover.png') }}">
                    </div>
                </div>


                <div class="row mt-5 d-flex justify-content-center text-center">
                    <div class="col col-md-8">
                        <h3>ویژگی های ما</h3>
                        <hr class="w-25 mb-5 me-auto aboutUs-custom-hr2">
                        <p class="mb-4 text-center">به‌نگاران از ابتدا بر دو پایه اساسی پیریزی شده و طبق همین اصول جلو میره
                        </p>
                        <p class="mb-4 text-center fw-bold">۱- کیفیت کار بالا | ۲- تحویل سریع خدمات</p>
                        <p class="text-center">قطعا همه ما میدونیم این دو مورد از اصلی ترین چالش های حوزه محتوا و تبلیغات
                            هستن اما شما میتونید
                            با اطمینان خاطر و بدون داشتن نگرانی پروژه های خودتون رو توسط تیم تخصصی ما پیش ببرید.</p>
                    </div>
                </div>

                <div class="box d-flex row custom-boxshodow custom-border " >
                    <div class="row col-12 col-md-7 mx-auto">
                       
                        <div class="card col-12 col-md-6 my-4 " id="about-us-card">
                            <div class="imgBx">
                                <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                                <div class="d-flex flex-column align-items-end">
                                    <a href="https://instagram.com/daniaaaaaall?igshid=YmMyMTA2M2Y="  target="_blank"  class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=989195275731" target="_blank" class="mx-2"><i class="fab fa-whatsapp-square"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="details d-flex flex-column justify-content-between ">
                                    <h5>دانیال لاله</h5>
                                    <p class="text-secondary">مدیر عامل و عضو هیئت مدیره</p>
                                </div>
                            </div>
                        </div>
                        {{-- ----------------------------------------------------------------------------- --}}
                        <div class="card col-12 col-md-6 my-4">
                            <div class="imgBx">
                                <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                                <div class="d-flex flex-column align-items-end">
                                    <a href="https://instagram.com/mohammadpalizgir_?igshid=YmMyMTA2M2Y="  target="_blank" class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=989128754089" target="_blank" class="mx-2"><i class="fab fa-whatsapp-square"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="details d-flex flex-column justify-content-between ">
                                    <h5> محمد پالیزگیر</h5>
                                    <p class="text-secondary"> بخش فروش و بازاریابی</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="row col-12 col-md-10 mx-auto">
                   

                        <div class="card col-12 col-md-6 my-4">
                            <div class="imgBx">
                                <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                                <div class="d-flex flex-column align-items-end">
                                    <a href="https://instagram.com/m.ghasemzadeh20?igshid=YmMyMTA2M2Y="  target="_blank" class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=989122398121" class="mx-2" target="_blank" ><i class="fab fa-whatsapp-square"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="details d-flex flex-column justify-content-between ">
                                    <h5> محمد قاسم زاده</h5>
                                    <p class="text-secondary">بخش برندینگ و مارکتینگ </p>
                                </div>
                            </div>
                        </div>
                        {{-- ----------------------------------------------------------------------------- --}}
                        <div class="card col-12 col-md-6 my-4">
                            <div class="imgBx">
                                <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                                <div class="d-flex flex-column align-items-end">
                                    <a href="https://instagram.com/amiiir_m7?igshid=YmMyMTA2M2Y="  target="_blank" class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                    <a href="  https://api.whatsapp.com/send?phone=989109242942" class="mx-2" target="_blank" ><i class="fab fa-whatsapp-square"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="details d-flex flex-column justify-content-between ">
                                    <h5> امیرمهدی لاله </h5>
                                    <p class="text-secondary">  بخش پادکست</p>
                                </div>
                            </div>
                        </div>
                        {{-- ----------------------------------------------------------------------------- --}}
                        <div class="card col-12 col-md-6 my-4">
                            <div class="imgBx">
                                <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                                <div class="d-flex flex-column align-items-end">
                                    <a href="https://instagram.com/erfan_barzegar?igshid=YmMyMTA2M2Y=" class="mx-2" target="_blank" ><i class="fab fa-instagram-square"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=989357393454" class="mx-2" target="_blank" ><i class="fab fa-whatsapp-square"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="details d-flex flex-column justify-content-between ">
                                    <h5> عرفان برزگر </h5>
                                    <p class="text-secondary">   بخش مالی</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12 col-md-10 mx-auto">
                   

                        <div class="card col-12 col-md-6 my-4">
                            <div class="imgBx">
                                <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                                <div class="d-flex flex-column align-items-end">
                                    <a href="https://instagram.com/alireza.ty99?igshid=YmMyMTA2M2Y=" class="mx-2" target="_blank" ><i class="fab fa-instagram-square"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=989384241199" class="mx-2" target="_blank" ><i class="fab fa-whatsapp-square"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="details d-flex flex-column justify-content-between ">
                                    <h5> علیرضا آبادی</h5>
                                    <p class="text-secondary">بخش سایت (UI)</p>
                                </div>
                            </div>
                        </div>
                        {{-- ----------------------------------------------------------------------------- --}}
                        <div class="card col-12 col-md-6 my-4">
                            <div class="imgBx">
                                <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                                <div class="d-flex flex-column align-items-end">
                                    <a href="https://instagram.com/sohrab_nasehi?igshid=YmMyMTA2M2Y="  target="_blank" class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                    <a href=" https://api.whatsapp.com/send?phone=989378219393     " class="mx-2" target="_blank" ><i class="fab fa-whatsapp-square"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="details d-flex flex-column justify-content-between ">
                                    <h5>سهراب ناصحی</h5>
                                    <p class="text-secondary">بخش سایت (UI)</p>
                                </div>
                            </div>
                        </div>
                        {{-- ----------------------------------------------------------------------------- --}}
                        <div class="card col-12 col-md-6 my-4">
                            <div class="imgBx">
                                <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                                <div class="d-flex flex-column align-items-end">
                                    <a href="" class="mx-2" target="_blank" ><i class="fab fa-instagram-square"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=989309259061" class="mx-2" target="_blank" ><i class="fab fa-whatsapp-square"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="details d-flex flex-column justify-content-between ">
                                    <h5>علیرضا آهون</h5>
                                    <p class="text-secondary">توسعه دهنده وب</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}

                </div>


                <div class="row align-items-center mt-5">
                    <div class="col-md-6 col-lg-5  d-flex flex-column ">
                        <h4 class="text-center aboutUs-h2-color">
                            رشد مجازی - فروش واقعی
                        </h4 class="custom-height">
                        <p class="text-center"> به‌نگاران همراه همیشگی شما در فضای اینترنتی </p>
                        <div class="about-us-social-icons">
                            <a href="https://www.instagram.com/beh_negaran/?hl=en-gb"><i class='bx bxl-instagram'></i></a>
                            <a href="https://wa.me/+989195275731"><i class='bx bxl-whatsapp'></i></a>
                            <a href="https://www.linkedin.com/company/beh-negaran/"><i class='bx bxl-linkedin'></i></a>
                            <a href="#"><i class='bx bxl-youtube'></i></a>
                            <a class="aboutus-aparat-icon"
                                href="https://www.aparat.com/beh_negaran.com/%D8%B4%D8%B1%DA%A9%D8%AA_%D8%A8%D9%87_%D9%86%DA%AF%D8%A7%D8%B1%D8%A7%D9%86_%D8%AA%D8%AC%D8%A7%D8%B1%D8%AA_%D8%A2%D8%B2%D9%85%D8%A7"><img
                                    src="{{ asset('images/icons8-aparat-40.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto mt-4 mt-md-0">
                        <img alt="banner" class="img-fluid about-us-banner" src="{{ asset('images/banner3.jpg') }}">
                    </div>
                </div>
            </div>


        </div>





    </main>
@endsection

@section('js')
@endsection
