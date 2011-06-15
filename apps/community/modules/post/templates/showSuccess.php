<h1><?php echo $community_post->getTitle() ?></h1>
<div class="dotted_line">
    <a href="#" class="comment_left fr"><?php echo $community_post->getCommunityComment()->count() ?></a>
    <p class="post_data"><?php echo $community_post->getCreatedAt() ?></p>
    <span>in <?php echo link_to($community_post->getCommunityCategory()->getName(), "show_category", $community_post->getCommunityCategory()) ?> by <?php echo $community_post->getSfGuardUser()->getProfile()->getFullname() ?></span>
</div>
<p><?php echo $community_post->getContent() ?></p>

<?php if ($sf_user->isAuthenticated() && $sf_user->getGuardUser()->getIsSuperAdmin()): ?>
    <a href="<?php echo url_for('post/edit?id=' . $community_post->getId()) ?>">Edit post</a>
    &nbsp;
<?php endif; ?>
    <?php echo link_to("Return to category", "show_category", $community_post->getCommunityCategory()) ?>
    &nbsp;
    <a href="<?php echo url_for('post/index') ?>">Return home</a>

    
<?php if($community_post->getCommunityComment()->count() > 0): ?>
<hr />
<div id="comments">
    <h3 class="headwhite">Comments (<?php echo $community_post->getCommunityComment()->count() ?>)</h3>
    <br/>
    <ol class="commentlist">
<?php foreach($community_post->getCommunityComment() as $community_comment): ?>

        <li>
            <div class="comment-body">
                <div class="comment_user">
                    <span class="image_shadow_container">
                        <img src="/images/community/avatar.jpg" alt="" class="image_shadow">
                    </span>
                </div>
                <div class="com_box">
                    <span class="fl">By <span class="yellow"><?php echo $community_comment->getSfGuardUser()->getProfile()->getFullname(); ?></span> on </span><small class="post_data"><?php echo $community_comment->getCreatedAt() ?></small>
                    <div class="cl"></div>
                    <p><?php echo $community_comment->getContent() ?></p>
                    <?php if ($sf_user->isAuthenticated() && $sf_user->getGuardUser()->getIsSuperAdmin()): ?>
                        <a class="comment-edit-link" href="<?php echo url_for('comment/edit?id=' . $community_comment->getId()) ?>">Edit Comment</a>
                        -
                        <a class="comment-edit-link" href="<?php echo url_for('comment/delete?id=' . $community_comment->getId() . "&post_id=" . $community_post->getId()) ?>">Remove Comment</a>
                    <?php endif; ?>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ol>
</div>
<?php endif; ?>
<hr />
<?php if ($sf_user->isAuthenticated()): ?>
  <form method="post" action="<?php echo url_for('comment/create?postId='.$community_post->getId()); ?>">
  <?php echo $form; ?>    
  <input type="submit" value="Save" />
  </form>
<?php endif; ?>
    