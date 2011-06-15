 <?php foreach ($frm_categorys as $frm_category): ?>
 <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="18" height="18" class="tl"></td>
    <td height="18" style="background:url('/images/forum/tm.png');"></td>
    <td width="18" height="18" class="tr"></td>
  </tr>
  <tr>
    <td width="18" class="ml"></td>
    <td>


    	<table width="100%" cellspacing="0">
		<tr>
			<td class="cat" align="left" height="24"><h4><a class="genmedw" href=""><?php echo $frm_category->getName() . " " ?></a></h4>
      <?php echo $frm_category->getDescription() ?>    <?php if($sf_user->isAuthenticated()): ?> <?php if($sf_user->getGuardUser()->getIsSuperAdmin()): ?> <a href="<?php echo url_for('forum/edit?id='.$frm_category->getId()) ?>">Edit  <?php endif; ?>  <?php endif; ?> </a>
      </td>
            <td class="cat" width="14" height="24"><img src="/images/forum/expand.gif" width="17" height="16" alt="" /></td>
		</tr>
		</table>
        <div id="expand1">
		<table class="forums" cellspacing="0" width="100%">
		<tr>
			<td class="row3h" colspan="2" width="70%">&nbsp;Forum&nbsp;</td>
			<td class="row3h" align="center" width="5%">&nbsp;Topics&nbsp;</td>
			<td class="row3h" align="center" width="5%">&nbsp;Posts&nbsp;</td>
			<td class="row3h" align="center" width="20%">&nbsp;Last post&nbsp;</td>


		</tr>
      <?php foreach ( $frm_category->getFrmForum() as $frm_forum): ?>
		<tr>
			<td class="forumrow" width="31" align="center"><img src="/images/forum/forum_read.png" width="68" height="68" alt="No unread posts" title="No unread posts" /></td>
			<td class="row1h" width="70%">

				<a class="forumlink" href=""><?php echo $frm_forum->getName() ?></a>
				<p class="forumdesc"><?php echo $frm_forum->getDescription() ?></p>

			</td>
			<td class="forumrow" width="5%" align="center"><p class="topicdetails"><?php echo $frm_forum->getNbTopics() ?></p></td>
			<td class="forumrow" width="5%" align="center"><p class="topicdetails"><?php echo $frm_forum->getNbPosts() ?></p></td>
			<td class="forumrow" width="20%" align="left" nowrap="nowrap">
				<p class="topicdetails"><a href="" title=""></a></p>


					<p class="topicdetails"><?php echo $frm_forum->getFrmPost()->getDate() ?></p>

					<p class="topicdetails"><a href="" style="color: #AA0000;" class="username-coloured">admin</a>
						<a href=""><img src="/images/forum/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>

			</td>
		</tr>
<?php endforeach; ?>
		</table>
        </div>
    </td>
    <td width="18" class="mr"></td>
  </tr>
   <tr>
    <td width="18" height="18" class="bl"></td>
    <td height="18" style="background:url('/images/forum/bm.png');"></td>
    <td width="18" height="18" class="br"></td>
  </tr> 
</table> 
<?php endforeach; ?>
    


   <?php if($sf_user->isAuthenticated()): ?> <?php if($sf_user->getGuardUser()->getIsSuperAdmin()): ?><br /> <a href="<?php echo url_for('forum/new') ?>"> Add Category </a>  <?php endif; ?> <?php endif; ?>
