<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>
    @include('includes.head')

</head>

<body>
<header class="row">
    @include('includes.header')
</header>


<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(img/slider1.png)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(img/slider2.png)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(img/slider3.png)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section><!--/#main-slider-->

<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 dir="rtl"  style="font-family: 'Baloo Bhaijaan', cursive; " >هوية الشركة </h1>
            </div>

        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive; ">من نحن</h3>
            </div>
            <p dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive ; text-align: center ; ">
                خدمتنا تتركز فى خلق الأفكارالجذابة والمبتكرة وأكثر لتصاميم أكثر تفاعلية لجميع أنواع وسائل
                الدعاية والاعلان
                نحن نقدم منتجاتك وخدماتك للسوق المستهدف للوصل لاعلى النتائج المراده للتسويق
                نمتلك فريق عالى من المطورين و المبرمجين و المسوقين لديهم سابقه اعمال حافله بالانجازات الى
                تضمنك لك تحقيق افضل النتائج
            </p>
            <div style="text-align: center">
                <img src="img/" float="center"  alt="">
            </div>
        </div>
    </div>
</div>


<!-- Services -->
<div class="section section-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <i class="icon-globe"></i>
                    <h3 dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive; " >حملات اعلانية كاملة</h3>
                    <p dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive; " >نساعد على اختيار افضل الحملات التسويقيه التى تساعدك على تحقيق افضل النتائج المطلوبهنقوم بتحليل المنافسين بطريقه احترافيهنقوم بوضع خطه العمل سوياا و الاهداف المطلوب الوصول اليها  </p>
                    <a dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive; " href="{{ Route('adcamp') }}" class="btn">اقراء المزيد</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <i class="icon-briefcase"></i>
                    <h3  dir="rtl" style="font-family: 'Baloo Bhaijaan', cursive; " >اداره الصفحات التواصل الاجتماعى</h3>
                    <p dir="rtl"  style="font-family: 'Baloo Bhaijaan', cursive; " >• المساهمة في الرد على التعليقات والرسائل.• انشاء الاعلانات و متابعة الحملة الإعلانية لتحسين ال• إنشاء خطة المحتوى.• إنشاء تصميمات احترافية. • عمل افكار تسويقية مبتكرة. </p>
                    <a  dir="rtl" style="font-family: 'Baloo Bhaijaan', cursive; "  href="{{ Route('managesm') }}" class="btn"> اقراء المزيد </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <i class="icon-phone"></i>
                    <h3  dir="rtl" style="font-family: 'Baloo Bhaijaan', cursive; " >داتا عملاء مصنفة ومحدثة </h3>
                    <p dir="rtl"  style="font-family: 'Baloo Bhaijaan', cursive; " >تشمل الاسم و الاميل و الرقم و البلد بالاضافه الى امكانيه  استخراج الداتا من الى موقع منافس او صفحه فيس بوك او جروب او قنوات الوتس  </p>
                    <a  dir="rtl" style="font-family: 'Baloo Bhaijaan', cursive; "  href="{{ Route('cusdata') }}" class="btn"> اقراء المزيد </a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Services -->


<hr>
<!-- Our Portfolio -->
<div class="section section-white">
    <div class="container">
        <div class="row">
            <div >
                <h1 dir="rtl"  style="font-family: 'Baloo Bhaijaan', cursive;" >اعمالنا السابقة </h1>
            </div>
            <ul class="grid cs-style-3">
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="img/portfolio/4.jpg" alt="img04">
                        <figcaption>
                            <h3>Settings</h3>
                            <span>Jacob Cummings</span>
                            <a href="portfolio-item.html">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="img/portfolio/1.jpg" alt="img01">
                        <figcaption>
                            <h3>Camera</h3>
                            <span>Jacob Cummings</span>
                            <a href="portfolio-item.html">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="img/portfolio/2.jpg" alt="img02">
                        <figcaption>
                            <h3>Music</h3>
                            <span>Jacob Cummings</span>
                            <a href="portfolio-item.html">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="img/portfolio/5.jpg" alt="img05">
                        <figcaption>
                            <h3>Safari</h3>
                            <span>Jacob Cummings</span>
                            <a href="portfolio-item.html">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="img/portfolio/3.jpg" alt="img03">
                        <figcaption>
                            <h3>Phone</h3>
                            <span>Jacob Cummings</span>
                            <a href="portfolio-item.html">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="img/portfolio/6.jpg" alt="img06">
                        <figcaption>
                            <h3>Game Center</h3>
                            <span>Jacob Cummings</span>
                            <a href="portfolio-item.html">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
            </ul>
        </div>
    </div>
</div>
<!-- Our Portfolio -->

<hr>

<!-- Our Clients -->
<div class="section">
    <div class="container">

        <div >
            <h1 dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive;"> العملاء السابقون</h1>
        </div>

        <div class="clients-logo-wrapper text-center row">
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-1.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-2.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-3.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-4.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-5.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-6.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-7.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-8.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-9.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-10.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-11.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-12.jpg" alt="Client Name"></a></div>
        </div>
    </div>
</div>
<!-- End Our Clients -->


            @include('includes.footer')
</body>
</html>