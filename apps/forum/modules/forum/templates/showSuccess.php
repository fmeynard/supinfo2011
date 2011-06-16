<div id="pageheader">
		<h2><a class="titles" href=""><?php echo $frm_forum->getName() ?></a></h2>


	</div>

	<br clear="all" /><br />


<div class="tbspace">
		<table width="100%" cellspacing="0">
		<tr>

				<td align="left" width="100" valign="middle">

      <div class="buttons">
			<div class="post-icon"><a href="" title="Post a new topic"><span></span></a></div>
		</div>

                </td>


		</tr>
		</table>
</div>

<div class="forumbar">
<table width="100%" cellspacing="0">
				<tr>
					<td align="right" valign="middle">&nbsp;</td>
				</tr>
</table>
</div>

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
			<td class="cat" align="left" height="24"><h4><a class="genmedw" href=""><?php echo $frm_forum->getName()?> </a></h4></td>
		</tr>
		</table>
		<table class="forums" width="100%" cellspacing="0">


				<tr>

					<td class="row3h" colspan="2">&nbsp;Topics&nbsp;</td>

					<td class="row3h" align="center">&nbsp;Author&nbsp;</td>
					<td class="row3h" align="center">&nbsp;Replies&nbsp;</td>
					
					<td class="row3h" align="center">&nbsp;Last post&nbsp;</td>
				</tr>


                             <?php foreach ($frm_forum->getFrmTopic() as $frm_topic): ?>
			<tr>
				<td class="forumrow" width="25" align="center"><img src="/images/forum/topic_read.png" width="27" height="18" alt="No unread posts" title="No unread posts" /></td>

				<td class="row1h">

					 <a title="Posted: Tue Jun 14, 2011 12:10 am" href="<?php echo url_for('forum/showtopic?id='.$frm_topic->getId()) ?>" class="topictitle"><?php echo $frm_topic->getTitle()?></a>

				</td>
				<td class="forumrow" width="130" align="center"><p class="topicauthor"><?php echo $frm_topic->getSfGuardUser()->getUsername()?></p></td>
				<td class="forumrow" width="50" align="center"><p class="topicdetails"><?php echo $frm_topic->getNbPosts() ?></p></td>
				
				<td class="forumrow" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;"><?php echo $frm_topic->getFrmPost()->getCreatedAt() ?></p>
					<p class="topicdetails"><a href="" style="color: #AA0000;" class="username-coloured"><?php echo $frm_topic->getFrmPost()->getSfGuardUser()->getUsername() ?> </a>
						</p>
				</td>
			</tr>
<?php endforeach; ?>
    

		<tr align="center">

				
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

<div class="tbspace">
		<table width="100%" cellspacing="0">
		<tr>

				<td height="35" align="left" width="100" valign="middle">
        <div class="buttons">
			<div class="post-icon"><a href="" title="Post a new topic"><span></span></a></div>
		</div>
          </td>

		</tr>
		</table>
</div> 