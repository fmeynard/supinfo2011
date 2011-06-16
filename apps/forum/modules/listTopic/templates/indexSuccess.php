<h1>Frm topics List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Is sticked</th>
      <th>Is locked</th>
      <th>Forum</th>
      <th>Latest post</th>
      <th>User</th>
      <th>Nb posts</th>
      <th>Nb views</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($frm_topics as $frm_topic): ?>
    <tr>
      <td><a href="<?php echo url_for('listTopic/edit?id='.$frm_topic->getId()) ?>"><?php echo $frm_topic->getId() ?></a></td>
      <td><?php echo $frm_topic->getTitle() ?></td>
      <td><?php echo $frm_topic->getIsSticked() ?></td>
      <td><?php echo $frm_topic->getIsLocked() ?></td>
      <td><?php echo $frm_topic->getForumId() ?></td>
      <td><?php echo $frm_topic->getLatestPostId() ?></td>
      <td><?php echo $frm_topic->getUserId() ?></td>
      <td><?php echo $frm_topic->getNbPosts() ?></td>
      <td><?php echo $frm_topic->getNbViews() ?></td>
      <td><?php echo $frm_topic->getCreatedAt() ?></td>
      <td><?php echo $frm_topic->getUpdatedAt() ?></td>
      <td><?php echo $frm_topic->getSlug() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('listTopic/new') ?>">New</a>
