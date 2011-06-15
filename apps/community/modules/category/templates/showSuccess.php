<h1><?php echo $community_category->getName() ?></h1>
<?php if ($sf_user->isAuthenticated() && $sf_user->getGuardUser()->getIsSuperAdmin()): ?>
    <a href="<?php echo url_for('category/edit?id=' . $community_category->getId()) ?>">Edit category</a>
    &nbsp;
    <a href="<?php echo url_for('category/new') ?>">New category</a>
    &nbsp;
<?php endif; ?>
    <a href="<?php echo url_for('homepage') ?>">Return home</a>

    <hr/>
<?php foreach ($community_category->getCommunityPost() as $community_post): ?>

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