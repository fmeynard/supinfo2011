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

<a href="<?php echo url_for('post/edit?id='.$community_post->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('post/index') ?>">Retour à la catégorie</a>
&nbsp;
<a href="<?php echo url_for('post/index') ?>">Retour à l'accueil</a>
