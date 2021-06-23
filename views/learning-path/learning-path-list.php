<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/general/fontAwsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general-css.css">
    <link rel="stylesheet" href="../../assets/css/learning-path/learning-path-list.css">
    <title>دینکس | بترین سایت آموزشی</title>
</head>

<body>

    <?php require_once '../template/navbar.php'?>

    <main>
        <?php require_once '../template/modals.php'?>

        <header class="course_header">
            <h1>تمامی مسیر های یادگیری</h1>
            <form action="">
                <button type="button" class="MObile_fielter"><i class="fal fa-filter"></i></button>
                <div class="form_group">
                    <input type="text" placeholder="عنوان مورد نظر ...">
                    <button type="submit"><i class="fal fa-search"></i></button>
                </div>
            </form>
        </header>

        <section class="course_main_field">
            <div class="right_field">
                <div class="Mobile_field">
                    <button type="button" class="close_modal"><i class="fal fa-times"></i></button>
                    <form action="">
                        <div>
                            <header class="main_sec_header">
                                <h3 class="filter_header">فیلتر بر اساس قیمت</h3>
                            </header>

                            <div class="filter_iteam">
                                <div>
                                    <input class="inp-cbx" id="FI0" type="radio" name="price_filter"
                                        style="display: none" />
                                    <label class="cbx" for="FI0">
                                        <span>
                                            <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                <polyline points="1 5 4 8 11 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>گرانترین</span>
                                    </label>
                                </div>
                                <div>
                                    <input class="inp-cbx" id="FI1" type="radio" name="price_filter"
                                        style="display: none" />
                                    <label class="cbx" for="FI1">
                                        <span>
                                            <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                <polyline points="1 5 4 8 11 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>ارزان ترین</span>
                                    </label>
                                </div>
                                <div>
                                    <input class="inp-cbx" id="FI2" type="radio" name="price_filter"
                                        style="display: none" />
                                    <label class="cbx" for="FI2">
                                        <span>
                                            <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                <polyline points="1 5 4 8 11 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>رایگان</span>
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div>
                            <header class="main_sec_header">
                                <h3 class="filter_header">فیلتر بر اساس سطح دوره</h3>
                            </header>

                            <div class="filter_iteam">
                                <div>
                                    <input class="inp-cbx" id="FI3" type="radio" name="LVL_filter"
                                        style="display: none" />
                                    <label class="cbx" for="FI3">
                                        <span>
                                            <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                <polyline points="1 5 4 8 11 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>سطح مقدماتی</span>
                                    </label>
                                </div>
                                <div>
                                    <input class="inp-cbx" id="FI4" type="radio" name="LVL_filter"
                                        style="display: none" />
                                    <label class="cbx" for="FI4">
                                        <span>
                                            <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                <polyline points="1 5 4 8 11 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>سطح متوسط</span>
                                    </label>
                                </div>
                                <div>
                                    <input class="inp-cbx" id="FI5" type="radio" name="LVL_filter"
                                        style="display: none" />
                                    <label class="cbx" for="FI5">
                                        <span>
                                            <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                <polyline points="1 5 4 8 11 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>سطح پیرشفته</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit">اعمال فیلتر</button>
                    </form>
                </div>
            </div>
            <div class="left_field">
                <a href="learning-path-details.php" class="VS_field">
                    <div class="img_field" style="background-image: url(../../assets/img/VS00.PNG);">
                        <img src="../../assets/img/VL00.svg" alt="video_logo" title="video_logo">
                    </div>
                    <div class="VS_info">
                        <h3>اموزش برنامه نویسی</h3>
                        <div class="VS_detail">
                            <div><i class="fas fa-user-alt"></i>کسری حبیب بیگی</div>
                            <div><i class="fas fa-eye"></i>۱۰۲۳</div>
                        </div>
                    </div>
                </a>
                <a href="learning-path-details.php" class="VS_field">
                    <div class="img_field" style="background-image: url(../../assets/img/VS00.PNG);">
                        <img src="../../assets/img/VL00.svg" alt="video_logo" title="video_logo">
                    </div>
                    <div class="VS_info">
                        <h3>اموزش برنامه نویسی</h3>
                        <div class="VS_detail">
                            <div><i class="fas fa-user-alt"></i>کسری حبیب بیگی</div>
                            <div><i class="fas fa-eye"></i>۱۰۲۳</div>
                        </div>
                    </div>
                </a>
                <a href="learning-path-details.php" class="VS_field">
                    <div class="img_field" style="background-image: url(../../assets/img/VS00.PNG);">
                        <img src="../../assets/img/VL00.svg" alt="video_logo" title="video_logo">
                    </div>
                    <div class="VS_info">
                        <h3>اموزش برنامه نویسی</h3>
                        <div class="VS_detail">
                            <div><i class="fas fa-user-alt"></i>کسری حبیب بیگی</div>
                            <div><i class="fas fa-eye"></i>۱۰۲۳</div>
                        </div>
                    </div>
                </a>
                <a href="learning-path-details.php" class="VS_field">
                    <div class="img_field" style="background-image: url(../../assets/img/VS00.PNG);">
                        <img src="../../assets/img/VL00.svg" alt="video_logo" title="video_logo">
                    </div>
                    <div class="VS_info">
                        <h3>اموزش برنامه نویسی</h3>
                        <div class="VS_detail">
                            <div><i class="fas fa-user-alt"></i>کسری حبیب بیگی</div>
                            <div><i class="fas fa-eye"></i>۱۰۲۳</div>
                        </div>
                    </div>
                </a>
            </div>
        </section>

    </main>

    <?php require_once '../template/footer.php'?>

    <script src="../../assets/js/general/jquery.js"></script>
    <script src="../../assets/js/general/bootstrap.js"></script>
    <script src="../../assets/js/script/navbar.js"></script>
    <script src="../../assets/js/script/modals.js"></script>
    <script src="../../assets/js/course/course-list.js"></script>

</body>

</html>