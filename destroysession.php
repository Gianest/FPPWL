<?php
session_start();
// atau menghapus semua session yang pernah dibuat dengan:
session_destroy();
header('Location: index.php');
?>