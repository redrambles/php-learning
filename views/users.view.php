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

  <h1>All Users</h1>

<?php foreach ($users as $user) : ?>
    <li><?php echo $user->name; ?></li>
<?php endforeach; ?>

<h1>Submit Your Name</h1>

<form method="POST" action="/users">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>

