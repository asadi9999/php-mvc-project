<?php
header('Content-Type: text/html; charset=utf-8');
 require_once ('controler/connection.php');
 $GetCraetWebPages=GetCraetWebPages($conn);
 $GetDescriptions=GetDescriptions($conn);
 $GetWebPages=GetWebPages($conn);
 $bigProject=bigProjects($conn);
 $NewPosts=NewPosts($conn);
 $GetOurPost=GetOurPost($conn);
 $TeamDescription=OurTeamDescription($conn);
 $OurTems=OurTeam($conn);
 $Getsocial=GetSocial($conn);
 $Questions=Questions($conn);
 $GetQuestions=GetQuestions($conn);
 $DesignBackend=DesignBackend($conn);
 $getFooter=sp_GetFooter($conn)
?>

<html lang="fa-ir" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>توسعه دهنده صفحات وب</title>
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
<!-- header -->
 <!-- header -->
<?php
require_once ('header.php')
?>
<!--end header -->
<div class="py-5">
    <section class="container">
        <div class="row align-items-center" style="height: 550px;">
            <div class="col-md-6 align-self-center">
                <h2 class="display-5 mb-4 ">ساخت <span class="text-warning"> <?= $GetCraetWebPages['title'] ?>  </span>واکنشگرا</h2>
                <p class="lead mb-4 text-muted"> <?= $GetCraetWebPages['text'] ?> </p>
                <div class="text-xl-left text-md-center text-sm-center">
                    <button class="btn btn-primary m-lg-1" style="width: 95px;float:right;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">شروع</button>

                </div>
            </div>
            <div class="col-md-6">
                <img src="<?= $GetCraetWebPages['img'] ?>" alt="programmer" class="img-fluid">
            </div>
        </div>
    </section>
</div>
<!-------------------------------------------------------DesignBackend---------------------------------------------------------------->
<div class="py-5 bg-secondary">
    <section class="container">
        <div class="row align-items-center align-items-center" style="height: 550px;">
            <div class="col-md-6 align-self-center">
                <h2 class="display-5 mb-4 ">طراحی <span class="text-warning"> <?= $DesignBackend['title'] ?>  </span></h2>
                <p class="lead mb-4 text-light fs-18"> <?= $DesignBackend['text'] ?> </p>
            </div>
            <div class="col-md-6 align-self-center">
                <img src="<?= $DesignBackend['video'] ?>"style="width: 100%;height: 95%;" class="shadow">
            </div>
        </div>
    </section>
</div>
<!---->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 display-3" id="staticBackdropLabel"> <?= $GetCraetWebPages['title'] ?> </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="">
                    <?= $GetCraetWebPages['text'] ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="float: left;">بستن</button>

            </div>
        </div>
    </div>
