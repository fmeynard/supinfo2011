<div id="participations">
    <div class="beforeTableActions">
        <form method="post" action="<?php echo url_for('formationSession/createParticipation?id=' . $formationSession->getId()); ?>">
            <?php echo $form; ?> <input type="submit" value="add" class="smallAdd"/>
        </form>
    </div>

    <?php if ($formationSession->getNotValidatedParticipations()->count()) : ?>
                <ul id="toggleUl">
                    <li id="awaitingConfirmation" class="active">Awaiting Confirmation</li>
                </ul>
                <div style="clear: both"></div>
                <div id="awaitingConfirmation-div" class="toggle toggleShow">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php foreach ($formationSession->getNotValidatedParticipations() as $participation) : ?>
                    <tr <?php if($x % 2 == 0) :?>class="moduloRow"<?php endif; ?>>
                        <td><?php echo $participation->getSfGuardUser()->getProfile()->getFullname(); ?></td>
                        <td class="actions">
                        <?php echo link_to('Validate', 'formationSession/validateParticipation?id=' . $participation->getId()); ?>
                        <?php echo link_to('Delete', 'formationSession/deleteParticipation?id=' . $participation->getId()) ?></td>
                </tr>
                <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
    <?php endif; ?>

    <?php if ($participationsValidated = $formationSession->getValidatedParticipations()) : ?>
                            <ul id="toggleUl">
                                <li id="confirmed" class="active">Confirmed (<?php echo link_to('Marks', 'formationSession/graduateSession?id=' . $formationSession->getId()) ?>)</li>
                            </ul>
                            <div style="clear: both"></div>
                            <div id="confirmed-div" class="toggle toggleShow">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 0; ?>
                <?php foreach ($participationsValidated as $participation) : ?>
                                <tr <?php if($x % 2 == 0) :?>class="moduloRow"<?php endif; ?>>
                                    <td><?php echo $participation->getSfGuardUser()->getProfile()->getFullname(); ?></td>
                                    <td class="actions"><?php echo link_to('Delete', 'formationSession/deleteParticipation?id=' . $participation->getId()) ?></td>
                                </tr>
                                <?php $x++; ?>
                <?php endforeach; ?>
                            </tbody>
                        </table>
                            </div>
        <?php else: ?>
                                    Nobody registered
        <?php endif; ?>
    </div>