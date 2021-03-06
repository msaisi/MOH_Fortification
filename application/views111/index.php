
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("assets/asset") ?>
<body class="login-layout">
<div class="main-container container-fluid">
<div class="main-content">
<div class="row-fluid">
<div class="span12">
<div class="login-container" style="width: 580px;">
<div class="row-fluid" >
    <div class="center">
        <h1>
            <!--<i class="icon-leaf green"></i>-->
            <img src="<?php echo base_url(); ?>images/coat_of_arms-resized.png" style="width:100px; height:100px;" />
            <span style="display: block;" class="red ">Ministry Of Public Health and Sanitation</span>
            <span class="white">Department of Family Health</span>
        </h1>
        <h4 class="blue">Division of Nutrition</h4>
    </div>
</div>

<div class="space-6"></div>

<div class="row-fluid">
    <div class="position-relative">
        <div id="login-box" class="login-box visible widget-box no-border">
            <div class="widget-body">
                <div class="widget-main">
                    <h4 class="header blue lighter bigger">
                        <i class="icon-coffee green"></i>
                        Please Enter Your Information
                    </h4>
                    <?php if(!empty($form)){?>
                    <div class="alert alert-error"><?php echo $form;?></div>
                    <?php } ?>
                    <div class="space-6"></div>

                    <form method="post">
                        <fieldset>
                            <label>
															<span class="block input-icon input-icon-right">
																<input type="text" name="username"class="span12" placeholder="Username" />
																<i class="icon-user"></i>
															</span>
                            </label>

                            <label>
															<span class="block input-icon input-icon-right">
																<input type="password" name="secret" class="span12" placeholder="Password" />
																<i class="icon-lock"></i>
															</span>
                            </label>

                            <div class="space"></div>

                            <div class="clearfix">


                                <button type="submit" formaction="<?php echo base_url().'c_auth/login'?>"
                                        class="width-35 pull-right btn btn-small btn-primary">
                                    <i class="icon-key"></i>
                                    Login
                                </button>
                            </div>

                            <div class="space-4"></div>
                        </fieldset>
                    </form>

                  
                </div><!--/widget-main-->

                <div class="toolbar clearfix">
                    <div>
                        <a href="login.html#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
                            <i class="icon-arrow-left"></i>
                            I forgot my password
                        </a>
                    </div>

                    <div>
                        <a href="login.html#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
                            I want to register
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!--/widget-body-->
        </div><!--/login-box-->

        <div id="forgot-box" class="forgot-box widget-box no-border">
            <div class="widget-body">
                <div class="widget-main">
                    <h4 class="header red lighter bigger">
                        <i class="icon-key"></i>
                        Retrieve Password
                    </h4>

                    <div class="space-6"></div>
                    <p>
                        Enter your email and to receive instructions
                    </p>

                    <form>
                        <fieldset>
                            <label>
															<span class="block input-icon input-icon-right">
																<input type="email" class="span12" placeholder="Email" />
																<i class="icon-envelope"></i>
															</span>
                            </label>

                            <div class="clearfix">
                                <button onclick="return false;" class="width-35 pull-right btn btn-small btn-danger">
                                    <i class="icon-lightbulb"></i>
                                    Send Me!
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div><!--/widget-main-->

                <div class="toolbar center">
                    <a href="login.html#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                        Back to login
                        <i class="icon-arrow-right"></i>
                    </a>
                </div>
            </div><!--/widget-body-->
        </div><!--/forgot-box-->

        <div id="signup-box" class="signup-box widget-box no-border">
            <div class="widget-body">
                <div class="widget-main">
                    <h4 class="header green lighter bigger">
                        <i class="icon-group blue"></i>
                        New User Registration
                    </h4>

                    <div class="space-6"></div>
                    <p> Enter your details to begin: </p>

                    <form>
                        <fieldset>
                            <label>
															<span class="block input-icon input-icon-right">
																<input type="email" class="span12" placeholder="Email" />
																<i class="icon-envelope"></i>
															</span>
                            </label>

                            <label>
															<span class="block input-icon input-icon-right">
																<input type="text" class="span12" placeholder="Username" />
																<i class="icon-user"></i>
															</span>
                            </label>

                            <label>
															<span class="block input-icon input-icon-right">
																<input type="password" class="span12" placeholder="Password" />
																<i class="icon-lock"></i>
															</span>
                            </label>

                            <label>
															<span class="block input-icon input-icon-right">
																<input type="password" class="span12" placeholder="Repeat password" />
																<i class="icon-retweet"></i>
															</span>
                            </label>

                            <label>
                                <input type="checkbox" />
															<span class="lbl">
																I accept the
																<a href="login.html#">User Agreement</a>
															</span>
                            </label>

                            <div class="space-24"></div>

                            <div class="clearfix">
                                <button type="reset" class="width-30 pull-left btn btn-small">
                                    <i class="icon-refresh"></i>
                                    Reset
                                </button>

                                <button onclick="return false;" class="width-65 pull-right btn btn-small btn-success">
                                    Register
                                    <i class="icon-arrow-right icon-on-right"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <div class="toolbar center">
                    <a href="login.html#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                        <i class="icon-arrow-left"></i>
                        Back to login
                    </a>
                </div>
            </div><!--/widget-body-->
        </div><!--/signup-box-->
    </div><!--/position-relative-->
</div>
</div>
</div><!--/.span-->
</div><!--/.row-fluid-->
</div>
</div><!--/.main-container-->

<?php $this->load->view("assets/footer") ?>