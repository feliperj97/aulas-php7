<?php

//conectando com o BD
$conn = new Mysqli("localhost", "root", "", "db_teste");

if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY desclogin");
$data = array();
while($row = $result->fetch_assoc()){
    
    array_push($data, $row);

}
echo json_encode($data);

?>