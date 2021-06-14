<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/general/fontAwsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general-css.css">
    <link rel="stylesheet" href="../../assets/css/user-profile/ticket-list.css">
    <title>دینکس | بترین سایت آموزشی</title>
</head>

<body>

    <?php require_once '../template/navbar.php'?>
    <main class="user_dashboard">
        <section class="profile_temp">
            <?php require_once '../template/user_dashboard.php'?>

            <div class="profile_content">

                <div class="content_field">
                    <header class="main_sec_header">
                        <h3>لیست تیکت های پشتیبانی</h3>
                        <button type="button"> <i class="fal fa-plus"></i> <span>ثبت تیکت جدید</span></button>
                    </header>

                    <div class="general_content ticket">
                        <div class="table_body">
                            <div class="T_header">
                                <div class="T_title">
                                    ردیف
                                </div>
                                <div class="T_title">
                                    شماره تیکت
                                </div>
                                <div class="T_title text_limited">
                                    عنوان
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
                                    <span>ردیف : </span> ۱
                                </div>
                                <div class="T_data">
                                    <span>شماره پشتیبانی : </span> ۱۶۵۷۹۰۰
                                </div>
                                <div class="T_data text_limited">
                                    <span>عنوان : </span> خرید ناموفق دوره در دوروز وتکمیل اطلاعات کاربری
                                </div>
                                <div class="T_data">
                                    <span>تاریخ : </span> ۱۴۰۰.۱۰.۳۰
                                </div>
                                <div class="T_data">
                                    <div class="yellow_situation pill">
                                        در حال بررسی
                                    </div>
                                </div>
                                <div class="T_data">
                                    <a href="" class="blue_situation pill">
                                        مشاهده جزئیات
                                    </a>
                                </div>
                            </div>
                            <div class="T_body">
                                <div class="T_data">
                                    <span>ردیف : </span> ۱
                                </div>
                                <div class="T_data">
                                    <span>شماره پشتیبانی : </span> ۱۶۵۷۹۰۰
                                </div>
                                <div class="T_data text_limited">
                                    <span>عنوان : </span> خرید ناموفق دوره در دوروز وتکمیل اطلاعات کاربری
                                </div>
                                <div class="T_data">
                                    <span>تاریخ : </span> ۱۴۰۰.۱۰.۳۰
                                </div>
                                <div class="T_data">
                                    <div class="green_situation pill">
                                        پاسخ داده شده
                                    </div>
                                </div>
                                <div class="T_data">
                                    <a href="" class="blue_situation pill">
                                        مشاهده جزئیات
                                    </a>
                                </div>
                            </div>
                            <div class="T_body">
                                <div class="T_data">
                                    <span>ردیف : </span> ۱
                                </div>
                                <div class="T_data">
                                    <span>شماره پشتیبانی : </span> ۱۶۵۷۹۰۰
                                </div>
                                <div class="T_data text_limited">
                                    <span>عنوان : </span> خرید ناموفق دوره در دوروز وتکمیل اطلاعات کاربری
                                </div>
                                <div class="T_data">
                                    <span>تاریخ : </span> ۱۴۰۰.۱۰.۳۰
                                </div>
                                <div class="T_data">
                                    <div class="green_situation pill">
                                        پاسخ داده شده
                                    </div>
                                </div>
                                <div class="T_data">
                                    <a href="" class="blue_situation pill">
                                        مشاهده جزئیات
                                    </a>
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

</body>

</html>