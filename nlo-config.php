<?php
// ################## CONFIGURAÇÕES DE CHECKOUT ################

// $gateway_api = "https://app.duttyfy.com.br/api-pix/sua_chave_encriptada";
// Aqui é minha chave pra testes. Deixo aqui comentada pra quando preciso alterar algo e testar o funil ou checkout
//$gateway_api = "https://app.duttyfy.com.br/api-pix/2pgY-WBQv6oTv_8cWme9qJNDTOOn5PN1G1rx0s_B00AARfq1Bjkb5IJ2nngU734lizHgFIQqoeS7YofkjrgObQ"; //NLO
$gateway_api = "https://app.duttyfy.com.br/api-pix/YmLA7f7Al_XhY8rTacC6YJd-0JkHBqE5rCXhLsA68mTsWs2g3FIUQ7wtWmjKkAG_TG-4h-MRQYfU4a0a7LJwDA"; //hewertonfilho25

$icon_url = ""; //url ou caminho de favicon



//configuração do front
if(isset($front) && $front == 1){
	$oferta = "dolly configuravel";
	$upsell = "../obrigado"; //caminho ou URL pra onde o usuário é enviado após o pagamento

	if(isset($_GET['valor']) && !empty($_GET['valor']) && $_GET['valor'] >= 5){
		$valor = (float)$_GET['valor'];  // Resultado: 51.99 por exemplo
	} else {
		// se o valor não existir ou for vazio ou menor q 5, padrão é 20
		$valor = 20;
	};

	$logo_ativo = 1;
	$logo_url = "./images/logo.svg";
    $checkoutTitulo = "DOE AGORA 💚"; //titulo que aparece no checkout
    $checkoutDesc = "Sua contribuição ajuda muito!"; //$descrição que aparece no checkout
};

$nome_front = "Opção Selecionada";


// ################## CONFIGURAÇÕES DE TRACKEAMENTO ################

//aqui dentro, coloque seu código do pixel utmify. tecnicamente só precisa trocar ali na linha 16
$pixel_scripts = '
<script>
  window.pixelId = "68ceaec8ca501ead3c39fc91";
  var a = document.createElement("script");
  a.setAttribute("async", "");
  a.setAttribute("defer", "");
  a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
  document.head.appendChild(a);
</script>
';

$pixel_scripts = $pixel_scripts . '<script
  src="https://cdn.utmify.com.br/scripts/utms/latest.js"
  data-utmify-prevent-xcod-sck
  data-utmify-prevent-subids
  async
  defer
></script>
';

$track_fb_pixel = 1; //0 ou 1, pra marcação do pixel fb, fora da utmify
$fb_pixel = "1806544813284370"; //pixel fb
?>