@extends('home.layouts.master')

@section('js')


<script>
    console.log('INDEX');
  const dtp1Instance = new mds.MdsPersianDateTimePicker(document.getElementById('dtp1'), {
    targetTextSelector: '[data-name="dtp1-text"]',
    targetDateSelector: '[data-name="dtp1-date"]',
    persianNumber: true,
  });

//trigger numbers
$(allInView);
$(window).scroll(allInView);

function isScrolledIntoView(elem) {
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();

  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();

  return elemBottom <= docViewBottom && elemTop >= docViewTop;
}

// Numbers Count Update -------------------------------------
const items = [...document.querySelectorAll(".number")];

const updateCount = (el) => {
  const value = parseInt(el.dataset.value);
  const increment = Math.ceil(value / 1000);
  // const increment = 1;
  let initialValue = 0;

  const increaseCount = setInterval(() => {
    initialValue += increment;

    if (initialValue > value) {
      el.textContent = `${value.toLocaleString("ar-EG")}+`;
      clearInterval(increaseCount);
      return;
    }

    el.textContent = `${initialValue.toLocaleString("ar-EG")}+`;
  }, 1);
  // console.log(increaseCount);
};
// Trigger Numbers Function -----------------------------------------------
let once = true;
function allInView() {
  if (once) {
    if (isScrolledIntoView($("#numbers"))) {
      items.forEach((item) => {
        updateCount(item);
      });
      once = false;
    }
  }
}
</script>

@endsection


@section('content')


