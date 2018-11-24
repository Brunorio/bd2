<?php 
	
    function getUsuario($email, $senha){
        require('conexao.php');
        $sql = 'SELECT * FROM usuario WHERE email = :email && senha = :senha';

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);

        if($stmt->execute()){
            $row = $stmt->fetchObject();
            if ($row){
               
                return (array(
                    "id" => $row->id,
                    "nome" => $row->nome,
                    "email" => $row->email,
                    "cpf" => $row->cpf,
                    "result" => "success"
                ));
            } else {
                return (array("result" => "error"));
            }
        }
    }

    function aplicarMulta($func, $vei, $data){
        require('conexao.php');
        $sql = 'INSERT INTO `multa`(`id`, `aplicador`, `veiculo`, `_data`) VALUES (null, :func, :vei, :data)';
        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':func', $func);
        $stmt->bindValue(':vei', $vei);
        $stmt->bindValue(':data', $data);
        $stmt->execute();

    }

    function getPlaca($placa, $estado){

        require('conexao.php');
        $sql = 'SELECT id FROM veiculo WHERE placa = "'.$placa.'" AND estado = "'.$estado.'"';

        $stmt = $conn->prepare($sql);


        if($stmt->execute()){
            $row = $stmt->fetchObject();

            if ($row){
               
                return (array(
                    "id" => $row->id,
                    "result" => "success"
                ));
            } else {
                return (array("result" => "error"));
            }
        }
    }

    function getEstacionar($veiculo){
        require('conexao.php');
        $sql = 'SELECT `id`, `data_inicio`, `data_fim` FROM `estacionar` WHERE veiculo = :veiculo AND ativo = 1';

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':veiculo', $veiculo);

        if($stmt->execute()){
            $row = $stmt->fetchObject();
            if ($row){
               
                return (array(
                    "id" => $row->id,
                    "inicio" => $row->data_inicio,
                    "fim" => $row->data_fim,
                    "result" => "success"
                ));
            } else {
                return (array("result" => "error"));
            }
        }
    }

    function getUsuarioByEmail($email){
        require('conexao.php');
        $sql = 'SELECT * FROM usuario WHERE email = :email';

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':email', $email);

        if($stmt->execute()){
            $row = $stmt->fetchObject();
            if ($row){
               
                return (array(
                    "id" => $row->id,
                    "nome" => $row->nome,
                    "email" => $row->email,
                    "cpf" => $row->cpf,
                    "result" => "success"
                ));
            } else {
                return (array("result" => "error"));
            }
        }
    }

	function getFuncionario($email, $senha){
		require('conexao.php');
		$sql = 'SELECT * FROM funcionario WHERE email = :email AND senha = :senha';

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);

        if($stmt->execute()){
            $row = $stmt->fetchObject();
            if ($row){
               
                return (array(
                    "id" => $row->id,
                    "nome" => $row->nome,
                    "email" => $row->email,
                    "cpf" => $row->cpf,
                    "nivel" => $row->nivel,
                    "result" => "success"
                ));
            } else {
                return (array("result" => "error"));
            }
        }
	}

	function getUsuarioByCPF($cpf){
		require('conexao.php');
		$sql = 'SELECT * FROM usuario WHERE cpf = :cpf';

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':cpf', $cpf);


        if($stmt->execute()){
            $row = $stmt->fetchObject();
            if ($row){
               
                return (array(
                    "id" => $row->id,
                    "nome" => $row->nome,
                    "email" => $row->email,
                    "cpf" => $row->cpf,
                    "result" => "success"
                ));
            } else {
                return (array("result" => "error"));
            }
        }
	}

	function setCredito($id_usuario, $id_funcionario, $tempo){
		require('conexao.php');
		$data = date('Y-m-d H:i:s');
		$sql = 'INSERT INTO `venda`(`id`, `funcionario`, `cliente`, `tempo`, `_data`) VALUES (null, :id_funcionario, :id_usuario, :valor, :data)';

		$stmt = $conn->prepare($sql);

		$stmt->bindValue(':id_usuario', $id_usuario);
		$stmt->bindValue(':id_funcionario', $id_funcionario);
		$stmt->bindValue(':valor', $tempo);
		$stmt->bindValue(':data', $data);

		if($stmt->execute()){           
            return (array(            
                "result" => "success"
            ));
        } else {
            return (array("result" => "error"));
        }        
	}

	function setTempoUsuario($id, $tempo){
		require('conexao.php');
	
		$sql = 'UPDATE `usuario` SET `tempo`= tempo + :tempo WHERE id = :id';

		$stmt = $conn->prepare($sql);

		$stmt->bindValue(':tempo', $tempo);
		$stmt->bindValue(':id', $id);

		if($stmt->execute()){           
            return (array(            
                "result" => "success"
            ));
        } else {
            return (array("result" => "error"));
        }    
	}

?>