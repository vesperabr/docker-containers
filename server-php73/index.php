<?php if (isset($_GET['info'])) {phpinfo(); die();} $domain = $_SERVER['HTTP_HOST']; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title><?= $domain ?></title>
	<style>
		body {margin: 0; font-family: monospace;}
		div {display: flex; width: 100vw; height: 100vh; justify-content: center; flex-direction: column; text-align: center;}
		h1 {margin: 0 0 10px 0; text-align: center; line-height: 20px;}
		a {position: relative; top: -1px; margin-left: 6px; padding: 2px 4px; border-radius: 3px; background: #99c; color: white; font-size: 12px; font-weight: normal; text-decoration: none; vertical-align: middle;}
	</style>
</head>
<body>
	<div><h1><?= $domain ?><a href="?info">info</a></h1></div>
</body>
</html>