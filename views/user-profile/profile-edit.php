<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/general/fontAwsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general-css.css">
    <link rel="stylesheet" href="../../assets/css/user-profile/profile-edit.css">
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
                        <h3>ویرایش اطلاعات کاربری</h3>
                    </header>

                    <div class="general_content edit_profile">
                        <form action="">
                            <div class="form_group">
                                <label for="">نام و نام خانوادگی</label>
                                <input type="text">
                            </div>
                            <div class="form_group">
                                <label for="">مقطع تحصیلی</label>
                                <input type="text">
                            </div>
                            <div class="form_group">
                                <label for="">مدرک تحصیلی</label>
                                <input type="text">
                            </div>
                            <div class="form_group">
                                <label for="">موبایل</label>
                                <input type="text">
                            </div>
                            <div class="form_group">
                                <label for="">تلفن ثابت</label>
                                <input type="text">
                            </div>
                            <div class="form_group birth_day">
                                <label for="">تاریخ تولد</label>
                                <div>
                                    <input type="text" placeholder="روز">
                                    <span>/</span>
                                    <input type="text" placeholder="ماه">
                                    <span>/</span>
                                    <input type="text" placeholder="سال">
                                </div>
                            </div>
                            <div class="form_group">
                                <label for="">آدرس</label>
                                <textarea type="text"></textarea>
                            </div>
                            <div class="form_group">
                                <label for="add_fav">علاقه مندی ها</label>
                                <input type="text" id="add_fav">
                                <i class="far fa-plus add_fav"></i>
                                <div class="add_fav_field"></div>
                            </div>
                            <div class="btn_group">
                                <button type="submit" class="submit_btn">اعمال تغییرات</button>
                            </div>
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
    <script src="../../assets/js/user-profile/profile-edit.js"></script>

</body>

</html>