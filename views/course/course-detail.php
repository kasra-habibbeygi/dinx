<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/general/fontAwsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general-css.css">
    <link rel="stylesheet" href="../../assets/css/course/course-detail.css">
    <title>دینکس | بترین سایت آموزشی</title>
</head>

<body>

    <?php require_once '../template/navbar.php'?>

    <div class="upload_modal">
        <div class="upload_content">

            <header class="main_sec_header">
                <h3>ارسال تکلیف</h3>
            </header>

            <button class="close_UM">
                <i class="far fa-times"></i>
            </button>

            <div class="upload_field">
                <form action="">
                    <div class="form_group">
                        <label for="">توضیحات</label>
                        <textarea type="text"></textarea>
                    </div>
                    <div class="form_group">
                        <p class="chose_file_title">اپلود تکلیف</p>
                        <i class="fal fa-times-circle"></i>
                        <label for="file_upload" class="chose_file_custom">
                            <i class="fal fa-paperclip"></i>
                            <span class="link_of_attach_file"></span>
                        </label>
                        <input type="file" class="d-none file_ajax" name="portfolio_inp" id="file_upload"
                            accept=".docx,.doc,.pdf,.md,.pptx,.ppt,.txt">
                        <small class="small_inp_upload">* حداکثر حجم مجاز برای اپلود تکالیف 10 مگابایت میباشد .</small>
                    </div>
                    <div class="btn_group">
                        <button type="submit">ارسال</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="exsm_modal">
        <div class="exam_content">

            <header class="main_sec_header">
                <h3>آزمون پایان فصل</h3>
            </header>

            <button class="EM_close">
                <i class="far fa-times"></i>
            </button>

            <div class="exam_info">
                <form action="">
                    <div class="one_Q_field">
                        <p class="exam_title">1 - یک ماشین بردار پشتیبان خطی سخت ) Hard Linear SVM یا SVM خطی بدون در
                            نظر گرفتن پنالتی( در
                            یک
                            مساله
                            کلاسه بندی دو کلاسه در فضای دوبعدی با n داده آموزشی داده شده است. نتیجه حاصل k=2 بردار
                            پشتیبان
                            بوده
                            است. در صورتی که یک داده برچس بدار دلخواه به مجموعه داده های قبلی اضافه کرده و مجددا کلاسه
                            بند
                            را
                            آموزش دهیم، حداکثر چند ) بردار پشتیبان ممکن است به دست آید؟</p>
                        <div class="option">
                            <div>
                                <p>۱ -</p>
                                <input class="inp-cbx" id="OP_1_1" type="radio" name="option1" style="display: none" />
                                <label class="cbx" for="OP_1_1">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>k</span>
                                </label>
                            </div>
                        </div>
                        <div class="option">
                            <div>
                                <p>۲ -</p>
                                <input class="inp-cbx" id="OP_1_2" type="radio" name="option1" style="display: none" />
                                <label class="cbx" for="OP_1_2">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>k+1</span>
                                </label>
                            </div>
                        </div>
                        <div class="option">
                            <div>
                                <p>۳ -</p>
                                <input class="inp-cbx" id="OP_1_3" type="radio" name="option1" style="display: none" />
                                <label class="cbx" for="OP_1_3">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>n</span>
                                </label>
                            </div>
                        </div>
                        <div class="option">
                            <div>
                                <p>۴ -</p>
                                <input class="inp-cbx" id="OP_1_4" type="radio" name="option1" style="display: none" />
                                <label class="cbx" for="OP_1_4">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>n+1</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="one_Q_field">
                        <p class="exam_title">1 - یک ماشین بردار پشتیبان خطی سخت ) Hard Linear SVM یا SVM خطی بدون در
                            نظر گرفتن پنالتی( در
                            یک
                            مساله
                            کلاسه بندی دو کلاسه در فضای دوبعدی با n داده آموزشی داده شده است. نتیجه حاصل k=2 بردار
                            پشتیبان
                            بوده
                            است. در صورتی که یک داده برچس بدار دلخواه به مجموعه داده های قبلی اضافه کرده و مجددا کلاسه
                            بند
                            را
                            آموزش دهیم، حداکثر چند ) بردار پشتیبان ممکن است به دست آید؟</p>
                        <div class="option">
                            <div>
                                <p>۱ -</p>
                                <input class="inp-cbx" id="OP_1_1" type="radio" name="option1" style="display: none" />
                                <label class="cbx" for="OP_1_1">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>k</span>
                                </label>
                            </div>
                        </div>
                        <div class="option">
                            <div>
                                <p>۲ -</p>
                                <input class="inp-cbx" id="OP_1_2" type="radio" name="option1" style="display: none" />
                                <label class="cbx" for="OP_1_2">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>k+1</span>
                                </label>
                            </div>
                        </div>
                        <div class="option">
                            <div>
                                <p>۳ -</p>
                                <input class="inp-cbx" id="OP_1_3" type="radio" name="option1" style="display: none" />
                                <label class="cbx" for="OP_1_3">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>n</span>
                                </label>
                            </div>
                        </div>
                        <div class="option">
                            <div>
                                <p>۴ -</p>
                                <input class="inp-cbx" id="OP_1_4" type="radio" name="option1" style="display: none" />
                                <label class="cbx" for="OP_1_4">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>n+1</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="one_Q_field">
                        <p class="exam_title">1 - یک ماشین بردار پشتیبان خطی سخت ) Hard Linear SVM یا SVM خطی بدون در
                            نظر گرفتن پنالتی( در
                            یک
                            مساله
                            کلاسه بندی دو کلاسه در فضای دوبعدی با n داده آموزشی داده شده است. نتیجه حاصل k=2 بردار
                            پشتیبان
                            بوده
                            است. در صورتی که یک داده برچس بدار دلخواه به مجموعه داده های قبلی اضافه کرده و مجددا کلاسه
                            بند
                            را
                            آموزش دهیم، حداکثر چند ) بردار پشتیبان ممکن است به دست آید؟</p>
                        <div class="option">
                            <div>
                                <p>۱ -</p>
                                <input class="inp-cbx" id="OP_1_1" type="radio" name="option1" style="display: none" />
                                <label class="cbx" for="OP_1_1">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>k</span>
                                </label>
                            </div>
                        </div>
                        <div class="option">
                            <div>
                                <p>۲ -</p>
                                <input class="inp-cbx" id="OP_1_2" type="radio" name="option1" style="display: none" />
                                <label class="cbx" for="OP_1_2">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>k+1</span>
                                </label>
                            </div>
                        </div>
                        <div class="option">
                            <div>
                                <p>۳ -</p>
                                <input class="inp-cbx" id="OP_1_3" type="radio" name="option1" style="display: none" />
                                <label class="cbx" for="OP_1_3">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>n</span>
                                </label>
                            </div>
                        </div>
                        <div class="option">
                            <div>
                                <p>۴ -</p>
                                <input class="inp-cbx" id="OP_1_4" type="radio" name="option1" style="display: none" />
                                <label class="cbx" for="OP_1_4">
                                    <span>
                                        <svg width="12px" height="9px" viewbox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>n+1</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="exam_sub">
                        <button type="submit">پایان و ثبت آزمون</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <main>
        <?php require_once '../template/modals.php'?>

        <section class="course_detail_main_field">
            <div class="right_field">
                <h1>دوره آموزش صفر تا صد و پروژه محور طراحی وب سایت</h1>
                <div class="h_iframe-aparat_embed_frame">
                    <span style="display: block;padding-top: 57%"></span>
                    <iframe src="https://www.aparat.com/video/video/embed/videohash/eNbMO/vt/frame"
                        title="نقد و بررسی گوشی پوکو ایکس ۳ پرو | Poco X3 Pro Review" allowFullScreen="true"
                        webkitallowfullscreen="true" mozallowfullscreen="true">
                    </iframe>
                </div>
                <h3 class="main_title">درباره این دوره</h3>
                <div class="AC_text">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زی
                    </p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجsهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زی
                    </p>
                </div>
                <div>
                    <h3 class="main_title">جلسات دوره</h3>
                    <div class="course_sessions_field">
                        <h3 class="session_row_title">فصل اول <i class="fal fa-angle-left session_angle"></i></h3>
                        <div class="CSF_S_field active">
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>معرفی دوره</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href="" data-toggle="tooltip" data-placement="top"
                                            title="مشاهده جلسه">
                                            <i class="fal fa-play"></i>
                                        </a>
                                        <button type="button" class="upload" data-toggle="tooltip" data-placement="top"
                                            title="اپلود تکلیف">
                                            <i class="fal fa-upload"></i>
                                        </button>
                                        <a class="download" href="" data-toggle="tooltip" data-placement="top"
                                            title="دانلود جلسه">
                                            <i class="fal fa-arrow-alt-to-bottom"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آموزش مقدماتی HTML و CSS</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <button type="button" class="homework"><i class="fal fa-paperclip"></i></button>
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آموزش flexbox</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>طراحی صفحه اصلی سایت دینکس</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آزمون پایان فصل</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <button type="button" class="exam"><i class="fal fa-pencil-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course_sessions_field">
                        <h3 class="session_row_title">فصل دوم <i class="fal fa-angle-left session_angle"></i></h3>
                        <div class="CSF_S_field">
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>معرفی دوره</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آموزش مقدماتی HTML و CSS</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <button type="button" class="homework"><i class="fal fa-paperclip"></i></button>
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آموزش flexbox</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>طراحی صفحه اصلی سایت دینکس</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آزمون پایان فصل</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <button type="button" class="exam"><i class="fal fa-pencil-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course_sessions_field">
                        <h3 class="session_row_title">فصل سوم <i class="fal fa-angle-left session_angle"></i></h3>
                        <div class="CSF_S_field">
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>معرفی دوره</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آموزش مقدماتی HTML و CSS</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <button type="button" class="homework"><i class="fal fa-paperclip"></i></button>
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آموزش flexbox</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>طراحی صفحه اصلی سایت دینکس</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آزمون پایان فصل</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <button type="button" class="exam"><i class="fal fa-pencil-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course_sessions_field">
                        <h3 class="session_row_title">فصل چهارم <i class="fal fa-angle-left session_angle"></i></h3>
                        <div class="CSF_S_field">
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>معرفی دوره</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آموزش مقدماتی HTML و CSS</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <button type="button" class="homework"><i class="fal fa-paperclip"></i></button>
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آموزش flexbox</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>طراحی صفحه اصلی سایت دینکس</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آزمون پایان فصل</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <button type="button" class="exam"><i class="fal fa-pencil-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course_sessions_field">
                        <h3 class="session_row_title">فصل پنجم <i class="fal fa-angle-left session_angle"></i></h3>
                        <div class="CSF_S_field">
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>معرفی دوره</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آموزش مقدماتی HTML و CSS</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <button type="button" class="homework"><i class="fal fa-paperclip"></i></button>
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آموزش flexbox</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>طراحی صفحه اصلی سایت دینکس</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <a class="play_video" href=""><i class="fal fa-play"></i></a>
                                        <a class="download" href=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sessions_field">
                                <div class="session_row">
                                    <div class="session_info">
                                        <p>آزمون پایان فصل</p>
                                        <p>48 دقیقه</p>
                                        <p><i class="far fa-lock-open-alt"></i></p>
                                    </div>
                                    <div class="session_act">
                                        <button type="button" class="exam"><i class="fal fa-pencil-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="pre_learn">
                    <h3>پیش نیاز های این دوره </h3>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>طراحی وب سایت</li>
                        <li>Jquery</li>
                    </ul>
                </div>
                <div class="course_info">
                    <div class="course_price sale_on">
                        <div>
                            <i class="far fa-dollar-sign"></i>
                            قیمت این دوره :
                            <span class="price"> ۱۰۰.۰۰۰ <Span class="toman">تومان</Span></span>
                        </div>
                        <span class="sale_price">۵۰.۰۰۰ تومان</span>
                    </div>
                    <div class="course_details">
                        <div>
                            <i class="fas fa-user-tie"></i>
                            <p>استاد : <span>کسری حبیب بیگی</span></p>
                        </div>
                        <div>
                            <i class="fal fa-clock"></i>
                            <p>مدت زمان دوره : <span> ۵۶ ساعت</span></p>
                        </div>
                        <div>
                            <i class="fas fa-layer-group"></i>
                            <p>سطح دوره : <span>پیشرفته</span></p>
                        </div>
                        <div>
                            <i class="fas fa-users"></i>
                            <p>تعداد بازدید کننده ها : <span>۱۳۴۵</span></p>
                        </div>
                        <div>
                            <i class="fas fa-video"></i>
                            <p>تعداد ویدیو ها : <span>۵۶</span></p>
                        </div>
                    </div>
                    <a href="">ثبت نام در دوره</a>
                </div>
            </div>
        </section>

    </main>

    <?php require_once '../template/footer.php'?>

    <script src="../../assets/js/general/jquery.js"></script>
    <script src="../../assets/js/general/bootstrap.js"></script>
    <script src="../../assets/js/script/navbar.js"></script>
    <script src="../../assets/js/script/modals.js"></script>
    <script src="../../assets/js/script/uploader.js"></script>
    <script src="../../assets/js/course/course-detail.js"></script>

</body>

</html>