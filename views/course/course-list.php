<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/general/fontAwsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general-css.css">
    <link rel="stylesheet" href="../../assets/css/course/course-list.css">
    <title>دینکس | بترین سایت آموزشی</title>
</head>

<body>

    <?php require_once '../template/navbar.php'?>

    <main>
        <?php require_once '../template/modals.php'?>

        <header class="course_header">
            <h1>تمام دوره های دسته برنامه نویسی</h1>
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
                <a href="#" class="course_card">
                    <div class="card_img" style="background-image: url(../../assets/img/CI00.jpg);"></div>
                    <div class="card_content">
                        <p class="card_title">اموزش زبان تخمی دات جی اس به همراه پروژه در تخمستان</p>
                        <div class="card_detail">
                            <div><i class="fas fa-user-alt"></i>کسری حبیب بیگی</div>
                            <div><i class="fas fa-eye"></i>۱۰۲۳</div>
                        </div>
                        <img src="../../assets/img/CB00.svg" class="card_bg"></img>
                    </div>
                    <div class="card_footer">
                        <p><i class="far fa-clock"></i>۱۵ : ۰۰</p>
                        <div class="sale_price">
                            <p>۱۰۰.۰۰۰ <span>تومان</span></p>
                            <p>۵۰.۰۰۰ <span>تومان</span></p>
                        </div>
                    </div>
                    <div class="offer_field">
                        ۵۰%
                        <span>تخفیف</span>
                    </div>
                </a>
                <a href="#" class="course_card">
                    <div class="card_img" style="background-image: url(../../assets/img/CI01.jpg);"></div>
                    <div class="card_content">
                        <p class="card_title">آموزش هک در PHP</p>
                        <div class="card_detail">
                            <div><i class="fas fa-user-alt"></i>کسری حبیب بیگی</div>
                            <div><i class="fas fa-eye"></i>۱۰۲۳</div>
                        </div>
                        <img src="../../assets/img/CB00.svg" class="card_bg"></img>
                    </div>
                    <div class="card_footer">
                        <p><i class="far fa-clock"></i>۱۵ : ۰۰</p>
                        <p>۱۰۰.۰۰۰ <span>تومان</span></p>
                    </div>
                </a>
                <a href="#" class="course_card">
                    <div class="card_img" style="background-image: url(../../assets/img/CI02.jpg);"></div>
                    <div class="card_content">
                        <p class="card_title">آموزش هک در PHP</p>
                        <div class="card_detail">
                            <div><i class="fas fa-user-alt"></i>کسری حبیب بیگی</div>
                            <div><i class="fas fa-eye"></i>۱۰۲۳</div>
                        </div>
                        <img src="../../assets/img/CB00.svg" class="card_bg"></img>
                    </div>
                    <div class="card_footer">
                        <p><i class="far fa-clock"></i>۱۵ : ۰۰</p>
                        <p>۱۰۰.۰۰۰ <span>تومان</span></p>
                    </div>
                </a>
                <a href="#" class="course_card">
                    <div class="card_img" style="background-image: url(../../assets/img/CI04.jpg);"></div>
                    <div class="card_content">
                        <p class="card_title">آموزش هک در PHP</p>
                        <div class="card_detail">
                            <div><i class="fas fa-user-alt"></i>کسری حبیب بیگی</div>
                            <div><i class="fas fa-eye"></i>۱۰۲۳</div>
                        </div>
                        <img src="../../assets/img/CB00.svg" class="card_bg"></img>
                    </div>
                    <div class="card_footer">
                        <p><i class="far fa-clock"></i>۱۵ : ۰۰</p>
                        <p>۱۰۰.۰۰۰ <span>تومان</span></p>
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