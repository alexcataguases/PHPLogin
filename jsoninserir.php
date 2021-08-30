<?php

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *"); 

include 'conexao.php';


$data=array(); 
if(isset($_REQUEST["nome"])){

        $nome=$_REQUEST['nome'];
        $telefone=$_REQUEST['telefone'];
        $email=$_REQUEST['email'];
        $senha=$_REQUEST['senha'];
        
        $sql = "INSERT INTO tblusuario(nome, telefone, email, senha)VALUES('$nome', '$telefone', '$email','$senha')";
        
  
        if (mysqli_query($con, $sql)) {
          //$data[]= "Registro inserido com sucesso!";
          $data[]= "certo";
        } else {
          //$data[]=  "Error: " . $sql . "<br>" . mysqli_error($con);
          $data[]=  "errado";
        }
}else{
    
          $data[]=  "errado";
    
}
echo json_encode($data); 

?>




