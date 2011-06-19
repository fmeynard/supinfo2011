<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <title>Forum SafeDriving</title>
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>

    </head>
    <body class="ltr">
        <div class="wrapperbg">
            <a name="top"></a>

            <div class="logo">
                <div class="logo-left"><a href=""><img src="/images/forum/lclogo.png" alt="" /></a></div>
                <div class="logo-right"></div>
                <div class="clear"></div>
            </div>

            <div class="topbarnav">
                <div class="topbarleft">
                    <div class="topbar-left-cap"></div>
                    <ul class="topmenuleft">
                        <li class="home"> <a href="<?php echo url_for('forum/index') ?>">Home</a></li>
                        <li> <a href="mailto:contact@SafeDriving.com">Contact</a></li>
                    </ul>
                    <div class="topbar-right-cap"></div>
                </div>

                <div class="topbarright">
                    <div class="topbar-left-cap2"></div>
                    <ul class="topmenuright">

                        <?php if ($sf_user->isAuthenticated()): ?>
                            <li class="home">Welcome <?php echo $sf_user->getProfile()->getFullname(); ?></li>
                            <li>  <?php echo link_to("Log out", "sfGuardAuth/signout", array("class" => "user_area")) ?></li>
                        <?php else: ?>
                                <li class="home">   <?php echo link_to("Log In", "sfGuardAuth/signin", array("class" => "user_area")) ?> </li>
                                <li>   <?php echo link_to("Register", "user/newCustomer", array("class" => "user_area")) ?> </li>
                        <?php endif; ?>

                            </ul>
                        </div>
                        <div class="topbar-right-cap2"></div>
                    </div>

                    <div class="clear"></div>

                    <table class="wrap" width="100%" cellpadding="0" cellspacing="0">
                        <tbody><tr><td><div id="datebar">
                                        <table width="100%" cellspacing="0">

                                            <tbody><tr>
                                                    <td class="breadcrumbs"><?php include_slot('breadcrumb') ?></td>
                                                    <td class="gensmall" align="right">It is currently <?php echo Date('D d M  H:i:s') ?><br /></td>
                                                </tr>
                                            </tbody></table>
                                    </div>

                                    <br style="clear: both;"/>

                            <?php if ($sf_user->isAuthenticated()): ?>
                                    <div class="bc">
                                        <table class="bcbg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
                                            <tbody><tr>
                                                    <td class="row1">
                                                <?php if ($sf_user->getGuardUser()->getIsSuperAdmin()): ?>
                                                    <p class="breadcrumbs">
                                                        <a href="<?php echo url_for('forum/new') ?>"> Add Category </a> |
                                                        <a href="<?php echo url_for('forumEdit/new') ?>"> Add Forum </a> |
                                                        <a href="<?php echo url_for('forum/listedit') ?>">Edit Categories </a>   |
                                                        <a href="<?php echo url_for('forumEdit/index') ?>">Edit Forums </a>
                                                    </p>
                                                <?php endif; ?>
                                                    <p class="datetime">  </p>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                </div>
                            <?php endif; ?>
                                                    <br/>

                            <?php echo $sf_content ?>
                                                    <br />
                                                    <div class="genspace">
                                                    </div>
                                                    <br clear="all" />

                                                    <div class="bc">
                                                        <table class="bcbg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
                                                            <tr>
                                                                <td class="row1">
                                                                    <p class="breadcrumbs"><a href="<?php echo url_for('forum/index') ?>">Board Index</a></p>
                                            <p class="datetime">All members of our team are here to helps you!</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <br clear="all" />

                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="18" height="18" class="tl"></td>
                                    <td height="18" style="background:url('/images/forum/tm.png');"></td>
                                    <td width="18" height="18" class="tr"></td>
                                </tr>
                                <tr>
                                    <td width="18" class="ml"></td>
                                    <td>
                                    </td>
                                    <td width="18" class="mr"></td>
                                </tr>
                                <tr>
                                    <td width="18" height="18" class="bl"></td>
                                    <td height="18" style="background:url('/images/forum/bm.png');"></td>
                                    <td width="18" height="18" class="br"></td>
                                </tr>
                            </table>

                            <br clear="all" />

                            <table class="legend">
                                <tr>
                                    <td width="20" align="center"><img src="/images/forum/forum_unread.png" width="68" height="68" alt="Unread posts" title="Unread posts" /></td>
                                    <td><span class="gensmall">New post</span></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td width="20" align="center"><img src="/images/forum/forum_read.png" width="68" height="68" alt="No unread posts" title="No unread posts" /></td>
                                    <td><span class="gensmall">Already Read</span></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td width="20" align="center"><img src="/images/forum/forum_read_locked.png" width="68" height="68" alt="No unread posts [ Locked ]" title="No unread posts [ Locked ]" /></td>
                                    <td><span class="gensmall">Blocked Post</span></td>
                                </tr>
                            </table>

                            <br clear="all" />

                            <div id="footer">

                                <span class="copyright">Forum developped for SafeDriving: <a href="">By fabrisy</a><br />
                                </span>
                            </div>

                        </td></tr>
                </tbody>
            </table>

            <br clear="all" />

            <div class="bmenu"><a href="#">Go to the blog</a> | <a href="#top">Back to Top</a><br />
                <div class="sndnav">

                    <br />
                </div>
            </div>
        </div>
    </body>
</html>
