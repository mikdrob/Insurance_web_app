<?php
function updateRow($tableName, $id, $post, $idkey){
include_once __DIR__ . '/../php/query.php';
$conn = dbquery();

// getting all post request variables in array
$collums = array_keys($post);

// going through this array
foreach ($collums as $collumnName){

// geting each value
$value = $_POST[$collumnName];

//updating table with them
$sql = "UPDATE $tableName SET $collumnName = '$value' WHERE $idkey = '$id';";
$conn->query($sql);
}

$conn->close();
}



?>