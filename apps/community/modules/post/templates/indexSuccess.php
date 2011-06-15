<?php slot(
  'breadcrumb',
  sprintf('You are here : Home'))
?>
<div class="entry">
    <div class="content_news">
        <table>
            <tbody>
                <?php foreach ($community_posts as $community_post): ?>

                <?php if ($community_post->getIsActive()): ?>
                    <div class="post">
                        <div>
                            <h2><?php echo link_to($community_post->getTitle(), 'show_post', $community_post) ?></h2>
                            <h6>Category : <?php echo link_to($community_post->getCommunityCategory()->getName(), 'show_category', $community_post->getCommunityCategory()) ?></h6>
                            <p><?php echo $community_post->getContent() ?></p>
                            <span class="post_data"><small class="trans"><?php echo $community_post->getCreatedAt() ?></small></span>
                            <p class="comment_left fr"><?php echo ($community_post->getCommunityComment()->count() > 0) ? link_to($community_post->getCommunityComment()->count() . " Comments", 'show_post', $community_post) : "No comments"; ?></p>
                        </div>
                        <div class="cl"></div>
                    </div>
            <?php endif; ?>
            <?php endforeach; ?>
                        </tbody>
                    </table>
        <?php if ($sf_user->isAuthenticated() && $sf_user->getGuardUser()->getIsSuperAdmin()): ?>
                            <a href="<?php echo url_for('post/new') ?>">New Post</a> - <a href="<?php echo url_for('category/new') ?>">New Category</a>
        <?php endif; ?>
    </div>
</div>