<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Monori FAQ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="Monori">
	<meta name="description" content="Monori FAQ: Найди ответ на свой вопрос.">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="icon" href="./assets/cmmon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/awesomplete/1.1.4/awesomplete.min.css">
	<link rel="manifest" href="<?php $_SERVER['DOCUMENT_ROOT'].'/manifest.json'; ?>">
</head>
<body>
	<noscript>
		<style>
			#App_faq {
				display: none;
			}
			h1 {
				text-align: center;
				font-family: sans-serif;
			}
		</style>
		<h1>ВКЛЮЧИ JAVASCRIPT</h1>
	</noscript>
	<div id="App_faq">
<?php 
include './content/header.html';
if(!isset($_GET['q'])) {
	return header('Location: /faq?q=');
}
switch ($_GET['q']) {
	case 'chlist': 
    	include './content/chlist.html';
    break;

    case 'rq': 
    	include './content/rq.html'; 
    break;

    case 'new':
    	include './content/new-question.php';
    break;

    default: 
    	include './content/faq.php';
    break;
}
?>


	</div>
</body>
</html>