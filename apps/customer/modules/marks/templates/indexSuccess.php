<h1>Formation has users List</h1>
<?php if ($sf_user->isAuthenticated()): ?>
    <table>
        <tbody>
        <?php foreach ($formation_has_users as $formation_has_user): ?>
            <?php if ($formation_has_user->getUserId() == $sf_user->getGuardUser()->getId()): ?>
                    <tr>
                        <td>Name :</td><td><?php echo $formation_has_user->getFormationSession()->getName() ?></td>
                    </tr>
                    <tr>
                        <td>Date :</td><td><?php echo $formation_has_user->getFormationSession()->getDateStart() ?></td>
                    </tr>
                    <tr>
                        <td>Mark :</td><td><?php echo ($formation_has_user->getGrade() != "") ? $formation_has_user->getGrade() : 'Not yet' ; ?></td>
                    </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?php echo url_for('marks/new') ?>">New</a>
<?php endif; ?>