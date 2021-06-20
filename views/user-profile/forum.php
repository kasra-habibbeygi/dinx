<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/general/fontAwsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general-css.css">
    <link rel="stylesheet" href="../../assets/css/user-profile/forum.css">
    <title>دینکس | بترین سایت آموزشی</title>
</head>

<body>
    <?php require_once '../template/navbar.php'?>

    <div class="forum_detail_modal">
        <div class="FD_content">
            <header class="main_sec_header">
                <h3>جزئیات تکلیف</h3>
            </header>

            <div class="FD_info">
                <div>
                    <span>نام دوره : </span>
                    <p>آموزش صفر تا صد صراحی وب سایت</p>
                </div>
                <div>
                    <span>نام فصل : </span>
                    <p>یادگیری ماشین</p>
                </div>
                <div>
                    <span>نام درس : </span>
                    <p>یادگیری ماشین</p>
                </div>
                <div>
                    <span>تاریخ ثبت : </span>
                    <p>۱۴۰۰.۰۱.۰۱ ۱۰:۴۵</p>
                </div>
                <div>
                    <span>وضعیت : </span>
                    <p class="green">تایید شده توسط مدیر</p>
                </div>
                <div>
                    <span>لینک : </span>
                    <a href="#" class="blue">لینک مشاهده فروم</a>
                </div>
                <div class="block_content">
                    <span>عنوان سوال : </span>
                    <p>عدم توانایی در دسترسی به سورس کد ها در سایت</p>
                </div>
                <div class="block_content">
                    <span>متن سوال : </span>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای لورم ایپسوم متن
                        ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
                        روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                        متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای</p>
                </div>
                <button type="submit" class="sub_btn close_FDM">بازگشت</button>
            </div>

        </div>
    </div>

    <main class="user_dashboard">
        <section class="profile_temp">
            <?php require_once '../template/user_dashboard.php'?>

            <div class="profile_content">

                <div class="content_field">
                    <header class="main_sec_header">
                        <h3>فروم های من </h3>
                    </header>

                    <div class="general_content forum">
                        <div class="table_body">
                            <div class="T_header">
                                <div class="T_title">
                                    ردیف
                                </div>
                                <div class="T_title text_limited">
                                    نام دوره
                                </div>
                                <div class="T_title text_limited">
                                    نام فصل
                                </div>
                                <div class="T_title text_limited">
                                    عنوان سوال
                                </div>
                                <div class="T_title">
                                    تاریخ ثبت
                                </div>
                                <div class="T_title">
                                    وضعیت
                                </div>
                                <div class="T_title">
                                    جزئیات
                                </div>
                            </div>
                            <div class="T_body">
                                <div class="T_data">
                                    ۱
                                </div>
                                <div class="T_data text_limited">
                                    خرید ناموفق دوره در دوروز وتکمیل اطلاعات کاربری
                                </div>
                                <div class="T_data text_limited">
                                    خرید ناموفق دوره در دوروز وتکمیل اطلاعات کاربری
                                </div>
                                <div class="T_data text_limited">
                                    خرید ناموفق دوره در دوروز وتکمیل اطلاعات کاربری
                                </div>
                                <div class="T_data">
                                    ۱۴۰۰.۱۰.۳۰
                                </div>
                                <div class="T_data">
                                    <div class="yellow_situation pill">
                                        در حال بررسی
                                    </div>
                                </div>
                                <div class="T_data link">
                                    <button class=" FDM_open"><i class="fas fa-info"></i></button>
                                    <button><i class="far fa-link"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <?php require_once '../template/footer.php'?>

    <script src="../../assets/js/general/jquery.js"></script>
    <script src="../../assets/js/general/bootstrap.js"></script>
    <script src="../../assets/js/script/navbar.js"></script>
    <script src="../../assets/js/script/user_dashboard.js"></script>
    <script src="../../assets/js/user-profile/forum.js"></script>

</body>

</html>