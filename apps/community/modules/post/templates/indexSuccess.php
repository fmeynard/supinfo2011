<h1>Community posts List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Content</th>
      <th>Date</th>
      <th>Category</th>
      <th>Is active</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($community_posts as $community_post): ?>
    <tr>
      <td><a href="<?php echo url_for('post/show?id='.$community_post->getId()) ?>"><?php echo $community_post->getId() ?></a></td>
      <td><?php echo $community_post->getTitle() ?></td>
      <td><?php echo $community_post->getContent() ?></td>
      <td><?php echo $community_post->getDate() ?></td>
      <td><?php echo $community_post->getCategoryId() ?></td>
      <td><?php echo $community_post->getIsActive() ?></td>
      <td><?php echo $community_post->getSlug() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('post/new') ?>">New</a>
