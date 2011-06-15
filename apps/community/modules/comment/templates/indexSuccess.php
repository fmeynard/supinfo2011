<h1>Community comments List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Post</th>
      <th>Content</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($community_comments as $community_comment): ?>
    <tr>
      <td><a href="<?php echo url_for('comment/show?id='.$community_comment->getId()) ?>"><?php echo $community_comment->getId() ?></a></td>
      <td><?php echo $community_comment->getUserId() ?></td>
      <td><?php echo $community_comment->getPostId() ?></td>
      <td><?php echo $community_comment->getContent() ?></td>
      <td><?php echo $community_comment->getDate() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('comment/new') ?>">New</a>
