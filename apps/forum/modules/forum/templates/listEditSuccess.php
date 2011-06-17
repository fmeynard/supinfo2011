<h1>Manage Category</h1>
<?php if($sf_user->IsSuperAdmin()): ?>


<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Rank</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($frm_categorys as $frm_category): ?>
    <tr>
      <td><a href="<?php echo url_for('editCategory/edit?id='.$frm_category->getId()) ?>"> Edit <?php echo $frm_category->getId() ?> </a></td>
      <td><?php echo $frm_category->getName() ?></td>
      <td><?php echo $frm_category->getDescription() ?></td>
      <td><?php echo $frm_category->getRank() ?></td>
      <td><?php echo $frm_category->getCreatedAt() ?></td>
      <td><?php echo $frm_category->getUpdatedAt() ?></td>
      <td><?php echo $frm_category->getSlug() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('editCategory/new') ?>">New</a>
<?php else: ?>
<center>You need to be an administrator.</center>
<?php endif; ?>