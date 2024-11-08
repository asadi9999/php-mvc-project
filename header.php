<!doctype html>
<html lang="fa-ir" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
<body>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">تماس باما</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="bg-light p-3 rounded" style="" action="#">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">آدرس ایمیل</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">آدرس ایمیل شمامحفوظ است..!</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">رمزعبور</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">چک ایمیل</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">توضیحات</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: left;">ارسال</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>

            </div>
        </div>
    </div>
</div>

</body>
</html>
