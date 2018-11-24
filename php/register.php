<?php
    require('conexao.php');
    require('funcoes.php');

    $json = file_get_contents('php://input');

    if($json){

        $obj = json_decode($json);
        
        $nome = $obj->nome;
        $email = $obj->email;
        $cpf = $obj->cpf;
        $senha = $obj->senha;

       
        
        $result = getUsuarioByEmail($email);

        if($result['result'] == 'error'){
            $sql = 'INSERT INTO usuario VALUES (null,:nome, :email, :cpf, :senha, 0)';

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':cpf', $cpf);
            $stmt->bindValue(':senha', $senha);

            if($stmt->execute()){
                echo json_encode(array("result" => "success"));
            }
        } else {
            echo json_encode(array("result" => "error"));
        }

        

    }
    else{
        echo json_encode(array("result" => "error"));
    }



?>
