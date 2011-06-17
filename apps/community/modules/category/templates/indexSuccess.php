<?php slot(
  'breadcrumb',
  sprintf('You are here : %s / Categories', link_to( 'Home','homepage')))
?>
<?php foreach ($community_categorys as $community_category): ?>
    <h1><?php echo link_to($community_category->getName(), 'show_category', $community_category) ?> (<?php echo $community_category->getCommunityPost()->count() ?> posts)</h1>

<?php if ($sf_user->isAuthenticated() && $sf_user->getGuardUser()->getIsSuperAdmin()): ?>
        <a href="<?php echo url_for('category/edit?id=' . $community_category->getId()) ?>">Edit category</a>
<?php endif; ?>
        <hr/>
<?php endforeach; ?>
<?php if ($sf_user->isAuthenticated() && $sf_user->getGuardUser()->getIsSuperAdmin()): ?>
            <a href="<?php echo url_for('category/new') ?>">New category</a>
<?php endif; ?>