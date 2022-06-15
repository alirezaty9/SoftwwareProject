@extends('home.layouts.master')

@section('content')
    <!-- Main Section ---------------------------------------------------------------->
    <main class="main-section">
        <div class="container-fluid px-0">

            <div class="container">

                {{-- Introduction --------------------------------------- --}}

                <div class="row service-beh-negaran">
                    <div class="col-md-7 col-sm-12">

                        <h2>خدمات به نگاران</h2>
                        <div class="footer-line"><span></span></div>
                        <p>قبل از معرفی تمامی خدمات به‌نگاران لازمه بدونید که تمام سعی ما اینه که کاربران ( کسب و کارها
                            -شرکت‌ها - سازمان‌ها و ... ) به تمامی خدمات به صورت یکجا دسترسی داشته باشند . در واقع تلاش
                            میکنیم راه دشوار تولید محتوا و تبلیغات رو برایتان ساده تر کنیم.</p>
                        <p class="mb-4">در به‌نگاران کاربر بعد از دیدن نمونه کارها با دریافت مشاوره با ثبت سفارش
                            امکان روند پروژه رو دارد و به راحتی در جریان جزئیات کار قرار میگیره و بعد از اتمام کار میتونه از
                            پروفایل شخصی به فایل‌های نهایی دسترسی داشته باشه.
                            در ادامه به صورت کلی خدمات به‌نگاران رو براتون توضیح میدیم.</p>

                        <a class="secondary-btn" href="https://wa.me/+989981713807">مشاوره رایگان</a>

                    </div>

                    <div class="col-md-5 col-sm-12 digital-marketing-pic">
                        <img class="img-fluid" src="{{ asset('images/services-caver.png') }}">
                    </div>
                </div>

                {{-- Video Service ------------------------------------------------- --}}
                <div class="row mt-5" id="video-service">
                    
                        <div class="col-md-10 col-sm-12">
                            <h3>ویدئو</h3>
                            <hr class="w-25">
                            <p class="mb-4">خدمات ویدئویی شکل‌های بسیار مختلفی داره، از فیلمبرداری‌های ساده گرفته
                                تا تیزرهای تبلیغاتی حرفه ای و یا موشن گرافی.
                                آمار و ارقام نشان میدهد محتوا یا تبلیغات ویدئویی ۵ برابر نسبت به تبلیغات ساکن تأثیرگذار تره،
                                چون فضایی قابل فهم برای مخاطب میسازه که این موضوع برای بیننده جذاب تره . </p>
                            <div>
                                <a class="secondary-btn" href="{{ route('home.order') }}">سفارش</a>
                                <a class="secondary-btn" href="{{ route('home.projects') }}">نمونه کار</a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-12 icon-pic">
                            <img class="img-fluid" src="{{ asset('images/video-camera.png') }}">

                        </div>
                    

                    <div class="row mt-5 mb-4 no-p-left">
                        <h4 class="text-center">انواع خدمات ویدئویی به‌نگاران</h4>


                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>انواع فیلمبرداری</h5>
                                <ul>
                                    <li>
                                        <p>فیلمبرداری با دوربین ثابت</p>
                                    </li>
                                    <li>
                                        <p>پخش زنده ویدئویی</p>
                                    </li>
                                    <li>
                                        <p>فیلمبرداری آموزشی</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>ساخت تیزر تبلیغاتی</h5>
                                <ul>
                                    <li>
                                        <p>کارگردانی</p>
                                    </li>
                                    <li>
                                        <p>ایده پردازی</p>
                                    </li>
                                    <li>
                                        <p>اجرا و تدوین تیزر تبلیغاتی</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>تدوین ویدئو</h5>
                                <ul>
                                    <li>
                                        <p>تدوین حرفه ای ویدئو ها</p>
                                    </li>
                                    <li>
                                        <p>تدوین حرفه ای جلوه های ویژه</p>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>موشن گرافی</h5>
                                <ul>
                                    <li>
                                        <p>ایده پردازی</p>
                                    </li>
                                    <li>
                                        <p>ساخت انیمیشن</p>
                                    </li>
                                    <li>
                                        <p>موشن گرافی تبلیغاتی</p>
                                    </li>
                                </ul>
                            </div>

                        </div>


                    </div>
                </div>

                {{-- Photo Service ------------------------------------------------- --}}
                <div class="row mt-5" id="photo-service">
                    
                        <div class="col-md-10 col-sm-12">
                            <h3>عکس</h3>
                            <hr class="w-25">
                            <p class="mb-4">عکاسی یکی از خدمات پر طرفداره که در ژانرهای مختلف انجام میشه، بسیاری
                                از کاربران برای به نمایش گذاشتن محصولات،خدمات، امکانات و ... نیاز به عکس‌های با کیفیتی دارن
                                و عامل مهم اثرگذاری تصویر هم کیفیت مناسبشه .</p>
                            <div>
                                <a class="secondary-btn" href="{{ route('home.order') }}">سفارش</a>
                                <a class="secondary-btn" href="{{ route('home.projects') }}">نمونه کار</a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-12 icon-pic">
                            <img class="img-fluid" src="{{ asset('images/photo-camera.png') }}">

                        </div>
                    

                    <div class="row mt-5 mb-4 no-p-left">
                        <h4 class="text-center">انواع خدمات عکاسی به‌نگاران</h4>


                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>عکاسی صنعتی</h5>
                                <ul>
                                    <li>
                                        <p>عکاسی از محصول</p>
                                    </li>
                                    <li>
                                        <p>عکاسی از خط تولید</p>
                                    </li>
                                    <li>
                                        <p>عکاسی شرکتی و ...</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>عکاسی تبلیغاتی</h5>
                                <ul>
                                    <li>
                                        <p>ایده پردازی</p>
                                    </li>
                                    <li>
                                        <p>صحنه سازی های حرفه ای برای محصول یا خدمات</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>عکاسی خبری</h5>
                                <ul>
                                    <li>
                                        <p>عکاسی رویدادها</p>
                                    </li>
                                    <li>
                                        <p>نمایشگاه ها جلسات و ...</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>عکاسی هوایی</h5>
                                <ul>
                                    <li>
                                        <p>عکاسی با هلی شات برای عکاسی در ابعاد وسیع</p>
                                    </li>
                                </ul>

                            </div>

                        </div>


                    </div>
                </div>

                {{-- Website Service ------------------------------------------------- --}}
                <div class="row mt-5" id="website-service">
                    
                        <div class="col-md-10 col-sm-12">
                            <h3>خدمات وب‌سایت</h3>
                            <hr class="w-25">
                            <p class="mb-4">همه ما میدونیم که امروزه مهمترین راه ارتباطی هر کسب و کاری با مخاطبش
                                از طریق وب‌سایت امکان پذیره، هر کسب و کاری با تمرکز وب‌سایت و البته تولید محتوای با کیفیت
                                برای اون میتونه در دنیای مجازی که بخش مهمی از زندگی ما شده به مخاطب مد نظر خودش برسه.</p>
                            <div>
                                <a class="secondary-btn" href="{{ route('home.order') }}">سفارش</a>
                                <a class="secondary-btn" href="{{ route('home.projects') }}">نمونه کار</a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-12 icon-pic">
                            <img class="img-fluid" src="{{ asset('images/graphic-design.png') }}">

                        </div>
                   

                    <div class="row mt-5 mb-4 no-p-left">
                        <h4 class="text-center">انواع خدمات وب‌سایت</h4>


                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>طراحی وب‌سایت</h5>
                                <ul>
                                    <li>
                                        <p>این خدمت شامل چند سطح مختلف میشه و معمولا بسته به نیاز کاربر شناسایی و طراحی میشه
                                        </p>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>پشتیبانی</h5>
                                <ul>
                                    <li>
                                        <p>خیلی از کاربران هستن که سایتشون طراحی شده اما به دنبال خدمتی هستن که بتونن از
                                            طریق اون امکانات سایتشون رو بهبود ببخشن.</p>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>بهینه سازی و سئو</h5>
                                <ul>
                                    <li>
                                        <p>داشتن جایگاه مناسب در موتورهای جست و جو شامل این خدمت میشه که البته نیاز به زمان
                                            و فرصت کافی داره.</p>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>اپلیکیشن</h5>
                                <ul>
                                    <li>
                                        <p>طراحی و توسعه اپلیکیشن های موبایل در کنار سایت ها امروزه طرفداران بسیاری داره.
                                        </p>
                                    </li>
                                </ul>
                            </div>

                        </div>


                    </div>
                </div>

                {{-- Design Service ------------------------------------------------- --}}
                <div class="row mt-5" id="design-service">
                    
                        <div class="col-md-10 col-sm-12">
                            <h3>طراحی</h3>
                            <hr class="w-25">
                            <p class="mb-4">طراحی گرافیکی خدمتیه که مربوط به بخش های دیگه هم هست مثلا طراحی بخش
                                ویدئویی یا عکاسی یا وب‌سایت.
                                همینطور به صورت مستقل هم در بسیاری از امور استفاده میشه، چه در بخش تبلیغات دیجیتال و چه در
                                بخش تبلیغات محیطی.
                            </p>
                            <div>
                                <a class="secondary-btn" href="{{ route('home.order') }}">سفارش</a>
                                <a class="secondary-btn" href="{{ route('home.projects') }}">نمونه کار</a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-12 icon-pic">
                            <img class="img-fluid" src="{{ asset('images/art.png') }}">

                        </div>
                   

                    <div class="row mt-5 mb-4 no-p-left">
                        <h4 class="text-center">انواع طراحی های گرافیکی
                        </h4>


                        <div class="col-md-4 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>هویت بصری</h5>
                                <ul>
                                    <li>
                                        <p>لوگو</p>
                                    </li>
                                    <li>
                                        <p>شعار</p>
                                    </li>
                                    <li>
                                        <p>رنگ سازمانی</p>
                                    </li>
                                    <li>
                                        <p>قالب های گرافیکی همگی جزو هویت بصریه</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>بازاریابی</h5>
                                <ul>
                                    <li>
                                        <p>طراحی های گرافیکی در بخش بازاریابی مخصوصا کمپین های تبلیغاتی دیده میشن</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>رابط کاربری ( در وب‌سایت )</h5>
                                <ul>
                                    <li>
                                        <p>معمولا با نام UI شناخته میشه و دیزاین سایت را بر عهده داره </p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>حوزه نشر</h5>
                                <ul>
                                    <li>
                                        <p>طراحی کتاب های درسی، مجلات ، روزنامه، خبرنامه کاتالوگ جزو این دسته از طراحی ها
                                            میشن</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>بسته بندی</h5>
                                <ul>
                                    <li>
                                        <p>هر محصولی نیازمند طراحی بسته بندی مفید و البته جذابیه تا بتونه به خوبی در بازار
                                            عملکرد خوبی داشته باشه</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>تبلیغات محیطی</h5>
                                <ul>
                                    <li>
                                        <p>بیلبوردهای شهری، بنرها، دیوار نوشته ها و کاغذ دیواری هم نوع خاصی از طراحی
                                            گرافیکیه</p>
                                    </li>
                                </ul>

                            </div>

                        </div>


                    </div>
                </div>

                {{-- Podcast Service ------------------------------------------------- --}}
                <div class="row mt-5" id="podcast-service">
                   
                        <div class="col-md-10 col-sm-12">
                            <h3>پادکست</h3>
                            <hr class="w-25">
                            <p>پادکست با معادل فارسی پیشنهاد شده‌ی پادپخش یا رادیو اینترنتی این روزا مخاطبین خاصی رو به خودش
                                جذب میکنه و رابط بسیار مناسبی برای کسب و کارایی که حرفی برای گفتن دارن هست. چه خودشون محتوا
                                تولید کنن چه اسپانسر پادکست‌های معروف بشن و در اونجا ازشون تبلیغ بشه.</p>
                            <p class="mb-4">مثلا ما در تدارک تهیه پادکست به‌نگاران هستیم تا در اون به ارائه
                                راهکارهای تبلیغاتی و یا حل چالش های کسب و کارها در فضای تبلیغاتی بپردازیم.
                                در حال حاضر هم تمامی امکانات لازم برای تهیه پادکست برای ایده های مختلف رو داریم.</p>
                            <div>
                                <a class="secondary-btn" href="{{ route('home.order') }}">سفارش</a>
                                <a class="secondary-btn" href="https://wa.me/+989981713807">مشاوره رایگان</a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-12 icon-pic">
                            <img class="img-fluid" src="{{ asset('images/microphone.png') }}">

                        </div>
                   

                    
                </div>

                {{-- Advertise Consultation Service ------------------------------------------------- --}}
                <div class="row mt-5" id="advertise-consultation-service">
                    
                        <div class="col-md-10 col-sm-12">
                            <h3>مشاوره تبلیغاتی</h3>
                            <hr class="w-25">
                            <p>به نظر میاد اصلی ترین دغدغه کاربران ما شناخت جایگاه درست کسب و کارشون در این فضاست.</p>
                            <p class="mb-4">ما وظیفه خودمون میدونیم تا با مشاوره درست شما رو در بهتیرین مسیر قرار بدیم . متاسفانه میبینیم که اغلب کسب و کارها در سردرگمی تبلیغاتی و فضای مجازی گیر افتادند و به شدت آسیب میبینن.</p>
                            
                            <a class="secondary-btn" href="https://wa.me/+989981713807">مشاوره رایگان</a>

                        </div>

                        <div class="col-md-2 col-sm-12 icon-pic">
                            <img class="img-fluid" src="{{ asset('images/video-ad.png') }}">

                        </div>
                    

                    
                </div>

                {{-- Social Media Service ------------------------------------------------- --}}
                <div class="row mt-5" id="social-media-service">
                   
                        <div class="col-md-10 col-sm-12">
                            <h3>تولید و مدیریت شبکه های اجتماعی</h3>
                            <hr class="w-25">
                            <p>به جز داشتن وب‌سایت که از نظر ما بسیار برای کسب و کارها مفیده بسترهای بسیار مناسب دیگری هم وجود داره که با برنامه ریزی درست میشه به سرعت در اونها جایگاه خوبی پیدا کرد و به دنبال مخاطب مد نظرمون بگردیم.</p>
                            <p class="mb-4">این بسترها امکانات بسیار خوبی هم برای کسب و کارها فراهم میکنن فقط لازمهقبل از ورود به هر شبکه اجتماعی بررسی کنیم آیا این فضا برای شما مناسبه یا خیر.</p>
                            <div>
                                <a class="secondary-btn" href="{{ route('home.order') }}">سفارش</a>
                                <a class="secondary-btn" href="https://wa.me/+989981713807">مشاوره رایگان</a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-12 icon-pic">
                            <img class="img-fluid" src="{{ asset('images/social-media.png') }}">

                        </div>
                   

                    <div class="row mt-5 mb-4 no-p-left">
                        <h4 class="text-center">انواع خدمات شبکه های اجتماعی</h4>


                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>اینستاگرام</h5>
                                <ul>
                                    <li>
                                        <p>تولید محتوا و مدیریت صفحه اینستاگرام با در نظر گرفتن الگوریتم برنامه و جذب مخاطب</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>لینکدین</h5>
                                <ul>
                                    <li>
                                        <p>تولید محتوا و مدیریت صفحه لینکدین و جذب مخاطب ( معمولا مخاطبین شرکتی یا اشخاصی که با کسب و کار ارتباط دارند)</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>آپارات</h5>
                                <ul>
                                    <li>
                                        <p>تولید محتوا ویدئویی با ساختن صفحه اختصاصی و هشتگ گذاری صحیح در پلتفرم آپارات ( محتوا ترجیحا آموزشی )</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>یوتیوب</h5>
                                <ul>
                                    <li>
                                        <p>تولید محتوای ویدئویی با ساختن صفحه اختصاصی و جذب مخاطب و در نتیجه کسب درآمد از این پلتفرم ( ترجیحا محتوا سرگرمی یا آموزشی )</p>
                                    </li>
                                </ul>

                            </div>

                        </div>


                    </div>
                </div>

                {{-- Advertise Campaign Service ------------------------------------------------- --}}
                <div class="row mt-5" id="advertise-campaign-service">
                    
                        <div class="col-md-10 col-sm-12">
                            <h3>کمپین تبلیغاتی</h3>
                            <hr class="w-25">
                            <p class="mb-4">بهترین راه دیده شدن و اعلام عمومی ایده یا افکار نو طراحی کمپین تبلیغاتیه، اگر کمپینها با فکر درست ایده پردازی و اجرا بشن نتیجه های فوق العاده عجیبی در بر دارن.
                                بسیاری از کمپین های تبلیغاتی دیدیم یا حتی شنیدیم که تا سال ها در ذهن ما باقی میمونن و فراموش نمیشن.
                                </p>
                            <div>
                                <a class="secondary-btn" href="https://wa.me/+989981713807">مشاوره رایگان</a>
                                <a class="secondary-btn" href="{{ route('home.projects') }}">نمونه کار</a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-12 icon-pic">
                            <img class="img-fluid" src="{{ asset('images/campaign.png') }}">

                        </div>
                   

                    <div class="row mt-5 mb-4 no-p-left">
                        <h4 class="text-center">انواع کمپین تبلیغاتی</h4>


                        <div class="col-md-4 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>کمپین تجاری</h5>
                                <ul>
                                    <li>
                                        <p>به صورت معمول تبلیغاتی که در تلویزیون یا این دست بسترها میبینید</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>کمپین مصرف کننده</h5>
                                <ul>
                                    <li>
                                        <p>این نوع کمپین فقط روی امتیازاتی که مصرف کننده دریافت میکنه تمرکز داره</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>کمپین محصول</h5>
                                <ul>
                                    <li>
                                        <p>تمرکز بیش از حد روی محصول و ویژگی های منحصر به فرد از نوع کمپین محصوله</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>کمپین برند</h5>
                                <ul>
                                    <li>
                                        <p>برندها همیشه سعی دارند خودشون رو در ذهن مخاطبان حک کنن و از این کمپین بهره میبرن</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>کمپین مشارکتی</h5>
                                <ul>
                                    <li>
                                        <p>معمولا در این نوع کمپین ها دو یا چند برند با همکاری هم روی ایده خاص و مشترک تمرکز میکنند</p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="col-12 service-description">
                                <h5>کمپین دیجیتالی</h5>
                                <ul>
                                    <li>
                                        <p>در فضای مجازی معمولا موضوع یا ایده خاصی دست به دست میشه، این دقیقا کمپین دیجیتالیه</p>
                                    </li>
                                </ul>

                            </div>

                        </div>


                    </div>
                </div>

                {{-- Digital Marketing Service ------------------------------------------------- --}}
                <div class="row mt-5" id="digital-marketing-service">
                    
                        <div class="col-md-10 col-sm-12">
                            <h3>برندینگ و مارکتینگ</h3>
                            <hr class="w-25">
                            <p>این دو عبارت فرآیندهایی هستن که بخش اصلی هر کسب و کاری محسوب میشه اما تعاریف و نوع عملکرد اون ها متاسفانه خیلی در کشورمون تعریف نشده به همین دلیل بسیاری از مدیران کسب و کارها تعریفی از ماهیت این دو موضوع مهم ندارن.</p>
                            <p class="mb-4">برندینگ فرآیند خلق برند یا کسب و کاره که دارای هویت منحصر به فرده و مارکتینگ دانش ارتباط با مشتری و بازاره و فرآیند مدیریتی محسوب میشه.</p>
                            <p class="mb-4">ما در به‌نگاران تلاش میکنیم با دانش فنی بسیار بالای تیم متخصص به شما در هر دو موضوع کمک کنیم.</p>

                            <a class="secondary-btn" href="https://wa.me/+989981713807">مشاوره رایگان</a>

                        </div>

                        <div class="col-md-2 col-sm-12 icon-pic">
                            <img class="img-fluid" src="{{ asset('images/digital-marketing.png') }}">

                        </div>
                   

                    
                </div>

                
                
            </div>

        </div>
    </main>
@endsection

@section('js')
@endsection
