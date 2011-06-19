<h1>Formation has teachers List</h1>
<h5><?php echo $sf_user->getGuardUser()->getProfile()->getFullname() . "(" . $sf_user->getGuardUser()->getUsername() . ")" . " - " . link_to("Logout", "/logout") ?></h5>

<table>
    <?php foreach ($formation_has_teachers as $formation_has_teacher): ?>
        <?php if ($formation_has_teacher->getTeacherId() == $sf_user->getGuardUser()->getId()): ?>
            <tr>
                <td><?php echo $formation_has_teacher->getFormationSession() ?></td>
                <td><?php echo link_to('Grade people', 'marks/graduateSession?id=' . $formation_has_teacher->getFormationSession()->getId()) ?></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>

<a href="<?php echo url_for('marks/new') ?>">New</a>
