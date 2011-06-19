<h1>Subscribe to a session</h1> 
<h5><?php echo $sf_user->getGuardUser()->getProfile()->getFullname() . "(" . $sf_user->getGuardUser()->getUsername() . ")" . " - " . link_to("Logout", "/logout") ?></h5>
<ul id="toggleUl">
  <li id="sessionFormation" class="active">Sessions available</li>
</ul>
<div style="clear: both"></div>
<div id="sessionFormation-div" class="toggle">
<table>
    <thead>
            <tr>
                <th>Name</th>
                <th>Start</th>
                <th>End</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $x=0; ?>
    <?php foreach ($formation_sessions as $formation_session): ?>
    <?php if ($sf_user->getGuardUser()->getProfile()->getAgency()->getId() == $formation_session->getAgency()->getId() && strtotime($formation_session->getDateStart()) > date(time())): ?>
            <tr <?php if($x % 2 == 0) :?>class="moduloRow"<?php endif; ?>>
                <td><?php echo $formation_session->getName() ?></td>
            <?php
            $formations = $formation_session->getFormationHasUser();
            $alreadyBooked = false;
            foreach ($formations as $formation):
                if($formation->getFormationSessionId() == $formation_session->getId() && $formation->getUserId() == $sf_user->getGuardUser()->getId()):
                    $alreadyBooked = true;
                endif;
            endforeach;
            if(!$alreadyBooked):
            $bookText = link_to("Subscribe to the session", "sessionFormation/subscribeFormation?id=" . $formation_session->getId());
        else:
            $bookText = "Already booked.";
        endif;
            ?>
        <td><?php echo $formation_session->getDateStart() ?></td>
        <td><?php echo $formation_session->getDateEnd() ?></td>
        <td class="actions"><?php echo $bookText ?></td>
    </tr>
        <?php $x++; ?>
    <?php endif; ?>
    <?php endforeach; ?>
        </tbody>
</table>
</div>