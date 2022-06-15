@extends('home.layouts.master')

@section('loader')
    @include('home.sections.loader')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center  content-min-height">
            <div class="col-11 col-sm-10 col-md-10 col-lg-12 col-xl-11 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="_card_  px-0 pt-4 pb-0 mt-3 mb-3">
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>خدمات</strong></li>
                            {{-- comment --}}
                            {{-- <li id="personal"><strong>زمان و مکان</strong></li> --}}
                            <li id="payment"><strong>پرداخت</strong></li>
                        </ul>
                        <!-- fieldsets -->
                        <?php

                        $getParents = App\Models\Category::where('parent_id', 0)
                            ->with('children', 'attributes')
                            ->get();
                        $getChildren = App\Models\Category::where('parent_id', '!=', 0)
                            ->with('attributes', 'tagCategories')
                            ->get();
                        ?>
                        <fieldset>

                            <div class="col-12">
                                <button type="button" id="modalBtn" class="secondary-btn w-100"> افزودن آدرس</button>


                                <!-- The Modal -->
                                <div id="theModal" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <div class="modal-body pb-3">
                                            <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. آدرس
                                                شما
                                                باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                            <div id="addressForm form-control">
                                                <div class="form-group">
                                                    <label for="userAddress">آدرس</label>
                                                    <input type="text" id="addresses1" name="addresses"
                                                        class="form-control" placeholder="تهران، خیابان ۹ شرقی...">
                                                </div>
                                                <div name="map" id="map" style="height: 200px"></div>
                                                <button id="SubmitForm" class="secondary-btn w-100">ذخیره</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group" dir="">
                                    <label class='float-right mt-4 mb-2 custom-lable' for="state">آدرس های ثبت
                                        شده</label>
                                    <div class="form-contorol">


                                        <select id="userAddresses" runat="server" class="form-control" name="state">
                                            @foreach ($user->addresses as $address)
                                                <option class="form-group" value="{{ $address->address }}">
                                                    {{ $address->address }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-contorol">
                                        <label class='float-right mt-4 mb-2 custom-lable' for="state">آدرس انتخابی
                                            شما</label>
                                        <input type="text" id="currentAddress" class="form-control" disabled>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class=' mt-4 mb-2 custom-lable d-block text-right' for="data-picker"> انتخاب
                                                    تاریخ </label>
                                                <div class="input-group date-input">
                                                    <span class="input-group-text" id="dtp1"><i
                                                            class="fas fa-calendar-alt"></i></span>
                                                    <input id="date" type="text" class="form-control text-center"
                                                        placeholder="انتخاب تاریخ" data-name="dtp1-text" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 id="heading">انتخاب خدمات</h2>
                            </select>
                            <div class="form-card">
                                <div class="row">
                                    <div class="tabs">

                                        @foreach ($getParents as $category)
                                            <div class="tabby-tab">
                                                <input type="radio" id="radio{{ $category->id }}" name="tabby-tabs"
                                                    checked>
                                                    {{-- custom-lable --}}
                                                <label class="projects-btn mx-3 ms-md-2 text-truncate"
                                                    for="radio{{ $category->id }}">{{ $category->name }}</label>
                                                <div class="tabby-content">
                                                    <div class="col-12 d-flex d-flex justify-content-center  mt-5">
                                                        <div class="col-12 col-md-10">
                                                            <div
                                                                class="row  d-flex justify-content-center pricing-box-Shadow">
                                                                <div class="col-12    ">
                                                                    <select id="select"
                                                                        class="form-select my-5 mx-auto w-50 w-lg-25">
                                                                        <option class="select"
                                                                            id="{{ $category->id }}">انتخاب
                                                                            پکیچ ها</option>

                                                                        @foreach ($getChildren as $child)
                                                                            @if ($child->parent_id == $category->id)
                                                                                <option id="{{ $child->parent_id }}"
                                                                                    value="{{ $child->id }}">
                                                                                    {{ $child->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="col-12">
                                                                        <div id="{{ $category->id }}"
                                                                            class="row">
                                                                            <h6 class="mx-auto d-md-none mt-3 ">حالت دوربین
                                                                            </h6>
                                                                            <hr class="aaa w-50 d-md-none mb-4">

                                                                            <div
                                                                                class="col-10 col-md-6  col-lg-4 bg-secendory">
                                                                                <div class=" d-md-flex flex-column d-none">
                                                                                    <h6 class="mx-auto ">حالت دوربین
                                                                                    </h6>
                                                                                    <hr class="aaa w-50 mx-auto mt-0">
                                                                                </div>

                                                                                <div id="push{{ $category->id }}"
                                                                                    class="form-check m-2 ">

                                                                                </div>


                                                                            </div>




                                                                            <h6 class="mx-auto d-md-none mt-3">مدت زمان
                                                                                درخواستی
                                                                            </h6>
                                                                            <hr class="aaa w-50 d-md-none mb-4">

                                                                            <div class="col-10 col-md-6  col-lg-4  ">


                                                                                <div class="d-md-flex flex-column d-none ">
                                                                                    <h6 class="mx-auto "> مدت زمان
                                                                                        درخواستی</h6>
                                                                                    <hr class="aaa w-50 mx-auto mt-0">
                                                                                </div>



                                                                                <div id="pushHour{{ $category->id }}"
                                                                                    class="1 form-check m-1">
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
                                                                                <div id="pushOptionAttr{{ $category->id }}"
                                                                                    class="pushOptionAttr-customMargin"
                                                                                    {{-- class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start  custom-border mt-md-4 mt-lg-0" --}}>

                                                                                </div>


                                                                            </div>



                                                                            <h6 class="mx-auto d-md-none mt-3">ویژگی ها
                                                                            </h6>
                                                                            <hr class="aaa w-50 d-md-none mb-4">
                                                                            <div class="d-block">

                                                                                <div class=" d-md-flex flex-column d-none ">
                                                                                    <h6 class="mx-auto mt-3">ویژگی ها
                                                                                    </h6>
                                                                                    <hr class="aaa w-25 mx-auto mt-0">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-12 col-md-6  col-lg-12  text-justify mt-3 d-flex margin-order-2 ">

                                                                                <div id="pushTags{{ $category->id }}"
                                                                                    class=" d-xs-none d-lg-flex pushTags-customMargin">
                                                                                </div>

                                                                                <!-- Checked checkbox -->


                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <button id="add{{ $category->id }}"
                                                                    class="button  d-md-block custom-margin-pricing  text-center mx-auto   w-Custom-50 w-50"
                                                                    role="button "> افزودن به سبد خرید</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button custom-pricing-margin-btn  firstBtn"
                                value="ادامه" />
                        </fieldset>
                        {{-- <fieldset>
                            <h2 id="heading"> آدرس و تاریخ</h2>
                            <hr class="aaa">
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-md-6 col-12 ">
                                        <div class="well">
                                            <div class="row">

                                                <div class="col-12">
                                                    <div class="form-group" dir="ltr">
                                                        <label class='float-right mt-4 mb-2 gg' for="state">آدرس های ثبت
                                                            شده</label>
                                                        <div class="form-contorol">
                                                            <select id="userAddresses" runat="server" class="form-control"
                                                                name="state">
                                                                @foreach ($user->addresses as $address)
                                                                    <option class="form-group"
                                                                        value="{{ $address->address }}">
                                                                        {{ $address->address }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group" dir="ltr">
                                                        <label class='float-right mt-4 mb-2 gg' for="state">:آدرس انتخابی
                                                            شما</label>
                                                        <div class="form-contorol">
                                                            <input type="text" id="currentAddress" class="form-control"
                                                                disabled>
                                                        </div>





                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="col-12 w-100 text-right">

                                                                <label class=' mt-4 mb-2 gg' for="data-picker">انتخاب
                                                                    تاریخ:</label>
                                                            </div>
                                                            <div class="input-group date-input">
                                                                <span class="input-group-text" id="dtp1"><i
                                                                        class="fas fa-calendar-alt"></i></span>
                                                                <input id="date" type="text"
                                                                    class="form-control text-center"
                                                                    placeholder="انتخاب تاریخ" data-name="dtp1-text">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>




                                            </div>
                                            <div class="col-md-6 col-12 ">
                                                <div id="map" class="map-responsive">

                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                            </div>


                                    <input type="button" name="next" id="giveInformation" class="next action-button mt-5 "
                                        value="Next" />
                                    <input type="button" name="previous" class="previous action-button-previous mx-2  mt-5 "
                                        value="Previous" />
                        </fieldset> --}}
                        <fieldset>

                            <div id="dynamic-content" class="row mx-auto">
                                {{-- Company User Information --}}
                                {{-- User Orders Content --}}
                                <div id="order" class="row tab_content">
                                    <h4>سفارش های شما</h4>
                                    <div class="footer-line"><span></span></div>
                                    <div id="productBox" class="col-md-12">
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
                                                    <div class="col col-1" data-label="هزینه پکیج">۲٬۵۰۰٬۰۰۰ تومان
                                                    </div>
                                                    <div class="col col-2" data-label="ایاب و ذهاب">۲۰۰٬۰۰۰ تومان
                                                    </div>
                                                    <div class="col col-3" data-label="خدمت اضافه">۳۰۰٬۰۰۰ تومان</div>
                                                    <div class="col col-4" data-label="مبلغ کل">۳٬۰۰۰٬۰۰۰ تومان</div>
                                                    <div class="col col-5" data-label="وضعیت سفارش">در حال انجام</div>
                                                </li>
                                            </ul>
                                            <button class="secondary-btn">چاپ فاکتور</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span>جمع کل پرداختی شما</span> <input id="finalPricecontent" value="0"
                                        class="text-danger form-control my-3 " disabled>
                                </div>
                                <input type="button" name="previous" class="info-btn mx-auto w-50 " value="پرداخت" />
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous mt-3  "
                                value="بازگشت" />
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
        const dtp1Instance = new mds.MdsPersianDateTimePicker(document.getElementById('dtp1'), {
            targetTextSelector: '[data-name="dtp1-text"]',
            targetDateSelector: '[data-name="dtp1-date"]',
            persianNumber: true,
            isGregorian: false,
            disableBeforeToday: true,


        });

        dtp1Instance.setDatePersian(1401, 03, 18);
        var lat = 35.699739;
        var lng = 51.338097;
        var getId = @json($user);

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


        var marker = L.marker([32.4279, 53.6880]).addTo(map).openPopup();
        map.on('click', function(e) {
            map.removeLayer(marker);
            marker = new L.marker(e.latlng).addTo(map);
            lat = marker._latlng.lat;
            lng = marker._latlng.lng;
            console.log(lat, lng);
        });


        $(document).ready(function() {
            var current_fs, next_fs, previous_fs; //fieldsets
            var address;
            var opacity;
            var obj = {};
            var totalProducts = [];
            var totalPrice = 0;
            var calculate = [];
            var tagCalculate = [];
            var trigger = [];
            var tagTrigger = [];
            var tagPriceResult = 0;
            var attribuePriceResult = 0;
            var objArray = [];
            var current = 1;
            var getChildreName;
            var data = [];
            var price = [];
            var tagPrice = [];
            var hour = [];
            var quantity = [];
            var tags = [];
            var date = 0;
            var steps = $("fieldset").length;
            setProgressBar(current);



            $("#SubmitForm").click(function(event) {
                console.log($('#addresses1').val());
                event.preventDefault();



                $.post("{{ route('addresses.store') }}", {

                    '_token': "{{ csrf_token() }}",
                    'address': $('#addresses1').val(),
                    'user_id': "{{ $user->id }}",
                    'lat': lat,
                    'lng': lng
                }, function(response, status) {
                    console.log(status);
                    if (status == "success") {

                        let getAddress = $('#addresses1').val();
                        console.log(getAddress);
                        $('#userAddresses').append($('<option/>', {
                            text: getAddress
                        }));
                    }

                }).fail(function(response) {

                    console.log(response);
                })

            });


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

        let attributes = @json($getChildren);
        let parents = @json($getParents);

        parents.forEach(element => {

            $("#radio" + element.id).change(function() {
                $("#push" + element.id).empty();
                $("#pushHour" + element.id).empty();
                $("#pushOptionAttr" + element.id).empty();
                $("#pushTags" + element.id).empty();
            });

        });

        $("select").change(function() {

            $("#currentAddress").val($("#userAddresses").children("option:selected")
                .val());
            address = $("#currentAddress").val();
            Object.assign(obj, {
                userAddress: address
            })
            console.log(obj);

            obj = {};
            var getChildrenId = $(this).children(":selected").attr("id");
            getChildreName = $(this).children(":selected").text();
            trigger = [];
            tagTrigger = [];
            $("#push" + getChildrenId).empty();
            $("#pushHour" + getChildrenId).empty();
            $("#pushOptionAttr" + getChildrenId).empty();
            $("#pushTags" + getChildrenId).empty();
            var getId = $(this).children("option:selected").val();
            attributes.forEach(element => {
                let getAttributes = [];
                if (element.id == getId) {
                    element.tag_categories.forEach(element => {
                        tagTrigger.push(element);
                        console.log(tagTrigger);
                        let PushTagsInput = $("<input/>", {
                            class: "form-check-input float-right-checkbox",
                            type: "checkbox",
                            id: `Tagcheckbox${element.id}`
                        });
                        let PushTagsLabel = $("<label/>", {
                            value: element.id,
                            text: element.name + "(" + element.price + ")",
                            class: "form-check-label float-right-checkbox",
                            id: `Taglabel${element.id}`
                        }).addClass('order-margin ml-5 order-margin2');
                        $("#pushTags" + getChildrenId).append(PushTagsInput,
                            PushTagsLabel, "<br/>");
                    });
                    element.attributes.forEach(element => {

                        trigger.push(element);
                     
                        let createAttr = $("<label/>", {
                            value: element.id,
                            id: `attributeLabel${element.id}`,
                            text: element.name + "(" + element.price + ")"
                        }).addClass('mt-2');
                        let createCheckBox = $("<input/>", {
                            type: "checkbox",
                            id: `AttributeCheckbox${element.id}`
                        }).addClass(
                            'form-check-label float-right-checkbox order-margin ');
                        let hourlabel = $("<label/>", {
                            text: "مدت زمان درخواستی",
                            id: `HourQtyLabel${element.id}`
                        }).addClass('order-marginTop ');
                        let hourInput = $("<input/>", {
                            type: "number",
                            id: `HourQty${element.id}`,
                            name: "tentacles",
                            value: 1,
                            min: "1",
                            max: "10",
                            class: "text-center",
                        }).addClass('margin-hourInput');
                        let hourSpan = $("<span/>", {
                            text: "ساعت"
                        }).addClass(' order-margin');

                        let optionAttrLabel = $("<label/>", {
                            text: "تعداد دوربین",
                            id: `ObjQuantityLabel${element.id}`
                        }).addClass(' mt-2 order-margin-ObjQuantityLabel test ');

                        let optionAttrInput = $("<input/>", {
                            type: "number",
                            class: "text-center h-25 border-custom",
                            id: `ObjQuantity${element.id}`,
                            value: 1,
                            min: "1",
                            max: "10"
                        }).addClass(' float-left ');

                        $("#push" + getChildrenId).append(createCheckBox,
                            createAttr,
                            "<br/>");
                        $("#pushHour" + getChildrenId).append(hourlabel, hourInput,
                            hourSpan, "<br/>");
                        $("#pushOptionAttr" + getChildrenId).append(optionAttrLabel,
                            optionAttrInput,
                            "<br/>");
                    });

                    data = [];
                    price = [];
                    tagPrice = [];
                    hour = [];
                    quantity = [];
                    tags = [];
                    trigger.forEach(element => {

                        $('#AttributeCheckbox' + element.id).change(function() {
                            var ischecked = $(this).is(':checked');
                            if (ischecked) {
                                console.log(element);
                                data.push(element.name);
                                hour.push($("#HourQty" + element.id).val());
                                price.push(element.price);
                                quantity.push($("#ObjQuantity" + element.id)
                                    .val());


                                $("#HourQty" + element.id).change(
                                    function() {

                                        if ($("#HourQty" + element.id)
                                            .val() <= 0) {
                                            $("#HourQty" + element.id).val(
                                                1);
                                        }

                                        if ($("#HourQty" + element.id)
                                            .val() > 5) {
                                            $("#HourQty" + element.id).val(
                                                5);
                                        }

                                        for (let i = 0; i < data
                                            .length; i++) {

                                            if (data[i] == element
                                                .name) {

                                                hour[i] = $("#HourQty" +
                                                        element.id)
                                                    .val();

                                            }

                                        }

                                    });

                                $("#ObjQuantity" + element.id).change(
                                    function() {

                                        if ($("#ObjQuantity" + element.id)
                                            .val() <= 0) {
                                            $("#ObjQuantity" + element.id)
                                                .val(1);
                                        }

                                        if ($("#ObjQuantity" + element.id)
                                            .val() > 5) {
                                            $("#ObjQuantity" + element.id)
                                                .val(5);
                                        }

                                        for (let i = 0; i < data
                                            .length; i++) {

                                            if (data[i] == element
                                                .name) {

                                                quantity[i] = $(
                                                        "#ObjQuantity" +
                                                        element.id)
                                                    .val();

                                            }

                                        }

                                    });

                            } else if (!ischecked) {
                                for (let i = 0; i < data.length; i++) {
                                    if (data[i] == element.name) {
                                        data.splice(i, 1);
                                        hour.splice(i, 1);
                                        quantity.splice(i, 1);
                                    }
                                }
                            }
                        });
                    });
                    tagTrigger.forEach(element => {
                        $('#Tagcheckbox' + element.id).change(function() {
                            var checkTag = $(this).is(':checked');
                            console.log(element.price);
                            if (checkTag) {
                                tags.push(element.name);
                                tagPrice.push(element.price);
                            } else if (!checkTag) {
                                for (let i = 0; i < tags.length; i++) {
                                    if (tags[i] == element.name) {
                                        tags.splice(i, 1);
                                        tagPrice.splice(i, 1);
                                    }
                                }
                            }
                            console.log(tags, tagPrice);
                        });
                    });
                    obj = {
                        product: getChildreName,
                        attributes: data,
                        AttributePrice: price,
                        hour: hour,
                        quantity: quantity,
                        tags: tags,
                        tagPrice: tagPrice,
                        userAddress: address,
                        date: date
                    }

                    $("#userAddresses").change(function() {

                        $("#currentAddress").val($("#userAddresses").children(
                            "option:selected").val());
                        address = $("#currentAddress").val();
                        Object.assign(obj, {
                            product: getChildreName,
                            attributes: data,
                            AttributePrice: price,
                            hour: hour,
                            quantity: quantity,
                            tags: tags,
                            tagPrice: tagPrice,
                            userAddress: address,
                            date: date
                        });
                        console.log(obj);

                    });
                }
            });
        });

        $("#date").change(function() {
            date = moment(dtp1Instance.getDate(), 'YYYY/MM/DD').locale(
                'fa').format('YYYY/MM/DD');
            Object.assign(obj, {
                product: getChildreName,
                attributes: data,
                AttributePrice: price,
                hour: hour,
                quantity: quantity,
                tags: tags,
                tagPrice: tagPrice,
                userAddress: address,
                date: date
            });
        });


        parents.forEach(element => {

            $("#add" + element.id).click(function(event) {
                event.preventDefault();
                if (obj.date == null || obj.date == 0) {

                    alert("لطفا تاریخ را انتخاب کنید");

                } else {

                    calculate = [];
                    attribuePriceResult = 0;
                    tagCalculate = [];
                    tagPriceResult = 0;

                    let rnd = Math.floor((Math.random() * 1000000) + 1);
                    console.log(rnd);

                    $("#productBox").append(`<ul id=${rnd}>` +
                        `<li id=ProductLocation${rnd}> <span class='text-secondary'> آدرس <hr>` +
                        `<li id=ProductSpecAttr${rnd}><span class='text-secondary'>خدمات ویژه  <hr> ` +
                        `<li id=ProductDetails${rnd}> <span class='text-secondary'>ویژگی ها <hr>` +
                        `<li id=ProductPrice${rnd}> <span class='text-secondary'> جمع کل <hr>` +
                        `<li id=ProductName${rnd}> <span class='text-secondary'> نوع خدمت <hr>` +
                        `<li id=ProductDate${rnd}> <span class='text-secondary'>تاریخ<hr>` +
                        `<li id=deleteProduct${rnd}> <span class='text-secondary'> عملیات <hr> <button id=deleteProduct${rnd} class='text-danger secondary-btn cutom-color'> حذف خدمت </button>`
                    );


                    for (let i = 0; i < obj.attributes.length; i++) {
                        event.preventDefault();
                        console.log(obj.attributes[i] + obj.AttributePrice[i] + "ساعت:" + obj
                            .hour[
                                i] + "تعداد" + obj.quantity[i]);
                        var counter = 0;

                        for (let x = 0; x < obj.quantity[i]; x++) {

                            if (counter == 0) {

                                calculate.push(obj.AttributePrice[i]);

                            } else {
                                let discount = (obj.AttributePrice[i] * 15) / 100;
                                calculate.push(obj.AttributePrice[i] - discount);
                            }

                            attribuePriceResult = calculate.reduce((total, number) => total +
                                number, 0);
                            counter++;
                            console.log(calculate, attribuePriceResult);


                        }

                        obj.AttributespriceDetails = calculate;
                        obj.attributesPriceResult = attribuePriceResult;


                        let productDetails = $("<div/>", {

                            text: " ویژگی " + obj.attributes[i] + " ساعت: " + obj.hour[
                                    i] +
                                " تعداد: " + obj.quantity[i]


                        }).addClass('text-right  text-Cutom-right');

                        $("#ProductDetails" + rnd).append(productDetails);
                    }
                    alert("با موفقیت به سبد خرید اضافه شد")
                    for (let i = 0; i < obj.tags.length; i++) {

                        tagCalculate.push(obj.tagPrice[i]);
                        console.log(tagCalculate);
                        tagPriceResult = tagCalculate.reduce((total, number) => total + number,
                            0);
                        obj.tagPriceDetails = tagCalculate;
                        obj.tagPriceResult = tagPriceResult;

                        console.log(tagPriceResult);
                        let productSpecAttr = $("<h6/>", {

                            text: obj.tags[i]

                        });

                        $("#ProductSpecAttr" + rnd).append(productSpecAttr);

                    }

                    obj.finalPriceThisProductIs = tagPriceResult + attribuePriceResult;

                    console.log(obj);

                    let productPrice = $("<h6/>", {

                        text: obj.finalPriceThisProductIs,
                        id: "price" + rnd

                    });

                    $("#ProductPrice" + rnd).append(productPrice);

                    let productName = $("<h6/>", {

                        text: obj.product

                    });

                    let productDate = $("<h6/>", {
                        text: obj.date
                    });

                    $("#ProductDate" + rnd).append(productDate);

                    let productAddress = $("<div/>", {
                        text: obj.userAddress
                    });

                    $("#ProductLocation" + rnd).append(productAddress);

                    $("#ProductName" + rnd).append(productName);

                    totalProducts.push(rnd);
                    console.log(totalProducts);

                    totalProducts.forEach(element => {
                        event.preventDefault();
                        $("#deleteProduct" + element).click(function(event) {
                            totalPrice = totalPrice - $("#price" + element)
                                .text();
                            $(this).parent().remove();
                            $("#finalPricecontent").val(totalPrice);
                            event.preventDefault();
                        });

                    });



                    totalPrice += obj.finalPriceThisProductIs;
                    console.log(totalPrice);

                    $("#finalPricecontent").val(totalPrice);

                    event.preventDefault();

                }
            });

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


        // Address Modal --------------------------
        var modal = document.getElementById("theModal");

        // Get the button that opens the modal
        var btn = document.getElementById("modalBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }





        $('add').click(function(event) {

            event.preventDefault();
            console.log(obj);

        });



        let Ostan = document.getElementById("Ostan");
        let Shahrestan = document.getElementById("Shahrestan");
        let Street = document.getElementById("Street");
        let Blvd = document.getElementById("Blvd");
        let PostalCode = document.getElementById("PostalCode");
        let unit = document.getElementById("unit");
        let Plaque = document.getElementById("Plaque");
        let FullAddress = document.getElementById("FullAddress");
        const date = document.getElementById("date");



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
    </script>
@endsection
