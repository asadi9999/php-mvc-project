<?php
header('Content-Type: text/html; charset=utf-8');
 require_once ('controler/connection.php');
$getFooter=sp_GetFooter($conn);

 ?>
<!doctype html>
<html lang="fa-ir" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>درباره Mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/components/navbar/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel = "logo3" type = "image/png" href = "img/logo3.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo5.png" />
    <link href="style.css"rel="stylesheet"type="text/css">
</head>

<body class="" style="">
<!-- arrow up -->
<a href="#" class="bg-warning rounded-circle text-dark d-flex position-fixed justify-content-center align-items-center opacity-75" style="width: 54px;height: 54px;right: 10px;bottom: 10px;">
    <i class="bi bi-arrow-up">
        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"></path>
        </svg>
    </i>
</a>
<style>
    #navbarColor03 > ul > li > a:hover{
        text-decoration: underline;
        text-decoration-color: red;
        text-decoration-style: solid;
        transition: all 0.5s;
    }
    body{
        font-family: vazir;
        font-size: 11rem;
    }
</style>
<div class="sticky-top bg-info p-2 shadow bg-opacity-95" style="--bs-bg-opacity:0.97;opacity: 0.9;" id="menu-bar">
    <nav class="navbar navbar-expand-lg navbar-light container" style="position: sticky;">
        <div class="container-fluid">
            <span><img src="img/logo5.png" class="border border-1 rounded-circle" style="width: 85px;height: 85px"></span>
            <a class="navbar-brand fs-4" href="#" style="width: 90px;">من یک طراح وب هستم</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Features">خصوصیات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ourpost">پست ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ourteam">تیم ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactus">تماس با ما</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            نمونه کارها
                        </a>
                        <ul class="dropdown-menu bg-info">
                            <li><a class="dropdown-item" href="index.html">فروشگاهی</a></li>
                            <li><a class="dropdown-item" href="#">ورزشی</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">رمز ارزها</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex justify-content-end" style="float: right;right: 0;">
                    <button class="btn btn-primary m-lg-1" style="width: 95px;" data-bs-toggle="modal" data-bs-target="#exampleModal">شروع</button>

                </div>
            </div>
        </div>
    </nav>
