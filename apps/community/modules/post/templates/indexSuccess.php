<div class="entry">
    <div class="content_news">
        <table>
            <tbody>
                <?php foreach ($community_posts as $community_post): ?>

                <?php if($community_post->getIsActive()): ?>
                <div class="post">
                    <div>
                        <h2><a href="<?php echo url_for('post/show?id=' . $community_post->getId()) ?>"><?php echo $community_post->getTitle() ?></a></h2>
                        <h6>Catégorie : <a href="<?php echo url_for('category/show?id=' . $community_post->getCategory_id()) ?>"><?php echo $community_post->getCommunityCategory() ?></a></h6>
                        <p><?php echo $community_post->getContent() ?></p>
                        <span class="post_data"><small class="trans"><?php echo $community_post->getDate() ?></small></span>
                        <a class="comment_left fr" href="#comments"><?php echo $community_post->getCommunityComment()->count() ?> Comments</a>
                    </div>
                    <div class="cl"></div>
                </div>
                <?php endif; ?>

                <tr>
                    <td><a href="<?php echo url_for('post/show?id=' . $community_post->getId()) ?>"><?php echo $community_post->getId() ?></a></td>
                    <td><?php echo $community_post->getTitle() ?></td>
                    <td><?php echo $community_post->getContent() ?></td>
                    <td><?php echo $community_post->getDateTimeObject('date')->format("d/m/Y H:i") ?></td>
                    <td><?php echo $community_post->getCategory_id() ?></td>
                    <td><?php echo $community_post->getIsActive() ?></td>
                    <td><?php echo $community_post->getSlug() ?></td>
                </tr>
            <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="navigation">
                    <div class="wp-pagenavi">
                        <span class="pages">Page 1 of 2</span>
                        <span class="current">1</span>
                        <a title="2" class="page" href="http://clockstone-html.cmsmasters.net/news.php#"><span>2</span></a>
                        <a href="http://clockstone-html.cmsmasters.net/news.php#"><span>&gt;</span></a>
                    </div>
                </div>

                <a href="<?php echo url_for('post/new') ?>">New</a>
    </div>
</div>