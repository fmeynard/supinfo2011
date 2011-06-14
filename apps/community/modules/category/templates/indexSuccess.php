<h1>Community categorys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Is active</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($community_categorys as $community_category): ?>
    <tr>
      <td><a href="<?php echo url_for('category/show?id='.$community_category->getId()) ?>"><?php echo $community_category->getId() ?></a></td>
      <td><?php echo $community_category->getName() ?></td>
      <td><?php echo $community_category->getDescription() ?></td>
      <td><?php echo $community_category->getIsActive() ?></td>
      <td><?php echo $community_category->getSlug() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('category/new') ?>">New</a>
