<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $community_comment->getId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $community_comment->getUserId() ?></td>
    </tr>
    <tr>
      <th>Post:</th>
      <td><?php echo $community_comment->getPostId() ?></td>
    </tr>
    <tr>
      <th>Content:</th>
      <td><?php echo $community_comment->getContent() ?></td>
    </tr>
    <tr>
      <th>Date:</th>
      <td><?php echo $community_comment->getDate() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('comment/edit?id='.$community_comment->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('comment/index') ?>">List</a>
