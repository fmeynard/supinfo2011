<h1>Grade</h1>
<h5><?php echo $sf_user->getGuardUser()->getProfile()->getFullname() . "(" . $sf_user->getGuardUser()->getUsername() . ")" . " - " . link_to("Logout", "/logout") ?></h5>
<?php if ($sf_user->isAuthenticated()): ?>
    <ul id="toggleUl">
        <li id="marks" class="active">Marks</li>
    </ul>
    <div style="clear: both"></div>
    <div id="marks-div" class="toggle">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
            <?php $x = 0; ?>
            <?php foreach ($formation_has_users as $formation_has_user): ?>
            <?php if ($formation_has_user->getUserId() == $sf_user->getGuardUser()->getId() && strtotime($formation_has_user->getFormationSession()->getDateStart()) < date(time())): ?>
                    <tr <?php if ($x % 2 == 0) : ?>class="moduloRow"<?php endif; ?>>
                            <td><?php echo $formation_has_user->getFormationSession()->getName() ?></td>
                            <td><?php echo $formation_has_user->getFormationSession()->getDateStart() ?></td>
                            <td><?php echo ($formation_has_user->getGrade() != "") ? $formation_has_user->getGrade() : 'Not yet'; ?></td>
                        </tr>
            <?php $x++; ?>
            <?php endif; ?>
            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
<?php endif; ?>