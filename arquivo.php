<?php
 include "conexao.php";
 
 	$vnome=$_POST["nome"];
	$vdatanas=$_POST["dt_nasc"];
	$vsexo=$_POST["sexo"];
	$vcpf=$_POST["cpf"];
	$vrg=$_POST["rg"];
	$vestadocivil=$_POST["estado_civil"];
	$vtelefone=$_POST["telefone"];
	$vtelefone2=$_POST["telefone_2"];
	$vendereco=$_POST["endereco"];
	$vnumero=$_POST["numero"];
	$vbairro=$_POST["bairro"];
	$vpontoref=$_POST["ponto_ref"];
	$vcidade=$_POST["cidade"];
	$vcep=$_POST["cep"];
	$vtemporesi=$_POST["tempo_resi"];
	$vtipo=$_POST["tipo"];
	$vvalor=$_POST["preco"];
	$vcad=$_POST["cad"];
	$vpcd=$_POST["pcd"];
	$vpcdinfo=$_POST["pcd_info"]



//	$vnomed=$_POST["nomedepen"];
//	$vidaded=$_POST["idaded"];
//	$vparentescod=$_POST["parentescod"];
//	$vprofissaod=$_POST["profissaod"];
//	$vsalariod=$_POST["salariod"];

$sql1="INSERT INTO dados_pessoais VALUES('$vcpf')";
mysqli_query($conexao,$sql1);
	
//	$sql1="INSERT INTO dados_pessoais VALUES('$vcpf','$vnome','$vsexo','$vrg','$vdatanas','$vestadocivil','$vendereco','$vnumero','$vbairro','$vpontoref','$vcidade','$vcep','$vtelefone','$vtelefone2','$vtemporesi','$vtipo','$vvalor','$vcad','$vpcd','$vpcdinfo')";
//	mysqli_query($conexao,$sql1);
	
//	$sql2="INSERT INTO dependentes(nome,idade,parentesco,profissao,salario) VALUES ('$vnomed',$vidaded,'$vparentescod','$vprofissaod',$vsalariod)";
//	mysqli_query($conexao,$sql2);

	$linhas=mysqli_affected_rows($conexao);

	if ($linhas == 1){
		echo "Registro gravado com sucesso <br/>";
	} else {
		echo "Falha na gravação do registro <br/>";
	}

	mysqli_close($conexao);

?>






<!--
<
	$vnome=$_POST["nome"];
	$vdatanas=$_POST["data_nasc"];
	
	echo "Nome: ".$vnome."<br/>Data de Nascimento: ".$vdatanas."<br/>"
?>
-->