</div>
<!-- Features -->
<div class="py-4" style="background-color: #ececec;" id="Features">
    <section class="container">
        <!-- <div class="py-4">
          <img src="img/animated-welcome-image-0279.gif" alt="" class="img-fluid" style="width: 75%;height: 30%;">
        </div> -->
        <h2 class="display-4 text-center mt-5"><?= $GetDescriptions['title'] ?></h2>
        <p class="text-muted mb-5 lead"><?= $GetDescriptions['text'] ?></p>
        <div class="row g-4 pb-5 justify-content-center">
            <?php foreach ($GetWebPages as $getwebpage): ?>
            <div class="col-xl-4 col-md-6 text-center align-self-center">
                <div class="card text-center p-5">
                    <div class="card-body">
                        <img src="<?= $getwebpage['img'] ?>">

                        <h5 class="card-title mb-2"><?= $getwebpage['icon_name'] ?></h5>
                        <p class="card-text lead text-muted text-center justify-content-start" style="font-size: 14px;"><?= $getwebpage['icon_text'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>
<!-- react -->
<div class="py-5" style="background-color: #202020;">
    <section class="container">

        <div class="row justify-content-end align-items-center" style="height: 550px;">

            <div class="col-md-6">
                <img src="img/Developer activity-rafiki.svg" alt="programmer" class="img-fluid">
            </div>
            <div class="col-md-6 align-self-center">
                <h2 class="display-6 mb-4 "><span style="color: #ffffff;">reactمناسب</span> <span class="text-secondary">برای </span>

                    <span class="text-danger display-5"><?= $bigProject['title'] ?></span>

                </h2>
                <p class="lead mb-4 text-light" style=""><?= $GetCraetWebPages['text'] ?></p>
                <div class="text-xl-left text-md-center text-sm-center">
                    <button style="width: 122px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Reactdiscriptions">
                        بیشتر...
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </section>
</div>
<!-- Modal -->
<div class="modal fade" id="Reactdiscriptions" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel"><?= $bigProject['title'] ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><?= $bigProject['text'] ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
            </div>
        </div>
    </div>

</div>
<!-- posts -->
<div class="py-4" id="ourpost">
    <main class="container">
        <h2 class="display-4 text-center mt-5">
            <?= $NewPosts['title'] ?>
        </h2>
            <?= $NewPosts['text'] ?>
        <p class="text-muted mb-5 lead"></p>
        <div class="row ">
            <?php foreach ($GetOurPost as $row): ?>
            <div class="col-lg-4 ">
                <div class="mb-5" style="width: 18rem;">
                    <div class="card-body shadow h-100 ">

                        <img src="<?= $row['img'] ?>" class="img-fluid">
                        <h5 class="card-title text-muted text-center mt-3"><?= $row['title'] ?></h5>
                        <p class="card-text px-3 mt-3 text-truncate"><?= $row['text'] ?></p>
                        <?= $row['more'] ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
</div>
<!-- our team -->
<div class="py-4" style="background-color: #f3f3f3;" id="ourteam">
    <div class="container">
        <h2 class="display-4 text-center mt-5">
            <?= $TeamDescription['title'] ?>
        </h2>
        <p class="text-muted mb-5 lead"><?= $TeamDescription['text'] ?></p>
        <div class="row">
            <?php foreach ($OurTems as $ourteam):  ?>
            <div class="col-lg-3">
                <div class="mb-5" style="width: 18rem;">
                    <div class="card-body text-center">
                        <img src="<?= $ourteam['img'] ?>" alt="" class="img-fluid mb-4 rounded-circle border p-2 w-45 ">
                        <h5 class="card-title text-muted mb-3"><?= $ourteam['name'] ?></h5>
                        <p class="card-text text-center"><?= $ourteam['text'] ?></p>
                        <ul class="list-unstyled d-flex justify-content-center">
                            <?php foreach ($Getsocial as $row):  ?>
                            <li>
                                <a href="#" class="card-text mb-3 text-muted">
                                    <img src="<?= $row['logo'] ?>"class="img-fluid w-50">
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>

</div>
<!-- accordion -->

<div class="py-3" style="background-color: #f3f3f3;">
    <hr>

    <div class="p-3">
        <h2 class="display-4 text-center mt-5"> <?= $Questions['title'] ?> </h2>
        <p class="text-muted mb-5 lead"><?= $Questions['title'] ?></p>

    </div>

    <div class="accordion" id="accordionExample">
        <?php foreach ($GetQuestions as $getQuestion): ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <?= $getQuestion['title'] ?>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p><?= $getQuestion['text'] ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>

<!-- contact us -->
<div class="py-4" id="contactus">
    <section class="container">
        <div class="p-3">
            <h2 class="display-4 text-center mt-5">تماس با ما</h2>
            <p class="text-muted mb-5 lead">فرم زیرراپرکنیدونظرات وپیشنهادات خود را بامادرمیان بگذارید هرگونه پیشنهادیاانتقادی هست درقسمت نظرات وپیشنهادت بنویسیددراسرع وقت به ایمیل شماپیام می دهم...ازاینکه طراحی سایت خودرابه ما می سپارید به خود میبالیم... </p>
            <div class="row">
                <div class="col-md-6">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="rounded bg-light p-3">
                                <svg class="text-primary py-2" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"></path>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                </svg>
                                <h2 class="display-5">آدرس</h2>
                                <p>تهران- نارمک-شماره87878</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rounded bg-light p-3">
                                <svg class="text-primary py-2" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
                                </svg>
                                <h2 class="display-5">ایمیل آدرس</h2>
                                <p>info@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rounded bg-light p-3">
                                <svg class="text-primary py-2" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>

                                </svg>
                                <h2 class="display-5">تماس باما</h2>
                                <p>0098-214564654654-9</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rounded bg-light p-3">
                                <svg class="text-primary py-2" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"></path>
                                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"></path>

                                </svg>
                                <h2 class="display-5">ساعات تماس</h2>
                                <p>از9صبح تا5عصر</p>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-6">
                    <form class="bg-light p-3 rounded" style="height: 100%;">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">آدرس ایمیل</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">آدرس ایمیل شمامحفوظ است</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">پسورد</label>
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
                        <button type="submit" class="btn btn-primary" style="float:left;">ارسال</button>
                    </form>
                </div>
            </div>
        </div></section>
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