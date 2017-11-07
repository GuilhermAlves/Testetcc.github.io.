<?php 
	
	
		$latitude = $_GET["latitude"];
		$longitude = $_GET["longitude"];
		$nome = $_GET["nome"];
		
		
		//conecta com o banco de dados
		$con = new mysqli("localhost","root","","bancoDados");
		
		 //seleciona campos
		$sql = "insert into coordenadas (latitude, longitude,nome) values ('$latitude', '$longitude', '$nome')";
		
		
		if($result = $con->query($sql)) //executa sql
			
			
			echo "inserido!";		
	    else
			 echo "Erro ao inserir";
		 
		$con->close(); 
?>