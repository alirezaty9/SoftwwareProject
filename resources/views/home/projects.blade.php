@extends('home.layouts.master')

@section('content')
    <!-- Main Section ---------------------------------------------------------------->
    <main class="main-section">
        <div class="container">

            <div class="projects-container mt-5">
                <div class="row project-page-title">
                    <div class="col-md-7 col-sm-12">
                        <h3>نمونه کارهای به نگاران</h3>
                        <div class="footer-line"><span></span></div>
                        <p class="mb-4">شما میتونید در این صفحه گزیده ای از پروژه های انجام شده توسط تیم به‌نگاران
                            رو ببینید و با توجه به نیاز خود به خدمتی اون رو زیر نظر داشته باشید و درجه کیفیت پروژه رو نیز
                            مورد بررسی قرار بدید .</p>
                        <p>ما تمام تلاشمون رو میکنیم تا به مرور زمان این صفحه رو کامل تر کنیم تا کاربران بهتر با به‌نگاران
                            آشنایی پیدا کنن.</p>
                    </div>

                    <div class="col-md-5 col-sm-12 digital-marketing-pic">
                        <img class="img-fluid" src="{{ asset('images/portfolio.png') }}">
                    </div>
                </div>

                <div class="projects-row">
                    <div class="col-12@sm filters-group-wrap">
                        <div class="filters-group">
                            <p class="filter-label">فیلتر</p>
                            <div class="btn-group filter-options">
                                <button class="projects-btn" data-group="video">ویدئو</button>
                                <button class="projects-btn" data-group="photo">عکس</button>
                                <button class="projects-btn" data-group="website">سایت</button>
                                <button class="projects-btn" data-group="design">طراحی</button>
                                <button class="projects-btn" data-group="campaign">کمپین</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container my-shuffle-container">
                <div id="grid" class="row">

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>تور</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video w-100">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/efu1W/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>خبری</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/oQGfH/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>پخش زنده</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/CQFLE/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>نمایشگاه</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/UYwPA/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>گزارش</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/VoYLz/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>تبلیغاتی</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/sOfMR/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>خدمات</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/Eq28t/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>مصاحبه</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/0YpAJ/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>تبلیغاتی</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/p96a3/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>رویداد</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/6DPUV/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>مصاحبه</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/xwN0X/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>تبلیغاتی</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/oPHWj/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>تبلیغاتی</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/xwVrt/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>رستوران</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/SBHAu/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>خبری</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/VQehs/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>خبری</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/xEC3K/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>تبلیغاتی</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/EDA75/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>محتوا</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/oKkrg/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>خبری</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/UZI6x/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>خبری</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/0fmib/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>پروژه</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video ">
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/ZdaTs/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["photo"]'>
                        <div class="ribbon"><span>تبلیغاتی</span></div>
                        <div class="row p-4">

                            <div id="video5" class="project-sample-img col-md-8">
                                <img class="img-fluid" src="{{ asset('images/projects-pics/_DSC3731-min.jpg') }}"
                                    alt="project-picture">
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div id="slide5" class="slides">
                                        <div id="67" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/_DSC3731-min.jpg') }}"></div>
                                        <div id="19" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/12-min.jpg') }}"></div>
                                        <div id="20" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/30-min.jpg') }}"></div>
                                        <div id="21" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/PNH_8369-min.jpg') }}"></div>
                                        <div id="22" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/Untitled-2-min.jpg') }}"></div>
                                        <div id="2" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/WhatsApp-Image-2020-02-05-at-1.jpg') }}">
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["photo"]'>
                        <div class="ribbon"><span>خبری</span></div>
                        <div class="row p-4">

                            <div id="video6" class="project-sample-img col-md-8">
                                <img class="img-fluid" src="{{ asset('images/projects-pics/_DSC4695-min.jpg') }}"
                                    alt="project-picture2">
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div id="slide6" class="slides">
                                        <div id="68" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/_DSC4695-min.jpg') }}"></div>
                                        <div id="23" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/_DSC3310-min.jpg') }}"></div>
                                        <div id="24" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/_DSC3268-min.jpg') }}"></div>
                                        <div id="25" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/_DSC4820-min.jpg') }}"></div>
                                        <div id="26" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/111-min.jpg') }}"></div>
                                        <div id="27" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/1111-min.jpg') }}"></div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["photo"]'>
                        <div class="ribbon"><span>رستوران</span></div>
                        <div class="row p-4">

                            <div id="video7" class="project-sample-img col-md-8">
                                <img class="img-fluid" src="{{ asset('images/projects-pics/14-min.jpg') }}"
                                    alt="project-picture2">
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div id="slide7" class="slides">
                                        <div id="69" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/14-min.jpg') }}"></div>
                                        <div id="28" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/13-min.jpg') }}"></div>
                                        <div id="29" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/15-min.jpg') }}"></div>
                                        <div id="30" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/18-min.jpg') }}"></div>
                                        <div id="31" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/DSC_7247-min.jpg') }}"></div>
                                        <div id="32" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/DSC_7257-min.jpg') }}"></div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["photo"]'>
                        <div class="ribbon"><span>صنعتی</span></div>
                        <div class="row p-4">

                            <div id="video2" class="project-sample-img col-md-8">
                                <img class="img-fluid" src="{{ asset('images/projects-pics/_DSC4074.jpg') }}"
                                    alt="project-picture2">
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div id="slide2" class="slides">
                                        <div id="43" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/_DSC4074.jpg') }}"></div>
                                        <div id="44" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/_DSC4057.jpg') }}"></div>
                                        <div id="45" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/_DSC3342-min.jpg') }}"></div>
                                        <div id="46" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/10-min.jpg') }}"></div>
                                        <div id="70" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/100.jpg') }}"></div>
                                        <div id="71" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/1000.jpg') }}"></div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["photo"]'>
                        <div class="ribbon"><span>معماری</span></div>
                        <div class="row p-4">

                            <div id="video3" class="project-sample-img col-md-8">
                                <img class="img-fluid" src="{{ asset('images/projects-pics/0-min.jpg') }}"
                                    alt="project-picture2">
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div id="slide3" class="slides">
                                        <div id="47" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/0-min.jpg') }}"></div>
                                        <div id="48" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/20-min.jpg') }}"></div>
                                        <div id="49" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/21-min.jpg') }}"></div>
                                        <div id="72" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/22-min.jpg') }}"></div>
                                        <div id="73" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/23-min.jpg') }}"></div>
                                        <div id="74" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/24-min.jpg') }}"></div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>



                    <div class="col-md-12 picture-item" data-groups='["design"]'>
                        <div class="ribbon"><span>لوگو</span></div>
                        <div class="row p-4">

                            <div id="video9" class="project-sample-img col-md-8">
                                <img class="img-fluid" src="{{ asset('images/projects-pics/logo1.jpg') }}"
                                    alt="project-picture2">
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div id="slide9" class="slides">
                                        <div id="57" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/logo1.jpg') }}"></div>
                                        <div id="58" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/logo2.jpg') }}"></div>
                                        <div id="59" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/logo3.jpg') }}"></div>
                                        <div id="60" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/logo4.jpg') }}"></div>


                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["design"]'>
                        <div class="ribbon"><span>بنر</span></div>
                        <div class="row p-4">

                            <div id="video1" class="project-sample-img col-md-8">
                                <img class="img-fluid" src="{{ asset('images/projects-pics/بنر1.jpg') }}"
                                    alt="project-picture2">
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div id="slide1" class="slides">
                                        <div id="62" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/بنر1.jpg') }}"></div>
                                        <div id="63" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/بنر2.jpg') }}"></div>
                                        <div id="64" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/بنر3.jpg') }}"></div>
                                        <div id="75" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/بنر4.jpg') }}"></div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["design"]'>
                        <div class="ribbon"><span>سایر</span></div>
                        <div class="row p-4">

                            <div id="video12" class="project-sample-img col-md-8">
                                <img class="img-fluid" src="{{ asset('images/projects-pics/چاپ 3.jpg') }}"
                                    alt="project-picture2">
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div id="slide12" class="slides">
                                        <div id="65" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/چاپ 3.jpg') }}"></div>
                                        <div id="66" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/چاپ 1.jpg') }}"></div>
                                        <div id="76" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/چاپ 2.jpg') }}"></div>
                                        <div id="77" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/projects-pics/چاپ-4.jpg') }}"></div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["campaign"]'>
                        <div class="ribbon"><span>فرمند</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video">
                                <span style="display: block;padding-top: 57%"></span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/lnNbh/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["campaign"]'>
                        <div class="ribbon"><span>تلاوند</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video">
                                <span style="display: block;padding-top: 57%"></span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/plyaR/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["campaign"]'>
                        <div class="ribbon"><span>فرمند</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video">
                                <span style="display: block;padding-top: 57%"></span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/9wcdj/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>


                        </div>


                    </div>




                    <div class="col-md-12 picture-item" data-groups='["website"]'>
                        <div class="ribbon"><span>سایت</span></div>
                        <div class="row p-4">

                            <div id="video10" class="project-sample-img col-md-8">
                                <img class="img-fluid" src="{{ asset('images/Screenshot 2022-05-21 172901.png') }}"
                                    alt="project-picture2">
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div id="slide10" class="slides">
                                        <div id="38" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/Screenshot 2022-05-21 172310.png') }}"></div>
                                        <div id="39" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/Screenshot 2022-05-21 172407.png') }}"></div>
                                        <div id="40" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/Screenshot 2022-05-21 172451.png') }}"></div>
                                        <div id="41" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/Screenshot 2022-05-21 172610.png') }}"></div>
                                        <div id="42" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/Screenshot 2022-05-21 172720.png') }}"></div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>





                    <div class="col-1@sm col-1@xs my-sizer-element"></div>
                </div>





            </div>

        </div>
    </main>
