<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Kata e-mail</title>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<style> article, aside, figure, footer, header, hgroup, menu, nav, section { display: block; } </style>
	
</head>
<body>
	<div class="container">
		<?php
	
			error_reporting(0);
			$destinatario='loli_ana@hotmail.com';
			$assunto=$_POST['Assunto'];
			$corpo=$_POST['Mensagem'];
	
	
	
			if (mail ($destinatario,$assunto ,$corpo )):
	
	
	
		?>
	
	
		<p>Parabéns, e-mail enviado!</p>
	
		<?php else: ?>
	
		<p>Foi mals...chora...</p>
		
		<?php endif; ?>
		
	</div>
</body>
</html>


