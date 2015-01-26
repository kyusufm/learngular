<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "learngular");

$result = $conn->query("SELECT nama, gelar, detail FROM user");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["nama"] . '",';
    $outp .= '"Gelar":"'   . $rs["gelar"]        . '",';
    $outp .= '"Detail":"'. $rs["detail"]     . '"}'; 
}
$outp .="]";
$conn->close();
echo($outp);
?>