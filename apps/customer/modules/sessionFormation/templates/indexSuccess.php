<h1>Subscribe to a session</h1> 
<h5><?php echo $sf_user->getGuardUser()->getProfile()->getFullname() . "(" . $sf_user->getGuardUser()->getUsername() . ")" . " - " . link_to("Logout", "/logout") ?></h5>

<table>
    <?php foreach ($formation_sessions as $formation_session): ?>
    <?php if ($sf_user->getGuardUser()->getProfile()->getAgency()->getId() == $formation_session->getAgency()->getId() && strtotime($formation_session->getDateStart()) > date(time())): ?>
            <tr>
                <td>Name</td><td><?php echo $formation_session->getName() ?></td>
                <td>
            <?php
            $formations = $formation_session->getFormationHasUser();
            $alreadyBooked = false;
            foreach ($formations as $formation):
                if($formation->getFormationSessionId() == $formation_session->getId() && $formation->getUserId() == $sf_user->getGuardUser()->getId()):
                    $alreadyBooked = true;
                endif;
            endforeach;
            if(!$alreadyBooked):
            echo link_to("Subscribe to the session", "sessionFormation/subscribeFormation?id=" . $formation_session->getId());
        else:
            echo "Already booked.";
        endif;
            ?>
        </td>
    </tr>
    <tr>
        <td>Start</td><td><?php echo $formation_session->getDateStart() ?></td>
    </tr>
    <tr>
        <td>End</td><td><?php echo $formation_session->getDateEnd() ?></td>
    </tr>
    <tr style="margin-bottom: 20px;"></tr>
    <?php endif; ?>
    <?php endforeach; ?>
</table>