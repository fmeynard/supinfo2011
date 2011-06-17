<h1>Manage Forum</h1>
<?php if($sf_user->IsSuperAdmin()): ?>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Rank</th>
      <th>Category</th>
      <th>Latest post</th>
      <th>Nb posts</th>
      <th>Nb topics</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($frm_forums as $frm_forum): ?>
    <tr>
      <td><a href="<?php echo url_for('forumEdit/edit?id='.$frm_forum->getId()) ?>">Edit <?php echo $frm_forum->getId() ?></a></td>
      <td><?php echo $frm_forum->getName() ?></td>
      <td><?php echo $frm_forum->getDescription() ?></td>
      <td><?php echo $frm_forum->getRank() ?></td>
      <td><?php echo $frm_forum->getCategoryId() ?></td>
      <td><?php echo $frm_forum->getLatestPostId() ?></td>
      <td><?php echo $frm_forum->getNbPosts() ?></td>
      <td><?php echo $frm_forum->getNbTopics() ?></td>
      <td><?php echo $frm_forum->getCreatedAt() ?></td>
      <td><?php echo $frm_forum->getUpdatedAt() ?></td>
      <td><?php echo $frm_forum->getSlug() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('forumEdit/new') ?>">New</a>

<?php else: ?>
<center>You need to be an administrator.</center>
<?php endif; ?>