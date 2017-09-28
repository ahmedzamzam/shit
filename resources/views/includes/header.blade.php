
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ Route('index') }}"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive;"  href="{{ Route('index') }}">الرئيسية</a></li>
                <li class="dropdown">
                    <a dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive; "  href="#" class="dropdown-toggle" data-toggle="dropdown">الخدمات <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive;"  href="{{ Route('devweb') }}">تصميم ويرمجه المواقع</a></li>
                        <li><a dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive;" href="{{ Route('adcamp') }}">حملات تسويقيه</a></li>
                        <li><a dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive;"  href="{{Route('managesm')}}">اداره صفحات التواصل الاجتماعى</a></li>
                        <li><a dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive;"  href="{{ Route('cusdata') }}">داتا عملاء</a></li>
                        <li><a dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive;"  href="{{ Route('vis') }}">الفديو التسويقى</a></li>
                        <li><a dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive;"  href="{{ Route('ph') }}">التصوير الفتغرافى</a></li>
                        <li><a dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive; " href="{{ Route('mob') }}">رسائل موبيل اعلانيه</a></li>
                        <li class="divider"></li>
                        <li><a  dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive; " href="{{ Route('comiden') }}">هويه الشركه</a></li>
                    </ul>
                </li>
                <li><a dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive; "  href="{{Route('aboutus')}}">من نحن </a></li>
                <li><a dir="rtl"   style="font-family: 'Baloo Bhaijaan', cursive; "  href="{{Route('jobapp')}}">وظائف</a></li>
                <li><a style="font-family: 'Baloo Bhaijaan', cursive; "   href="{{ Route('contactus') }}">اتصل بنا</a></li>
                <li><a style="font-family: 'Baloo Bhaijaan', cursive; "  href="{{ Route('welcome') }}">تسجيل الدخول</a></li>
            </ul>
        </div>
    </div>
</header><!--/header-->

