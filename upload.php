<?php
$name = "images/".$_FILES['image']['name'];
$filename = $_FILES['image']['tmp_name'];
move_uploaded_file($filename, $name);
?>