<?php
unlink('data/'.$_GET['id']);
header('Location: /test.php');
?>
