<?php $title = 'List of events'; ?>

<?php ob_start(); ?>
<h1>Our events:</h1>
<p><em><a href="./index_laeti.php?action=listPastEvents">See our past events</a></em></p>
<p><em><a href="./index_laeti.php?action=showEventCreationPage">Create an event:</a></em></p>
<p>Upcoming events:</p>
<?php
while ($data = $events->fetch())
{
    ?>
    <div class="events">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em><?= $data['event_date_formatted'] ?> <?= $data['event_hour_formatted'] ?></em>
        </h3>
        <p>
            <em><a href="./index_laeti.php?action=showEvent&amp;id=<?= $data['id'] ?>">See event</a></em>
        </p>
    </div>
    <?php
}
$events->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template_laeti.php'); ?>



