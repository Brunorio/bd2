<?php
    require('funcoes.php');
    $json = file_get_contents('php://input');

    if($json){

        $obj = json_decode($json);
        
    
        $email = $obj->email;
        $senha = $obj->senha;
        
       
        $result = getUsuario($email, $senha);

        echo json_encode($result);


    }
    else{
        echo json_encode(array("result" => "error"));
    }



?>
