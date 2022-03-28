<?php 
require_once "../../Clases/Categories.php";

$Category_id = $_POST['Category_id'];

$Categories = new Categories();
echo $Categories ->dropCategory($Category_id);
?>