<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/general/fontAwsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general-css.css">
    <link rel="stylesheet" href="../../assets/css/user-profile/home-work.css">
    <title>دینکس | بترین سایت آموزشی</title>
</head>

<body>
    <?php require_once '../template/navbar.php'?>

    <div class="home_work_detrail_modal">
        <div class="HW_content">
            <header class="main_sec_header">
                <h3>جزئیات تکلیف</h3>
            </header>

            <div class="HW_info">
                <div>
                    <span>نام دوره : </span>
                    <p>آموزش صفر تا صد صراحی وب سایت</p>
                </div>
                <div>
                    <span>نام فصل : </span>
                    <p>یادگیری ماشین</p>
                </div>
                <div>
                    <span>تاریخ ارسال : </span>
                    <p>۱۴۰۰.۰۱.۰۱ ۱۰:۴۵</p>
                </div>
                <div>
                    <span>استاد : </span>
                    <p>کسری حبیب بیگی</p>
                </div>
                <div>
                    <span>نمره تکلیف : </span>
                    <p>۱۸ از ۲۰</p>
                </div>
                <div class="block_content">
                    <span>توضیحات : </span>
                    <p>سلام استاد وفتتون به خیر باشه این تمرین فصل 2 هست گفته بودید انجام بشه حتما و ارسال کنیم بهتون ،
                        یه سوال هم داشتم که داخل تکلیف پرسیدم اون هم جواب بدید ممنون میشم .</p>
                </div>
                <div class="block_content"><span>پاسخ استاد : </span>
                    <p>سلام وقت شما هم به خیر باشه ، بسیار عالی بود جواب سوالتون هم به ایمیلتون ارسال میکنم حتما .</p>
                </div>
                <div>
                    <span>تاریخ پاسخ استاد : </span><p>۱۴۰۰.۰۱.۰۱</p><span class="time">ساعت : </span><p> ۱۰:۴۵</p>
                </div>
                <div>
                    <span>دانلود فایل ارسال شده : </span><a href=""><i class="fas fa-file-download"></i></a>
                </div>
                <button type="submit" class="sub_btn close_HWM">بازگشت</button>
            </div>

        </div>
    </div>

    <main class="user_dashboard">
        <section class="profile_temp">
            <?php require_once '../template/user_dashboard.php'?>

            <div class="profile_content">

                <div class="content_field">
                    <header class="main_sec_header">
                        <h3>تکالیف ارسالی</h3>
                    </header>

                    <div class="general_content home_work">
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
                                <div class="T_title">
                                    نمره
                                </div>
                                <div class="T_title">
                                    تاریخ ثبت
                                </div>
                                <div class="T_title">
                                    جزئیات تکالیف
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
                                <div class="T_data">
                                    ۵۴ از ۱۰۰
                                </div>
                                <div class="T_data">
                                    ۱۴۰۰.۱۰.۳۰
                                </div>
                                <div class="T_data link">
                                    <button class="HWM_open"><i class="fas fa-info"></i></button>
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
    <script src="../../assets/js/user-profile/home-work.js"></script>

</body>

</html>