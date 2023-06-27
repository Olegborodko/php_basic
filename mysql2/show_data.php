<?php
require_once '../mysql/db.php';
require_once 'select_all.php';

$update_member = htmlspecialchars(trim($_GET['update_member'])) ?? false;

// var_dump($data);

if ($update_member) {
  ?>
  Edid member
  <?= $update_member ?>
  <br />
  <form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $update_member ?>">
    <input placeholder="name" type="text" name="name" value="<?= $data[$update_member]['name'] ?>"><br />
    <input placeholder="email" type="text" name="email" value="<?= $data[$update_member]['email'] ?>"><br />
    <input placeholder="date" type="text" name="date" value="<?= $data[$update_member]['data'] ?>"><br />
    <button>Submit</button>
  </form>
  <?php
} else {
  ?>
  Add member
  <br />
  <form method="POST" action="process.php">
    <input placeholder="name" type="text" name="name"><br />
    <input placeholder="email" type="text" name="email"><br />
    <input placeholder="date" type="text" name="date"><br />
    <button>Submit</button>
  </form>
  <?php
}
?>

<?php
$message = htmlspecialchars(trim($_GET['message']));
echo $message;