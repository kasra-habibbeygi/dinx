<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/general/fontAwsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general-css.css">
    <link rel="stylesheet" href="../../assets/css/user-profile/change_password.css">
    <title>دینکس | بترین سایت آموزشی</title>
</head>

<body>

    <?php require_once '../template/navbar.php'?>

    <main class="user_dashboard">
        <?php require_once '../template/modals.php'?>

        <section class="profile_temp">
            <?php require_once '../template/user_dashboard.php'?>

            <div class="profile_content">

                <div class="content_field">
                    <header class="main_sec_header">
                        <h3>ویرایش رمز عبور</h3>
                    </header>

                    <div class="CP_main_field">
                        <form action="">
                            <div class="form_group">
                                <label for="">رمز عبور فعلی</label>
                                <input type="text">
                            </div>
                            <div class="form_group">
                                <label for="">رمز عبور جدید</label>
                                <input type="text">
                            </div>
                            <div class="form_group">
                                <label for="">تکرار رمز عبور جدید</label>
                                <input type="text">
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
                            <button type="submit" class="submit_btn">تغییر رمز عبور</button>
                        </form>
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