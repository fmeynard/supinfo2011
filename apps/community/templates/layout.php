<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body style="background-color:#705d57;">

        <!-- _________________________ Start Page _________________________ -->
        <div id="page" style="background:rgba(0, 0, 0, 0.40);">
            <div id="page_patern" style="background-image:url(/images/community/bg_i_4.jpg);background-attachment: fixed; background-position: 50% 0px; background-repeat: no-repeat no-repeat;">

                <!-- _________________________ Start Header _________________________ -->
                <div id="header">
                    <a class="logo" title="CarBox" href="<?php echo url_for('homepage') ?>"><img alt="CarBox" src="/images/community/logo.png" /></a>
                    <div class="top_line">
                        <?php if($sf_user->isAuthenticated()): ?>
                            Bienvenue <?php echo $sf_user->getProfile()->getFullname() . '<br/>'; ?>
                            <?php echo link_to("Se déconnecter","sfGuardAuth/signout",array("class"=>"user_area")) ?>
                            <?php else:?>
                            <p><?php echo link_to("User Area","sfGuardAuth/signin",array("class"=>"user_area")) . link_to("Register","sfGuardAuth/register",array("class"=>"user_area")) ?></p>
                            <div style="clear:both;" ></div>
                        <?php endif; ?>
                    </div>

                    <!-- _________________________ Start Navigation _________________________ -->
                    <ul id="navigation" class="sf-js-enabled">
                        <li class=""><?php echo link_to("Home",'homepage') ?></li>
                        <li class=""><a href="#">Pages</a></li>
                        <li class=""><a href="<?php echo url_for("category/index") ?>">Categories &gt;&gt;</a></li>
                        <li class=""><a href="#">Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                    <!-- _________________________ Finish Navigation _________________________ -->

                </div>
                <!-- _________________________ Finish Header _________________________ -->


                <!-- _________________________ Start Container _________________________ -->
                <div id="container">
                    <div class="cont_nav"><span class="trans">You are here:  &nbsp;</span><a href="#">Home</a>&nbsp; /&nbsp; <a href="#">Pages</a>&nbsp; /&nbsp; News</div>

                    <!-- _________________________ Start Middle _________________________ -->
                    <div id="middle" class="white_ver">
                        <div class="middle_line sidebar_bg">

                            <!-- _________________________ Start Content _________________________ -->
                            <div id="content">         
                                <?php echo $sf_content ?>
                            </div>
                            <!-- _________________________ Finish Content _________________________ -->


                            <!-- _________________________ Start Sidebar _________________________ -->
                            <div id="sidebar">
                                <div class="widget widget_links">
                                    <div class="one_third">
                                        <h3 class="widgettitle">More About Us</h3>
                                        <ul>
                                            <li><a href="http://clockstone-html.cmsmasters.net/about.php">About Us</a></li>
                                            <li><a href="http://clockstone-html.cmsmasters.net/service.php">Services</a></li>
                                            <li><a href="./Clockstone_files/Clockstone.htm">News</a></li>
                                            <li><a href="http://clockstone-html.cmsmasters.net/testimonials.php">Testimonials</a></li>
                                            <li><a href="http://clockstone-html.cmsmasters.net/fwidth.php">Layouts</a></li>
                                            <li><a href="http://clockstone-html.cmsmasters.net/shortcodes.php">Shortcodes</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                            <!-- _________________________ Finish Sidebar _________________________ -->

                        </div>
                    </div>
                    <!-- _________________________ Finish Middle _________________________ -->

                </div>
                <!-- _________________________ Finish Container _________________________ -->

                <!-- _________________________ Start Footer _________________________ -->
                <div id="footer">
                    <div id="footer_container">
                        <p>CarBox © 2011</p>
                    </div>
                </div>
                <!-- _________________________ Finish Footer _________________________ -->

            </div>
        </div>
        <!-- _________________________ Finish Page _________________________ -->
    </body>
</html>