</div>
<div class="my-3 p-3">
    <div class="row">
        <div class="col-md-3">
            <p></p>
        </div>
        <div class="col-md-9">
            <p>
                <strong class="text-danger">MySQL چیست ؟</strong>
                یک شرکت سوئدی به نام MySQL AB در ابتدا MySQL را در سال ۱۹۹۴ توسعه داد. شرکت فنی آمریکایی Sun Microsystems پس از خرید MySQL AB در سال ۲۰۰۸، مالکیت کامل را به دست آورد. غول فناوری اوراکل ایالات متحده، در سال ۲۰۱۰ خود Sun Microsystems را به دست آورد و MySQL از آن سال به بعد، متعلق به اوراکل بود.

                همانطور که در بالا اشاره شد، کار با mysql ( مای اس کیو ال) می تواند به عنوان جایگزین SQL Server یا مایکروسافت اکسس استفاده شود. در این صورت باید این پایگاه های داده را به یکدیگر تبدیل کنید.

                با توجه به تعریف کلی، MySQL در واقع یک سیستم مدیریت پایگاه داده‌ای ( database ) است که به صورت رابطه‌ای منبع باز ( open source ) با یک مدل کلاینت – سرور خدمات دهی می‌کند. RDBMS نرم افزاری یا خدماتی است که برای ایجاد و مدیریت بانک‌های اطلاعاتی بر اساس مدل رابطه‌ای استفاده می‌شود. اگر نرم افزار از مدل داده‌های رابطه‌ای پشتیبانی نمی‌کند، فقط آن را DBMS می‌نامند. در ادامه این مقاله از گروه تحریریه‌ی ایران هاست ( ارائه دهنده‌ی ارائه دهنده‌ی خدمات هاست python ) بیایید دقیق‌تر هر اصطلاح را بررسی کنیم:
            </p>
            <p>
                <strong class="text-danger"> بانک اطلاعاتی (Database) چیست؟</strong>
                بانک اطلاعاتی به بیان ساده مجموعه‌ای از داده های ساختار یافته است. برای درک بانک اطلاعاتی به گرفتن سلفی فکر کنید: یک دکمه را فشار می‌دهید و از خود تصویر می‌گیرید. عکس شما داده است و گالری تلفن شما پایگاه داده است. بانک اطلاعاتی مکانی است که در آن، داده‌ها ذخیره و سازماندهی می‌شوند. داده‌های ذخیره شده به صورت تعدادی جدول، سازماندهی می‌شوند. هر جدول به نحوی به دیگر جداول، مربوط می‌شود.
            </p>
            <div class="my-2 p-3 text-center">
                <img src="img/MySQL.png" class="mx-auto w-50">
            </div>

            <p>
                <strong class="text-danger">مدل کلاینت – سرور چیست؟</strong>

                کامپیوتر هایی که نرم افزار RDBMS را نصب و راه اندازی می‌کنند، کلاینت نامیده می‌شوند. هر زمان که نیازمند دسترسی به داده‌ها باشند، به سرور RDBMS متصل می‌شوند. این قسمت “سرور” است.

                MySQL یکی از گزینه‌های مختلف نرم افزار RDBMS است. RDBMS و MySQL به دلیل محبوبیت MySQL اغلب تصور می‌شوند که یکسان نیستند. برای نامگذاری چند برنامه وب بزرگ مانند Facebook ، Twitter ، YouTube ، Google و Yahoo! همه از MySQL برای اهداف ذخیره سازی داده استفاده می‌کنند. اگرچه در ابتدا برای استفاده محدود ایجاد شده است، اما اکنون با بسیاری از سیستم عامل‌های مهم رایانه‌ای مانند Linux ، macOS ، Microsoft Windows و Ubuntu سازگار است.
            </p>
            <p>
                <strong class="text-danger">کاربرد MySQL</strong>
                دیتابیس سرور MySQL جزو یکی از محبوب‌ترین دیتابیس سرورهای دنیا محسوب می‌شود و برندهای بزرگی همانند Facebook و Google از آن بهره برده‌اند. همچنین مجموعه‌ی بزرگ و مهم Wikipedia (مالک وب سایت Wikipedia) نیز برای زیر ساخت پایگاه داده‌ی خود از این دیتابیس سرور، استفاده‌می‌کند.

                می توان گفت که دنیای امروزی دنیای اطلاعات است! تصور کنید فیسبوک چه حجمی از اطلاعات از جمله عکس، فیلم، متن و… دارد، این اطلاعات با استفاده از دیتابیس ذخیره و سازماندهی می شود.

                یادگیری MySQL بسیار آسان است چرا که بسیاری از امکانات پیشرفته را پشتیبانی نمی‌کند و استفاده از آن برای Database های ساده و معمولی، پیشنهاد می‌شود.
            </p>
            <p>
                <strong class="text-danger">تفاوت sql و mysql</strong>
                در ابتدای این بخش باید به این نکته اشاره کنیم که MySQL و SQL یکسان نیستند. توجه داشته باشید که MySQL یکی از محبوب‌ترین نام‌های تجاری نرم‌افزار RDBMS است که مدل کلاینت – سرور را، پیاده سازی می‌کند. بنابراین، چگونه کلاینت و سرور در یک محیط RDBMS ارتباط برقرار می‌کنند؟ آنها از یک زبان خاص استفاده می‌کنند – Structured Query Language  (SQL).

                اگر تاکنون با نامهای دیگری که SQL در آنها وجود دارد مانند PostgreSQL و Microsoft SQL Server روبرو شده‌اید، آنها به احتمال زیاد پایگاه داده‌هایی هستند که از syntax SQL نیز، استفاده می‌کنند. نرم افزار RDBMS اغلب به زبان‌های برنامه نویسی دیگر نوشته شده است، اما همیشه از SQL به عنوان زبان اصلی آن برای تعامل با بانک اطلاعاتی استفاده می‌شود. MySQL خود به زبان C و C ++ نوشته شده است. به کشورهای آمریکای جنوبی فکر کنید، همه آنها از لحاظ جغرافیایی متفاوت هستند و تاریخ‌های مختلفی دارند، اما همه آنها در درجه اول به زبان اسپانیایی صحبت می‌کنند.

                تد کاد (Ted Codd)، دانشمند علوم کامپیوتر، SQL را در اوایل دهه ۱۹۷۰ با یک مدل رابطه مبتنی بر IBM توسعه داد. در سال ۱۹۷۴ بیشتر مورد استفاده قرار گرفت و سریعاً جایگزین زبان‌های قدیمی ISAM و VISAM شد.
            </p>
        </div>
    </div>
</div>


<!-- ...............................................................footer ............................................................-->
<?php
require_once ('footer.php')
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></script>
<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
<script src="/docs/5.0/assets/js/docs.min.js"></script>
</body>
</html>