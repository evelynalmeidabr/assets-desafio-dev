<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Desafio ContaAzul</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="_css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="_css/estilo.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

	<link rel="shortcut icon" href="https://contaazul.com/wp-content/themes/assets/global/layout/images/favicon.ico?v=31102017" />
</head>
<body>
	<?php
	$vnome=$_GET['fnome'];
	$vemail=$_GET['femail'];
	$dados=$vnome . "," . $vemail . ";";

	$arquivo=fopen("dados.txt", "a");
	fwrite($arquivo, $dados);

	fclose($arquivo);
	?>

	<header id="topo">
		<div class="container text-center my-auto float-center">
			<div class="row">
				<div class="col">
					<img src="_img/logo_branca.svg" alt="Logo ContaAzul" class="img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h1>Obrigado por se inscrever,<br/>em breve receberá novidades!</h1><br/>
					<h6>Compartilhe essa página com amigos para atenderem ao evento com você.</h6>
				</div>
			</div> 

			<div class="row">
				<div class="col form-group">
					<button class="btn btn-confirmacao"><i class="fab fa-facebook-f"></i>&nbsp;&nbsp;&nbsp;Compartilhar</button>
					<button class="btn btn-confirmacao"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;Mandar e-mail</button>
				</div>
			</div>
		</div>
	</header>
	<main id="servicos">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 text-center">
				<h3>Sua empresa precisa de controle financeiro?<br/> Centralize tudo em um único sistema</h3>
			</div>
		</div> <br/>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 text-center tumb">
				<img src="_img/contasapagar.svg">
				<h4>Contas a pagar e a receber</h4>
				<div>Mantenha as contas a pagar e a receber sempre atualizadas.</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 text-center tumb">
				<img src="_img/notafiscal.svg">
				<h4>Nota fiscal de produto e serviço</h4>
				<div>Emissor de nota fiscal integrado com o processo de vendas.</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 text-center tumb">
				<img src="_img/boleto.svg">
				<h4>Boleto de cobrança</h4>
				<div>Emita e envie boletos registrados para os seus clientes em poucos segundos.</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 text-center tumb">
				<img src="_img/fluxodecaixa.svg">
				<h4>Fluxo de caixa diário e mensal</h4>
				<div>Conheça as movimentações de entradas e saídas, geração de caixa e o saldo do caixa por período.</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 text-center tumb">
				<img src="_img/integracao_bancaria.svg">
				<h4>Integração bancária</h4>
				<div>A integração bancária sincroniza lançamentos do ContaAzul com o seu banco.</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 text-center tumb">
				<img src="_img/integracao_contabil.svg">
				<h4>Integração contábil</h4>
				<div>Gaste menos tempo com a burocracia contábil. Envie seus documentos digitalmente e interaja de forma ágil com o contador.</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 text-center tumb">
				<img src="_img/conciliacao.svg">
				<h4>Conciliação bancária</h4>
				<div>Economize até 20h por mês com a Conciliação Bancária do ContaAzul.</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 text-center tumb">
				<img src="_img/faturamentoporcliente.svg">
				<h4>DRE gerencial</h4>
				<div>Relatório de receitas, custos e despesas para entender a saúde financeira da empresa.</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 text-center tumb">
				<img src="_img/dre.svg">
				<h4>Frente de caixa online</h4>
				<div>Solução de frente de caixa online para varejo totalmente integrada à plataforma de gestão ContaAzul.</div>
			</div>
		</div>
	</div>
	</main>
</body>
<footer id="rodape">
	<div class="container">
		<div class="row">
			<div class="col text-left">
				<img src="_img/client-conta-azul.png">
			</div>
			<div class="col-7 text-center">
				<span>&copy; 2016 Direitos Reservados - </span>
				<span><a href="#">Termos de Uso - </a> <a href="#">Política de Privacidade</a></span>
			</div>
			<div class="col text-right align-top">
				<a href="#"><i class="fab fa-facebook-f btn-media"></i></a>
				<a href="#"><i class="fab fa-twitter btn-media"></i></a>
				<a href="#"><i class="fab fa-linkedin-in btn-media"></i></a>
				<a href="#"><i class="fab fa-youtube btn-media"></i></a>
			</div>
		</div>
	</div>
</footer>
</html>