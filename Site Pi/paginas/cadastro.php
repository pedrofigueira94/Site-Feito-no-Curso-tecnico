<?php
	
	include ('conexao.php');
	
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$sexo = $_POST['sexo'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$celular = $_POST['celular'];
	$datanasc = $_POST['data'];
	$cidade = $_POST['cidade'];
	$endereco = $_POST['endereco'];
	$estado = $_POST['estado'];
	$subFavorito = $_POST['favorito'];
	$musicaFavorita = $_POST['musica'];
	$artistaFavorito = $_POST['artista'];
	$melhorShow = $_POST['show'];
	$comecouGostar = $_POST['gostar'];
	$influenciouGostar = $_POST['influencia'];
	$sentimentoSom = $_POST['sentimento'];
	$opiniao = $_POST['opiniao'];
	$Pontue = $_POST['pontue'];
	$conteudoFaltou = $_POST['faltou'];
	
	$criptografia = MD5 ($senha);
	
	
	$sql = "INSERT INTO cadastro(nome, sobrenome, sexo, email, usuario, senha, 
	celular, dataNasc, cidade, endereco, estado, subfavorito, musicafavorita, artistafavorito, melhorshow, comecouGostar, influenciouGostar, 
	sentimentoSom, opiniao, pontuacao, conteudoFaltou)VALUES('$nome','$sobrenome','$sexo','$email','$usuario','$criptografia','$celular','$datanasc',
	'$cidade','$endereco','$estado','$subFavorito','$musicaFavorita','$artistaFavorito','$melhorShow','$comecouGostar','$influenciouGostar','$sentimentoSom',
	'$opiniao','$Pontue','$conteudoFaltou')";
	
	if($conn->query($sql)==true){
		echo "<script language='javascript' type='text/javascript'>
			alert('cadastro realizado com sucesso!');
			window.location.href='login.php';</script>";			
		die();
	}else{
		echo "Erro: ".$sql."<br/>".$conn->error;
		echo "<br/>";
		echo "Não foi possível realizar o cadastro!";
	}
	
	$conn->close();
?>