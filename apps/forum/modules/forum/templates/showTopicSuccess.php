<div id="pageheader">
	<h2><a class="titles" href=""><?php echo $frm_topic->getTitle() ?></a></h2>


</div>

<br clear="all" /><br />



<div id="pagecontent">
<div class="tbspace">
	<table width="100%" cellspacing="0">
	<tr>
		<td align="left" height="30" width="100" valign="middle" nowrap="nowrap">
        <div class="buttons">

		<div class="reply-icon"><a href="" title="Post a reply"><span></span></a></div>

        </div>
		</td>

	</tr>
	</table>
</div>


<div class="forumbar">

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

	<table class="tablebg" width="100%" cellspacing="0">

		<tr>
			<th width="158">Author</th>
			<th colspan="2">Message</th>
		</tr>



                 <?php foreach ($frm_topic->getFrmPosts as $frm_post): ?>
	<tr class="row1">

			<td class="profile" align="center" valign="middle">
				<a name="p5"></a>
				<b class="postauthor" style="color: #AA0000">admin</b>
			</td>

					<td class="row3h" width="100%"><div style="float: left;">&nbsp;Post subject: More Dummy Content</div><div style="float: right;">
                                                <a href=""><img src="/images/forum/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a>Posted: Tue Jun 14, 2011 12:02 am&nbsp;</div></td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">

				<tr>
					<td align="center" class="postdetails">Site Admin</td>
				</tr>

				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Mon Jun 13, 2011 11:49 pm<br /><b>Posts:</b> 16
				</span>

			</td>
			<td valign="top" colspan="2">
				<table width="100%" cellspacing="5">
				<tr>
					<td>

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">

                            <div class="profile-icons">

							</div>

							</td>
						</tr>
						</table>

						<div class="postbody"> message</div>

					<br clear="all" /><br />
					</td>
				</tr>
				</table>
			</td>
		</tr>

        <?php endforeach; ?>
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
		<td align="left" height="35" width="100" valign="middle" nowrap="nowrap">
		<div class="buttons">

		<div class="reply-icon"><a href="" title="Post a reply"><span></span></a></div>

        </div>
		</td>


	</tr>
	</table>
</div>
</div>
