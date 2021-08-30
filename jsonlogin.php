<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *"); 

include 'conexao.php';

        $email=$_REQUEST['email'];
        $senha=$_REQUEST['senha'];

$data=array(); 
$q=mysqli_query($con, "SELECT * FROM tblusuario where senha='$senha' and email='$email'"); 


while ($row=mysqli_fetch_array($q)){		
    $data[]=$row; 
}
echo json_encode($data); 

?>

