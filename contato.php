<?php

	$para="contato@rossicontabilidade.com";
	$assunto="Contato pelo site";

	$nome= $_POST['nome'];
	$email= $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem= $_POST['mensagem'];

	$corpo= "<strong>Mensagem de contato</strong><br><br>";
	$corpo.= "<strong>Nome: </strong> $nome";
	$corpo.= "<br><strong>Email: </strong> $email";
	$corpo.= "<br><strong>Assunto: </strong> $assunto";
	$corpo.= "<br><strong>Mensagem: </strong> $mensagem";

	$header= "Content-Type: text/html; charset= utf-8\n";
	$header.="From: $email Replay-to: $email\n";
	
	@mail($para,$assunto,$corpo,$header);

	echo'
	<script>
	alert("Mensagem enviada com sucesso!");
	window.location.href = "index.html";
	</script>
	';
?>