<!-- Banner Section ---------------------------------------------------------------->
<main class="main-section">
  <div class="container-fluid px-0">
    <div class="banner">
      <div class="banner-inner">
        <h1>سامانه یکپارچه تولید محتوا و تبلیغات</h1>
      </div>
    </div>

    <div class="row quick-service-box">
      <div class="col-md-12 p-0">
        <h3>خدمات سفارش آنلاین</h3>

        <div class="quick-service-icons">
          <ul>
            <li> <a href="{{route('home.services')}}/#video-service"><i class="fas fa-video"></i>ویدئو</a> </li>
            <li> <a href="{{route('home.services')}}/#photo-service"><i class="fas fa-camera"></i>عکس</a> </li>
            <li> <a href="{{route('home.services')}}/#website-service"><i class="fas fa-laptop-code"></i>سایت</a> </li>
            <li> <a href="{{route('home.services')}}/#design-service"><i class="fas fa-palette"></i>طراحی</a> </li>
            <li> <a href="{{route('home.services')}}/#podcast-service"><i class="fas fa-microphone"></i>پادکست</a> </li>
          </ul>
        </div>
        <form class="form-control quick-form">

          <!-- <label for="persianDatapicker"> تاریخ: <input data-name="dtp1-text" name="persianDatapicker" id="dtp1" type="text"></label> -->
          <div class="input-group date-input">
            <span class="input-group-text" id="dtp1"><i class="fas fa-calendar-alt"></i></span>
            <input type="text" class="form-control text-center" placeholder="انتخاب تاریخ" data-name="dtp1-text">
          </div>

          <div class="input-group city-select">
            <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-map-marker-alt"></i></label>
            <select class="form-select text-center" id="inputGroupSelect01">
              <option value="کرج">کرج</option>
              <option value="تهران">تهران</option>
              <option value="قزوین">قزوین</option>
            </select>
          </div>

          <button class="secondary-btn" type="submit">سفارش</button>

        </form>
      </div>
    </div>
   


    <!-- Banner Section --------------------------------------------------------------->
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel owl-theme .owl-dots .owl-dot text-center">
            @foreach ($sliders as $slider)

            <div class="carousel-banner carousel-shadow"> <a href="#"> <img class="img-fluid" src="{{asset(env('BANNER_IMAGE_UPLOAD_PATH').$slider->image)}}" alt="banner1"> </a> </div>

            @endforeach

          </div>
        </div>
      </div>
    </div>


    <!-- About Company ------------------------------------------------------------->
    <div class="container mt-2">
      <div class="row about-section">
        <div class="col-lg-7 col-md-12 col-sm-12">
          <h3>داستان به نگاران</h3>
          <div class="footer-line"><span></span></div>
          <p>شروع ایده شکل گیری شرکت از هفت سال پیش ابتدا با عکاسی در زمینه تبلیغاتی و صنعتی آغاز شد و در ادامه فیلمبرداری و ساخت آنونس تبلیغاتی هم به این پکیج فری لنسری اضافه شد.</p>
          <p>بعد ها از چهار سال پیش تیم تولید محتوا تخصصی راه اندازی شد که زمینه ساز تاسیس شرکت در شهریور سال ۱۴۰۰ بود.</p>
          <p>هم اکنون شرکت به‌نگاران تجارت آزما با مجوز رسمی از وزارت فرهنگ و ارشاد اسلامی با موضوع تبلیغات دیجیتال فعالیت میکند و خدمات متفاوتی در این زمینه ارائه میدهد.</p>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12">
          <div class="h_iframe-aparat_embed_frame mt_7">
            <span style="display: block;padding-top: 57%"></span>
            <iframe src="https://www.aparat.com/video/video/embed/videohash/oQGfH/vt/frame" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
            </iframe>
          </div>
        </div>
      </div>

      <div class="row why-order-online-section">
        <div class="col-md-12 col-sm-12">
          <h3>هدف به‌ نگاران</h3>
          <hr class="w-25">
          <p>اصلی ترین هدف شرکت به‌نگاران ارائه راهکارهای تبلیغاتی و مارکتینگ در جهت رشد و ارتقای کسب و کارها در سطوح مختلف میباشد. </p>
          <p>ما با شعار رشد مجازی-فروش واقعی پا به این عرصه گذاشتیم و تلاش میکنیم همراه خوبی برای تمامی کسب و کارها باشیم.</p>
        </div>
      </div>

      <div class="row  why-order-online-section">
        <div class="col-md-12 col-sm-12">
          <h3>سامانه به نگاران</h3>
          <hr class="w-25">
        <p>به‌نگاران اولین سامانه یکپارچه تولید محتوای دیجیتال در کشور است که تقریبا تمام خدمات تولید محتوا و تبلیغات را تحت پوشش خود دارد.</p>
        <p>در این سامانه کاربر وارد سایت میشود و میتواند تمام خدمات مد نظر خود را به صورت آنلاین سفارش دهد و به جای ارتباط گرفتن و صرف زمان زیاد برای هماهنگی با چندین نفر از طریق همین سایت تمامی خدمات را پیگیری میکند تا به سرانجام برسد.</p>
        </div>
      </div>

      <!-- Numbers Section ----------------------------------------------->
      <div class="row mt-5" id="numbers">
        <div class="col-md-4 col-sm-12">
          <article class="service-number">
            <span class="number" data-value="50">۰</span>
            <p>خدمات</p>
          </article>
        </div>

        <div class="col-md-4 col-sm-12">
          <article class="done-projects-number">
            <span class="number" data-value="300">۰</span>
            <p>پروژه های انجام شده</p>
          </article>
        </div>

        <div class="col-md-4 col-sm-12">
          <article class="current-projects-number">
            <span class="number" data-value="13">۰</span>
            <p>پروژه های در حال انجام</p>
          </article>
        </div>
      </div>

      <!-- Company Brands -------------------------------------------------->
      <div class="row text-center company-brands">
        <h3>همکاری های شرکت</h3>
        <hr class="w-25 m-auto">
      </div>
      <!-- Brand Sazmani ----------->
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="owl-carousel owl-theme .owl-dots .owl-dot text-center owl">
            @foreach ($logos as $logo)

            <div class="carousel-banner"> <img src="{{asset(env('BANNER_IMAGE_UPLOAD_PATH').$logo->image)}}" alt="banner1"> </div>

            @endforeach
          </div>
        </div>
      </div>

      <hr>

      <div class="row mt-5">
        <div class="col-md-12">
          <div class="owl-carousel owl-theme .owl-dots .owl-dot text-center owl">
            @foreach ($second_logos as $logo)

            <div class="carousel-banner"> <img src="{{asset(env('BANNER_IMAGE_UPLOAD_PATH').$logo->image)}}" alt="banner1"> </div>

            @endforeach
          </div>
        </div>
      </div>

  </div>
</main>

@endsection