@endsection

@section('js')
    <script>
        // ImageSlides------------------------------------

        var els = document.getElementsByClassName("gallery-container");
        var getSlides;
        var slideGallery;
        var slides;
        var count = 0;
        var scrollbarThumb;
        var slideCount;
        var slideHeight;
        var sliderHolder = [];
        var marginTop;
        var operator;
        for (var i = 0; i < els.length; i++) {

            // console.log(els[i].childNodes[5].children);
            slideGallery = els[i].childNodes[5];
            slides = slideGallery.querySelectorAll('div');
            scrollbarThumb = els[i].children[1].firstElementChild;
            slideCount = slides.length;
            slideHeight = 720;
            marginTop = 16;

            els[i].children[0].innerHTML += [...slides]
                .map(
                    (slide, i) =>
                    `<img src="${slide.querySelector('img').src}" onClick="slider(${count})" id="img${count}" data-id="${i}">`
                )
                .join('');
            count++;

            sliderHolder.push(slideGallery);

        }

        console.log(sliderHolder);

        operator = 0;

        function slider(count) {

            operator = sliderHolder[count];

            const scrollThumb = () => {
                const index = Math.floor(operator.scrollTop / slideHeight);
                scrollbarThumb.style.height = `${((index + 1) / slideCount) * slideHeight}px`;
            };

            const scrollToElement = el => {
                const index = parseInt(el.dataset.id, 10);
                operator.scrollTo(0, index * slideHeight + marginTop);
            };

            document.querySelectorAll('.thumbnails img').forEach(el => {
                el.addEventListener('click', () => scrollToElement(el));
            });

            operator.addEventListener('scroll', e => scrollThumb());

            scrollThumb();

        }

        $(document).ready(function() {

            for (let i = 0; i <= 12; i++) {

                $('#slide' + i).on('click', 'div', function() {
                    $("#video" + i).empty();
                    $(this).children().clone().appendTo("#video" + i);

                });

            }

            // $('#slide1').on('click', 'div', function() {
            //     $("#video1").empty();
            //     $(this).children().clone().appendTo("#video1");

            // });

            // $('#slide2').on('click', 'div', function() {
            //     $("#video2").empty();
            //     $(this).children().clone().appendTo("#video2");

            // });

            // $('#slide3').on('click', 'div', function() {
            //     $("#video3").empty();
            //     $(this).children().clone().appendTo("#video3");

            // });

            // $('#slide4').on('click', 'div', function() {
            //     $("#video4").empty();
            //     $(this).children().clone().appendTo("#video4");

            // });

            // $('#slide5').on('click', 'div', function() {
            //     $("#video5").empty();
            //     $(this).children().clone().appendTo("#video5");

            // });

            // $('#slide6').on('click', 'div', function() {
            //     $("#video6").empty();
            //     $(this).children().clone().appendTo("#video6");

            // });

            // $('#slide7').on('click', 'div', function() {
            //     $("#video7").empty();
            //     $(this).children().clone().appendTo("#video7");

            // });

            // $('#slide8').on('click', 'div', function() {
            //     $("#video8").empty();
            //     $(this).children().clone().appendTo("#video8");

            // });

            // $('#slide9').on('click', 'div', function() {
            //     $("#video9").empty();
            //     $(this).children().clone().appendTo("#video9");

            // });

            // $('#slide10').on('click', 'div', function() {
            //     $("#video10").empty();
            //     $(this).children().clone().appendTo("#video10");

            // });

            // $('#slide11').on('click', 'div', function() {
            //     $("#video11").empty();
            //     $(this).children().clone().appendTo("#video11");

            // });

            // $('#slide12').on('click', 'div', function() {
            //     $("#video12").empty();
            //     $(this).children().clone().appendTo("#video12");

            // });

        });




        // for (let x = 0; x < sliderHolder.length; x++) {

        //     const scrollThumb = () => {
        //         const index = Math.floor(sliderHolder[x].scrollTop / slideHeight);
        //         scrollbarThumb.style.height = `${((index + 1) / slideCount) * slideHeight}px`;
        //     };

        //     const scrollToElement = el => {
        //         const index = parseInt(el.dataset.id, 10);
        //         sliderHolder[x].scrollTo(0, index * slideHeight + marginTop);
        //     };

        //     // document.querySelectorAll('.thumbnails img').forEach(el => {
        //     //     el.addEventListener('click', () => scrollToElement(el));
        //     // });

        //     document.getElementById('divElem').scrollTop += 10

        //     slideGallery.addEventListener('scroll', e => scrollThumb());

        //     scrollThumb();

        // }


        // console.log(sliderHolder[0].children);
        // const slideGallery = els[i];
        // const slides = slideGallery.querySelectorAll('div');
        // const scrollbarThumb = document.querySelector('.thumb');
        // const slideCount = slides.length;
        // const slideHeight = 720;
        // const marginTop = 16;

        // const scrollThumb = () => {
        //   const index = Math.floor(slideGallery.scrollTop / slideHeight);
        //   scrollbarThumb.style.height = `${((index + 1) / slideCount) * slideHeight}px`;
        // };

        // const scrollToElement = el => {
        //   const index = parseInt(el.dataset.id, 10);
        //   slideGallery.scrollTo(0, index * slideHeight + marginTop);
        // };

        // document.querySelector('.thumbnails').innerHTML += [...slides]
        //   .map(
        //     (slide, i) => `<img src="${slide.querySelector('img').src}" data-id="${i}">`
        //   )
        //   .join('');

        // document.querySelectorAll('.thumbnails img').forEach(el => {
        //   el.addEventListener('click', () => scrollToElement(el));
        // });

        // slideGallery.addEventListener('scroll', e => scrollThumb());

        // scrollThumb();

        // Shuffle JS -------------------------------------

        var Shuffle = window.Shuffle;

        class Demo {
            constructor(element) {
                this.element = element;
                this.shuffle = new Shuffle(element, {
                    itemSelector: '.picture-item',
                    sizer: element.querySelector('.my-sizer-element'),
                });

                // Log events.
                this.addShuffleEventListeners();
                this._activeFilters = [];
                this.addFilterButtons();
                this.addSorting();
                this.addSearchFilter();
            }

            /**
             * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
             * for them like you normally would (with jQuery for example).
             */
            addShuffleEventListeners() {
                this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {
                    console.log('layout. data:', data);
                });
                this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {
                    console.log('removed. data:', data);
                });
            }

            addFilterButtons() {
                const options = document.querySelector('.filter-options');
                if (!options) {
                    return;
                }

                const filterButtons = Array.from(options.children);
                const onClick = this._handleFilterClick.bind(this);
                filterButtons.forEach((button) => {
                    button.addEventListener('click', onClick, false);
                });
            }

            _handleFilterClick(evt) {
                const btn = evt.currentTarget;
                const isActive = btn.classList.contains('active');
                const btnGroup = btn.getAttribute('data-group');

                this._removeActiveClassFromChildren(btn.parentNode);

                let filterGroup;
                if (isActive) {
                    btn.classList.remove('active');
                    filterGroup = Shuffle.ALL_ITEMS;
                } else {
                    btn.classList.add('active');
                    filterGroup = btnGroup;
                }

                this.shuffle.filter(filterGroup);
            }

            _removeActiveClassFromChildren(parent) {
                const {
                    children
                } = parent;
                for (let i = children.length - 1; i >= 0; i--) {
                    children[i].classList.remove('active');
                }
            }

            addSorting() {
                const buttonGroup = document.querySelector('.sort-options');
                if (!buttonGroup) {
                    return;
                }
                buttonGroup.addEventListener('change', this._handleSortChange.bind(this));
            }

            _handleSortChange(evt) {
                // Add and remove `active` class from buttons.
                const buttons = Array.from(evt.currentTarget.children);
                buttons.forEach((button) => {
                    if (button.querySelector('input').value === evt.target.value) {
                        button.classList.add('active');
                    } else {
                        button.classList.remove('active');
                    }
                });

                // Create the sort options to give to Shuffle.
                const {
                    value
                } = evt.target;
                let options = {};

                function sortByDate(element) {
                    return element.getAttribute('data-created');
                }

                function sortByTitle(element) {
                    return element.getAttribute('data-title').toLowerCase();
                }

                if (value === 'date-created') {
                    options = {
                        reverse: true,
                        by: sortByDate,
                    };
                } else if (value === 'title') {
                    options = {
                        by: sortByTitle,
                    };
                }
                this.shuffle.sort(options);
            }

            // Advanced filtering
            addSearchFilter() {
                const searchInput = document.querySelector('.js-shuffle-search');
                if (!searchInput) {
                    return;
                }
                searchInput.addEventListener('keyup', this._handleSearchKeyup.bind(this));
            }

            /**
             * Filter the shuffle instance by items with a title that matches the search input.
             * @param {Event} evt Event object.
             */
            _handleSearchKeyup(evt) {
                const searchText = evt.target.value.toLowerCase();
                this.shuffle.filter((element, shuffle) => {
                    // If there is a current filter applied, ignore elements that don't match it.
                    if (shuffle.group !== Shuffle.ALL_ITEMS) {
                        // Get the item's groups.
                        const groups = JSON.parse(element.getAttribute('data-groups'));
                        const isElementInCurrentGroup = groups.indexOf(shuffle.group) !== -1;
                        // Only search elements in the current group
                        if (!isElementInCurrentGroup) {
                            return false;
                        }
                    }
                    const titleElement = element.querySelector('.picture-item__title');
                    const titleText = titleElement.textContent.toLowerCase().trim();
                    return titleText.indexOf(searchText) !== -1;
                });
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            window.demo = new Demo(document.getElementById('grid'));
        });

        Shuffle.options = {
            buffer: 0, // Useful for percentage based heights when they might not always be exactly the same (in pixels).
            columnThreshold: 0.01, // Reading the width of elements isn't precise enough and can cause columns to jump between values.
            columnWidth: 0, // A static number or function that returns a number which tells the plugin how wide the columns are (in pixels).
            delimiter: null, // If your group is not json, and is comma delimited, you could set delimiter to ','.
            easing: 'cubic-bezier(0.4, 0.0, 0.2, 1)', // CSS easing function to use.
            filterMode: Shuffle.FilterMode
                .ANY, // When using an array with filter(), the element passes the test if any of its groups are in the array. With "all", the element only passes if all groups are in the array.
            group: Shuffle.ALL_ITEMS, // Initial filter group.
            gutterWidth: 0, // A static number or function that tells the plugin how wide the gutters between columns are (in pixels).
            initialSort: null, // Shuffle can be initialized with a sort object. It is the same object given to the sort method.
            isCentered: false, // Attempt to center grid items in each row.
            isRTL: true, // Attempt to align grid items to right.
            itemSelector: '*', // e.g. '.picture-item'.
            roundTransforms: true, // Whether to round pixel values used in translate(x, y). This usually avoids blurriness.
            sizer: null, // Element or selector string. Use an element to determine the size of columns and gutters.
            speed: 250, // Transition/animation speed (milliseconds).
            staggerAmount: 15, // Transition delay offset for each item in milliseconds.
            staggerAmountMax: 150, // Maximum stagger delay in milliseconds.
            // throttle: throttle, // By default, shuffle will throttle resize events. This can be changed or removed.
            throttleTime: 300, // How often shuffle can be called on resize (in milliseconds).
            useTransforms: true, // Whether to use transforms or absolute positioning.
        };
    </script>
@endsection
