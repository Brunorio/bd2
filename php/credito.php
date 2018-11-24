<?php 
	require('funcoes.php');

	$json = file_get_contents('php://input');

	$obj = json_decode($json);

	$cpf = $obj->cpf;
    $tempo = $obj->tempo;
    $id_funcionario = $obj->id_funcionario;
	
    $usuario = getUsuarioByCPF($cpf);
    if($usuario['result'] == 'success'){
    	
		$setCredito = setCredito($usuario['id'], $id_funcionario, $tempo);
		if($setCredito['result'] == 'success'){
			echo json_encode(array(            
            	"result" => "success"
        	));
		} else {
			echo json_encode(array(            
            	"result" => "error"
        	));
		}
    	
    } else {
    	echo json_encode(array(            
        	"result" => "error"
    	));
    }

?>