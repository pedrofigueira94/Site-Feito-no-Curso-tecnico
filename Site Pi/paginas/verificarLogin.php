<?php
	include ('conexao.php');
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$entrar = $_POST['entrar'];
	
	$criptografia = MD5($senha);
	
	if(isset($entrar)){
		$verifica = mysqli_query($conn,"SELECT * FROM 
		cadastro WHERE usuario  = '$login' AND senha = 
		'$criptografia'")
		or die("Erro ao buscar no banco");
		
		if(mysqli_num_rows($verifica)<=0){
			echo "<script language='javascript' type='text/javascript'>
			alert('Não foi possível fazer login. Usuário/senha incorretos');
			window.location.href='login.php';</script>";			
			die();
		}else{
			
			session_start();
			$_SESSION['nome_usu_sessao']= $login;
			header("Location:../index.php");
		}
		
	}







?>