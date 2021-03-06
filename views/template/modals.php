<div class="login_modal">
    <div class="modal_field">
        <div class="modal_content">
            <header class="main_sec_header">
                <h3 id="login_header">ورود به دینکس</h3>
                <h3 id="register_header">عضویت در دینکس</h3>
                <h3 id="recovery_header">بازیابی رمز عبور</h3>
            </header>

            <button class="remove_RLR_modal">
                <i class="far fa-times"></i>
            </button>

            <div class="input_field">
                <form action="" method="POST" id="login">
                    <div class="form_group">
                        <input type="text" placeholder="ایمیل یا موبایل">
                        <i class="fal fa-user"></i>
                    </div>
                    <div class="form_group">
                        <input type="text" placeholder="رمز عبور">
                        <i class="fal fa-lock-alt"></i>
                    </div>
                    <div class="linear_form_group">
                        <div class="form_group">
                            <input type="text" placeholder="کد امنیتی">
                            <i class="fal fa-shield-check"></i>
                        </div>
                        <button type="button"><i class="fal fa-sync"></i></button>
                        <img src="../../assets/img/CE00.png" alt="captcha" title="captcha">
                    </div>
                    <div class="extra_option">
                        <button type="button" id="FT_recovery">رمز عبور خود را فراموش کرده اید ؟</button>
                        <div>
                            <input class="inp-cbx" id="cbx" type="checkbox" style="display: none" />
                            <label class="cbx" for="cbx">
                                <span>
                                    <svg width="12px" height="9px" viewbox="0 0 12 9">
                                        <polyline points="1 5 4 8 11 1"></polyline>
                                    </svg>
                                </span>
                                <span>مرا به خاطر داشته باش</span>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="submit_form">ورود</button>
                    <p class="register_link">هنوز عضو نشده اید ؟ <button type="button" class="GT_register">عضویت در سایت </button></p>
                </form>

                <form action="" method="POST" id="registem">
                    <div class="form_group">
                        <input type="text" placeholder="ایمیل یا موبایل">
                        <i class="fal fa-user"></i>
                    </div>
                    <div class="form_group">
                        <input type="text" placeholder="رمز عبور">
                        <i class="fal fa-lock-alt"></i>
                    </div>
                    <div class="linear_form_group">
                        <div class="form_group">
                            <input type="text" placeholder="کد امنیتی">
                            <i class="fal fa-shield-check"></i>
                        </div>
                        <button type="button"><i class="fal fa-sync"></i></button>
                        <img src="../../assets/img/CE00.png" alt="captcha" title="captcha">
                    </div>
                    <button type="submit" class="submit_form">عضویت</button>
                    <p class="register_link">قبلا ثبت نام کرده اید ؟ <button type="button" class="GT_login">ثبت نام در سایت</button></p>
                </form>

                <form action="" method="POST" id="recovery">
                    <div class="form_group">
                        <input type="text" placeholder="ایمیل یا موبایل">
                        <i class="fal fa-user"></i>
                    </div>
                    <div class="linear_form_group">
                        <div class="form_group">
                            <input type="text" placeholder="کد امنیتی">
                            <i class="fal fa-shield-check"></i>
                        </div>
                        <button type="button"><i class="fal fa-sync"></i></button>
                        <img src="../../assets/img/CE00.png" alt="captcha" title="captcha">
                    </div>
                    <button type="submit" class="submit_form">بازیابی رمز عبور</button>
                    <p class="register_link">قبلا ثبت نام کرده اید ؟ <button type="button" class="GT_login2">ثبت نام در سایت</button></p>
                </form>
            </div>
        </div>
    </div>
</div>