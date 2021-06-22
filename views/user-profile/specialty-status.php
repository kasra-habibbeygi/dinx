<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/general/fontAwsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general-css.css">
    <link rel="stylesheet" href="../../assets/css/user-profile/certificate.css">
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
                    </header>

                    <div class="general_content ticket">
                        <div class="table_body">
                            <div class="T_header">
                                <div class="T_title">
                                    ردیف
                                </div>
                                <div class="T_title text_limited">
                                    نام دوره
                                </div>
                                <div class="T_title">
                                    نمره
                                </div>
                                <div class="T_title">
                                    تاریخ ثبت
                                </div>
                                <div class="T_title">
                                    لینک گواهی
                                </div>
                            </div>
                            <div class="T_body">
                                <div class="T_data">
                                    ۱
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
                                    <a href="">لینک گواهی</a>
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