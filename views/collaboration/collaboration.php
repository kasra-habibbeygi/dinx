<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/general/fontAwsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general-css.css">
    <link rel="stylesheet" href="../../assets/css/collaboration/collaboration.css">
    <title> دینکس | همکاری با دینکس</title>
</head>

<body>

    <?php require_once '../template/navbar.php'?>
    <main class="main_cwd">
        <?php require_once '../template/modals.php'?>

        <section class="collaboration">

            <div class="content_field">
                <header class="main_sec_header">
                    <h3>همکار با دینکس</h3>
                </header>

                <div class="CP_main_field">
                    <p class="CP_title">
                        دینکس از تمامی اساتید و متخصصین که در حوزه های کاربری و تخصصی مشغول به فعالیت هستند، دعوت می کند
                        که با دینکس همراه شوند.
                    </p>
                    <p class="CP_title">
                        شما با پر کردن فرم زیر و ضمیمه کردن رزومه خود می توانید درخواست همکاری خود را برای دینکس ارسال
                        فرمایید.
                    </p>
                    <form action="">
                        <div class="form_group">
                            <label for="">نام</label>
                            <input type="text">
                        </div>
                        <div class="form_group">
                            <label for="">نام خانوادگی</label>
                            <input type="text">
                        </div>
                        <div class="form_group">
                            <label for="">نوع همکاری</label>
                            <input type="text">
                        </div>
                        <div class="form_group">
                            <label for="">تلفن</label>
                            <input type="text">
                        </div>
                        <div class="form_group">
                            <label for="">ایمیل</label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label for="exp">توضیحات</label>
                            <textarea id="exp" rows="3"></textarea>
                        </div>
                        <div class="form_group">
                            <p class="chose_file_title">اپلود رزومه</p>
                            <i class="fal fa-times-circle"></i>
                            <label for="file_upload" class="chose_file_custom">
                                <i class="fal fa-paperclip"></i>
                                <span class="link_of_attach_file"></span>
                            </label>
                            <input type="file" class="d-none file_ajax" name="portfolio_inp" id="file_upload"
                                accept=".docx,.doc,.pdf,.md,.pptx,.ppt,.txt">
                            <small class="small_inp_upload">* حداکثر حجم مجاز برای اپلود رزومه 10 مگابایت میباشد
                                .</small>
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
                        <button type="submit" class="submit_btn">ارسال</button>
                    </form>
                </div>

            </div>

            </div>
    </main>

    <?php require_once '../template/footer.php'?>

    <script src="../../assets/js/general/jquery.js"></script>
    <script src="../../assets/js/script/navbar.js"></script>
    <script src="../../assets/js/script/modals.js"></script>
    <script src="../../assets/js/script/uploader.js"></script>

</body>

</html>