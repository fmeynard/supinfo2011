<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $community_category->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $community_category->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $community_category->getDescription() ?></td>
    </tr>
    <tr>
      <th>Is active:</th>
      <td><?php echo $community_category->getIsActive() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php echo $community_category->getSlug() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('category/edit?id='.$community_category->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('category/index') ?>">List</a>
