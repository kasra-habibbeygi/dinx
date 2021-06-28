<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/general/fontAwsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general-css.css">
    <link rel="stylesheet" href="../../assets/css/forum/forum-details.css">
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
                    <p>۱۴۰۰/۰۴/۰۲</p>
                    <p>۱۶ پرسش ثبت شده</p>
                </div>

                <div class="main_forum_question">
                    <p>سلام استاد </p>
                    <p>من یک مشکلی تو قسمت 12 آموزش دارم </p>
                    <p>تو این قسمت trait view میسازیم و تستش میکنیم </p>
                    <p>به این عکس توجه کنید </p>
                    <img src="../../assets/img/FE00.jpg" alt="">
                </div>

                <div class="comments">
                    <h3 class="main_title">نظرات کاربران در رابطه با این دوره</h3>
                    <form action="">
                        <div class="form_group">
                            <label for="">نظر خود را وارد کنید</label>
                            <textarea type="text"></textarea>
                        </div>
                        <div class="btn_group">
                            <button type="submit">ثبت نظر</button>
                        </div>
                    </form>

                    <div class="user_comments">
                        <div class="user_info">
                            <div class="user_image" style="background-image: url(../../assets/img/UA00.jpg);"></div>
                            <div>
                                <p>کسری حبیب بیگی</p>
                                <span>تاریخ ثبت : ۱۴۰۰.۱۰.۲۴</span>
                            </div>
                        </div>
                        <p class="user_comment_content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زی</p>
                    </div>

                    <div class="master_reply user_comments">
                        <div class="user_info">
                            <div class="user_image" style="background-image: url(../../assets/img/MI00.jpg);"></div>
                            <div>
                                <p>حمید آذرمکان</p>
                                <span>تاریخ ثبت : ۱۴۰۰.۱۰.۲۴</span>
                            </div>
                        </div>
                        <p class="user_comment_content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زی</p>
                    </div>
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