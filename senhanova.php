<?php

$conexao=mysqli_connect('localhost','root','123','tbusuarios') or die(mysqli_error());


if(isset($_POST['nsenha']) && isset($_POST['cpf'])){
	$cpf = $_POST['cpf'];
	$nsenha = $_POST['nsenha'];
	$nsenha = md5($nsenha);
	$cpf = md5($cpf);

$up = mysqli_query($conexao, "UPDATE usuarios SET senha = '$nsenha' WHERE cpf='$cpf'");
		
	 if($up){ 
          echo"<script language='javascript' type='text/javascript'>alert('Senha alterada com sucesso!');window.location.href='../index2.php'</script>";
        }else{
        	echo"<script language='javascript' type='text/javascript'>alert('Senha não alterada com sucesso!');window.location.href='./senhanova.php'</script>";
        }

}

?>
