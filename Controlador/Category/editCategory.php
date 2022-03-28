<?php 
require_once "../../Clases/Categories.php";

$Category_id = $_POST['Category_id'];

$Categories = new Categories();
echo json_encode($Categories->editCategory($Category_id));
?>