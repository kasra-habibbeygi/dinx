<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/general/fontAwsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general-css.css">
    <link rel="stylesheet" href="../../assets/css/forum/forum-list.css">
    <title>دینکس | بترین سایت آموزشی</title>
</head>

<body>

    <?php require_once '../template/navbar.php'?>

    <main>
        <?php require_once '../template/modals.php'?>

        <section class="course_detail_main_field">
            <div class="right_field">
                <h1>پرسش و پاسخ در دوره آموزش جامع ICDL</h1>

                <div class="forum_header_field">
                    <form action="">
                        <div class="form_group">
                            <input type="text" placeholder="دنبال چه سوالی میگردید ؟ ">
                            <button class="submit"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
                    <p>۱۶ پرسش ثبت شده</p>
                </div>

                <div class="question_card">
                    <a href="forum-details.php" class="QC_field">
                        <div class="QC_img" style="background-image: url(../../assets/img/MI00.jpg);"></div>
                        <div class="QC_info">
                            <p class="QC_title">َایراد در به روز رسانی react</p>
                            <div>
                                <p>دوره آموزش صفر تا صد طراحی وب سایت پروژه محور</p>
                                <p>۱۳۹۹/۱۱/۱۰</p>
                                <p>۳ پاسخ</p>
                            </div>
                        </div>
                    </a>
                    <a href="forum-details.php" class="QC_field">
                        <div class="QC_img" style="background-image: url(../../assets/img/MI00.jpg);"></div>
                        <div class="QC_info">
                            <p class="QC_title">َبازگردانی حالت درایو به پرایمری</p>
                            <div>
                                <p>دوره آموزش ICDL</p>
                                <p>۱۳۹۹/۱۱/۱۰</p>
                                <p>۳ پاسخ</p>
                            </div>
                        </div>
                    </a>
                    <a href="forum-details.php" class="QC_field">
                        <div class="QC_img" style="background-image: url(../../assets/img/MI00.jpg);"></div>
                        <div class="QC_info">
                            <p class="QC_title">َبازگردانی حالت درایو به پرایمری</p>
                            <div>
                                <p>دوره آموزش ICDL</p>
                                <p>۱۳۹۹/۱۱/۱۰</p>
                                <p>۳ پاسخ</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="left_field">
                <div class="offers">
                    <h3>دوره های پشنهادی</h3>
                    <ul>
                        <li>
                            <a href="">دوره آموزش مقدماتی طراحی وب سایت</a>
                        </li>
                        <li>
                            <a href="">امنیت در php</a>
                        </li>
                        <li>
                            <a href="">لموزش صفر تا صد سئو و بهینه سازی موتور های جستجو</a>
                        </li>
                        <li>
                            <a href="">اموزش پروژه محور React.js</a>
                        </li>
                    </ul>
                </div>
                <a href="" class="forum">پرسش سوال جدید</a>
            </div>
        </section>

    </main>

    <?php require_once '../template/footer.php'?>

    <script src="../../assets/js/general/jquery.js"></script>
    <script src="../../assets/js/general/bootstrap.js"></script>
    <script src="../../assets/js/script/navbar.js"></script>
    <script src="../../assets/js/script/modals.js"></script>

</body>

</html>