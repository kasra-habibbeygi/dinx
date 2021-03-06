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

    <div class="new_ticket_modal">
        <div class="NT_content">
            <header class="main_sec_header">
                <h3>ثبت تیکت جدید</h3>
            </header>

            <button class="close_NTM">
                <i class="far fa-times"></i>
            </button>

            <form action="">
                <div class="form_group">
                    <label for="">عنوان</label>
                    <input type="text">
                </div>
                <div class="form_group">
                    <label for="">توضیحات</label>
                    <textarea type="text"></textarea>
                </div>
                <div class="linear_lable_form">
                    <label for="">کد امنیتی</label>
                    <div class="captcha_main_field">
                        <div class="form_group">
                            <input type="text">
                        </div>
                        <button type="button"><i class="fal fa-sync"></i></button>
                        <img src="../../assets/img/CE00.png" alt="captcha" title="captcha">
                    </div>
                </div>
                <button type="submit" class="sub_btn">ارسال</button>
            </form>

        </div>
    </div>

    <main class="user_dashboard">
        <section class="profile_temp">
            <?php require_once '../template/user_dashboard.php'?>

            <div class="profile_content">

                <div class="content_field">
                    <header class="main_sec_header">
                        <h3>لیست تیکت های پشتیبانی</h3>
                        <button type="button" class="new_ticket_M"> <i class="fal fa-plus"></i><span>ثبت تیکت
                                جدید</span></button>
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
                                    ۱
                                </div>
                                <div class="T_data">
                                    ۱۶۵۷۹۰۰
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
                                <div class="T_data">
                                    <a href="ticket-details.php" class="blue_situation pill">
                                        مشاهده جزئیات
                                    </a>
                                </div>
                            </div>
                            <div class="T_body">
                                <div class="T_data">
                                    ۱
                                </div>
                                <div class="T_data">
                                    ۱۶۵۷۹۰۰
                                </div>
                                <div class="T_data text_limited">
                                    خرید ناموفق دوره در دوروز وتکمیل اطلاعات کاربری
                                </div>
                                <div class="T_data">
                                    ۱۴۰۰.۱۰.۳۰
                                </div>
                                <div class="T_data">
                                    <div class="green_situation pill">
                                        پاسخ داده شده
                                    </div>
                                </div>
                                <div class="T_data">
                                    <a href="ticket-details.php" class="blue_situation pill">
                                        مشاهده جزئیات
                                    </a>
                                </div>
                            </div>
                            <div class="T_body">
                                <div class="T_data">
                                    ۱
                                </div>
                                <div class="T_data">
                                    ۱۶۵۷۹۰۰
                                </div>
                                <div class="T_data text_limited">
                                    خرید ناموفق دوره در دوروز وتکمیل اطلاعات کاربری
                                </div>
                                <div class="T_data">
                                    ۱۴۰۰.۱۰.۳۰
                                </div>
                                <div class="T_data">
                                    <div class="green_situation pill">
                                        پاسخ داده شده
                                    </div>
                                </div>
                                <div class="T_data">
                                    <a href="ticket-details.php" class="blue_situation pill">
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
    <script src="../../assets/js/user-profile/ticket-list.js"></script>

</body>

</html>