<?
$url = "";
switch ($_GET["service"]) {
	case "prefinery":
		$url = "https://rel8.prefinery.com/api/v2/betas/3233/testers.json?api_key=qtD2UZj5Unot6hYV43K7";
		$email = $_POST["email"];
		$raw = "{\"tester\":{\"email\":\"".$email."\"}}";
		$result = request("POST",$url,$raw,true);
		$resultObj = json_decode($result,true);
		if (isset($resultObj["errors"])) {
			$url .= "&email=" . $email;
			$result = request("GET",$url,null,true);
			$resultObj = json_decode($result,true);
			print $resultObj[0]["share_link"];
		} else print $resultObj["share_link"];
		break;
	case "rel8":
		$url = "http://www.rel8.to/v1/users/connect.json";
		$id = $_POST["id"];
		$token = $_POST["token"];
		$fields = "external_account={\"network\":\"facebook\",\"id\":\"" . ($id) . "\",\"token\":\"".($token)."\"}";
		request("POST",$url,$fields,false);
		print "OK";
		break;
}

function request($type, $url, $raw, $isJson) {
	//open connection
	$ch = curl_init();
	
	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE);
	if ($type == "POST") {
		curl_setopt($ch,CURLOPT_POST, 1);
		curl_setopt($ch,CURLOPT_POSTFIELDS, $raw);
	}
	if ($isJson) curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));
	//execute post
	$result = curl_exec($ch);
	
	//close connection
	curl_close($ch);
	return $result;
}
?>