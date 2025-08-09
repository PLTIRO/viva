<?php
$cloakerLink = "https://borainvestir.b3.com.br/objetivos-financeiros/comprei-um-presente-pela-internet-e-nao-recebi-o-que-fazer/";

function getIPAddress() {
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else{
		$ip = $_SERVER['REMOTE_ADDR'];
    };
	return $ip;
}

$ip = getIPAddress();

$url = "http://ip-api.com/json/".$ip."";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_ENCODING,  'deflate');
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_REFERER, $url);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);

$result = curl_exec($ch);
$result = json_decode($result, true);

if (curl_errno($ch)) {
	echo 'Erro:' . curl_error($ch);
};
curl_close($ch);

if($result['status'] == 'success' && $result['country'] !== 'Brazil'){
	?>
	<script>window.location.href = "<?php echo $cloakerLink; ?>";</script>
	<?php
	exit();
};
?>