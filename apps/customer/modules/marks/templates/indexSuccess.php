<h1>Grade</h1>
<h5><?php echo $sf_user->getGuardUser()->getProfile()->getFullname() . "(". $sf_user->getGuardUser()->getUsername() .")" . " - " . link_to("Logout", "/logout") ?></h5>
<?php if ($sf_user->isAuthenticated()): ?>
    <table>
        <?php foreach ($formation_has_users as $formation_has_user): ?>
            <?php if ($formation_has_user->getUserId() == $sf_user->getGuardUser()->getId() && strtotime($formation_has_user->getFormationSession()->getDateStart()) < date(time())): ?>
                <?php if($formation_has_user->getFormationSession()->getName() != ''): ?>
                    <tr>
                        <td>Name :</td><td><?php echo $formation_has_user->getFormationSession()->getName() ?></td>
                    </tr>
                <?php endif; ?>
                    <tr>
                        <td>Date :</td><td><?php echo $formation_has_user->getFormationSession()->getDateStart() ?></td>
                    </tr>
                    <tr>
                        <td>Mark :</td><td><?php echo ($formation_has_user->getGrade() != "") ? $formation_has_user->getGrade() : 'Not yet' ; ?></td>
                    </tr>
                    <tr style="height: 20px"></tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </table>
<?php endif; ?>