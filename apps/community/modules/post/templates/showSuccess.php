<h1><?php echo $community_post->getTitle() ?></h1>
<div class="dotted_line">
    <a href="#" class="comment_left fr"><?php echo $community_post->getCommunityComment()->count() ?></a>
    <p class="post_data"><?php echo $community_post->getDate() ?></p>
    <span>in <?php echo link_to($community_post->getCommunityCategory()->getName(),"show_category",$community_post->getCommunityCategory()) ?> by <?php echo $community_post->getSfGuardUser()->getProfile()->getFullname() ?></span>
</div>
<p><?php echo $community_post->getContent() ?></p>
================================
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $community_post->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $community_post->getTitle() ?></td>
    </tr>
    <tr>
      <th>Content:</th>
      <td><?php echo $community_post->getContent() ?></td>
    </tr>
    <tr>
      <th>Date:</th>
      <td><?php echo $community_post->getDate() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $community_post->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Is active:</th>
      <td><?php echo $community_post->getIsActive() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php echo $community_post->getSlug() ?></td>
    </tr>
  </tbody>
</table>

<hr />
<?php if($sf_user->isAuthenticated() && $sf_user->getGuardUser()->getIsSuperAdmin()): ?>
<a href="<?php echo url_for('post/edit?id='.$community_post->getId()) ?>">Edit post</a>
&nbsp;
<?php endif; ?>
<a href="<?php echo url_for('post/index') ?>">Retour à la catégorie</a>
&nbsp;
<a href="<?php echo url_for('post/index') ?>">Retour à l'accueil</a>
