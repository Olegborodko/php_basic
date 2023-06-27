<?php
require_once '../mysql/db.php';
require_once 'select_all.php';
?>

<form method="POST" action="process.php">
  <input placeholder="name" type="text" name="name"><br />
  <input placeholder="email" type="text" name="email"><br />
  <input placeholder="date" type="text" name="date"><br />
  <button>Submit</button>
</form>

<?php
$message = htmlspecialchars(trim($_GET['message']));
echo $message;