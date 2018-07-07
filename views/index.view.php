<?php require('partials/head.php'); ?>

<!-- <?php //foreach ($tasks as $task) { ?>

<ul>
  <?php //if ($task->completed) { ?>
    <strike><li><?php //echo $task->description; ?></li></strike>
  <?php //} else { ?>
    <li><?php //echo $task->description; ?></li>
  <?php// } ?>
</ul>
  <?php //} ?> -->

<?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<h1>Submit Your Name</h1>

<form method="POST" action="/names">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>

