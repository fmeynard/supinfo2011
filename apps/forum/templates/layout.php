<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
<title>STP Sylvain remplace moi par un pfff</title>
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
<li class="home"> <a href="">Home</a></li>
<li> <a href="">Forums</a></li>

<li> <a href="">FAQ</a></li>
<li> <a href="">Contact</a></li>
</ul>
<div class="topbar-right-cap"></div>
</div>

<div class="topbarright">
<div class="topbar-left-cap2"></div>
<ul class="topmenuright">

       <?php if($sf_user->isAuthenticated()): ?>

                         <li class="home">Bienvenue <?php echo $sf_user->getProfile()->getFullname(); ?></li>
                  <li>  <?php echo link_to("Se déconnecter","sfGuardAuth/signout",array("class"=>"user_area")) ?></li>
                        <?php else:?>
                      
                  <li class="home">   <?php echo link_to("Se connecter","sfGuardAuth/signin",array("class"=>"user_area")) ?> </li>
                  <li>   <?php echo link_to("S'inscrire","sfGuardAuth/register",array("class"=>"user_area")) ?> </li>
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
			<td class="gensmall"></td>
			<td class="gensmall" align="right">It is currently Tue Jun 14, 2011 11:54 pm<br /></td>
		</tr>
		</tbody></table>
	</div>


	<p class="searchbar">
		<span style="float: left;"><a href="">View unanswered posts</a> </span>

	</p>


	<br style="clear: both;"/>

	<div class="bc">
	<table class="bcbg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tbody><tr>
		<td class="row1">
			<p class="breadcrumbs"></p>
                        <p class="datetime"> Dooooooooooooooooooohhhhhhhhhhh </p>
		</td>
	</tr>
	</tbody></table>
</div>

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
			<p class="breadcrumbs"><a href="">Board index</a></p>
			<p class="datetime">Toute l'équipe de SafeDriving à votre écoute</p>
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
	<table class="tablebg" width="100%" cellspacing="0">
	<tr>
		<td class="catb" colspan="2"><h4>Qui est en ligne</h4></td>
	</tr>
	<tr>

		<td class="row1" rowspan="2" align="center" valign="middle"><img src="/images/forum/whosonline.png" alt="Who is online" /></td>

		<td class="row1" width="100%">
        <span class="genmed">Total posts <strong>16</strong> | Total topics <strong>9</strong> | Total members <strong>1</strong> | Our newest member <strong><a href="" style="color: #AA0000;" class="username-coloured">admin</a></strong></span>
        <br /><br />
       
		<tr>
			<td class="row1"><b class="gensmall">Legend :: <a style="color:#AA0000" href="">Administrators</a>, <a style="color:#00AA00" href="">Global moderators</a></b></td>
		</tr>

	</table>
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
	<td><span class="gensmall">Unread posts</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="/images/forum/forum_read.png" width="68" height="68" alt="No unread posts" title="No unread posts" /></td>
	<td><span class="gensmall">No unread posts</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="/images/forum/forum_read_locked.png" width="68" height="68" alt="No unread posts [ Locked ]" title="No unread posts [ Locked ]" /></td>
	<td><span class="gensmall">Forum locked</span></td>
</tr>
</table>

<br clear="all" />

<div id="footer">

	<span class="copyright">Forum développé pour SafeDriving: <a href="">Par fabrisy</a><br />
	</span>
</div>

</td></tr>
</table>

<br clear="all" />

<div class="bmenu"><a href="#">Accéder au blog</a> |  <a href="#">Accès utilisateur</a> |  <a href="#top">Back to Top</a><br />
<div class="sndnav">

	<br />
			</div>
</div>
</div>
  </body>
</html>
