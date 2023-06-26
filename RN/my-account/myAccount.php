<!--------------------------------- add header-------------------------------------->
<?php include '../include/masterhead.php'; ?>

<div class="ct-menu-overlay"></div>
</div>
</div>
<div id="ct-menu-mobile">
    <div class="ct-mobile-meta-item btn-nav-mobile open-menu"> <span></span></div>
</div>
</div>
</div>
</header>
<div id="ct-pagetitle" class="ct-pagetitle bg-image">
    <div class="container">
        <div class="ct-page-title-holder">
            <h1 class="ct-page-title">My account</h1>
        </div>
        <ul class="ct-breadcrumb">
            <li><a class="breadcrumb-entry" href="../index.html">Home</a></li>
            <li><span class="breadcrumb-entry">My account</span></li>
        </ul>
    </div>
</div>
<div id="content" class="site-content">
    <div class="content-inner">
        <div class="container content-container">
            <div class="row content-row">
                <div id="primary" class="content-area content-full-width col-12">
                    <main id="main" class="site-main">
                        <article id="post-11" class="post-11 page type-page status-publish hentry">
                            <div class="entry-content clearfix">
                                <div class="woocommerce">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <h2>Login</h2>
                                    <form class="woocommerce-form woocommerce-form-login login" method="post">
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="username">Username or email address&nbsp;<span
                                                    class="required">*</span></label> <input type="text"
                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                name="username" id="username" autocomplete="username" value="" />
                                        </p>
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="password">Password&nbsp;<span class="required">*</span></label>
                                            <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                type="password" name="password" id="password"
                                                autocomplete="current-password" />
                                        </p>
                                        <p class="form-row"> <label
                                                class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                                                    name="rememberme" type="checkbox" id="rememberme" value="forever" />
                                                <span>Remember me</span> </label> <input type="hidden"
                                                id="woocommerce-login-nonce" name="woocommerce-login-nonce"
                                                value="bef5db5c9b" /><input type="hidden" name="_wp_http_referer"
                                                value="/itfirm/my-account/" /> <button type="submit"
                                                class="woocommerce-button button woocommerce-form-login__submit wp-element-button"
                                                name="login" value="Log in">Log in</button></p>
                                        <p class="woocommerce-LostPassword lost_password"> <a
                                                href="lost-password/index.html">Lost your password?</a></p>
                                    </form>
                                </div>
                            </div><!-- .entry-content -->
                        </article><!-- #post-11 -->
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
        </div>
    </div><!-- #content inner -->
</div><!-- #content -->
</div><!-- #page -->

<!----------------------------------- footer add ----------------------------------->
<?php require_once '../include/masterfooter.php'; ?>