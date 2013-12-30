<html>

	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>The Straight Dope Mini Reader</title> 
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
		<link rel="stylesheet" href="css/themes/mrVersion1.min.css" />
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
	</head>

	<body>

	
		<!-- Start of reader: #reader -->
		<div data-role="page" id="reader" data-theme="a">

			<div data-role="header">
				<h1>The Straight Dope Mini Reader</h1>
			</div><!-- /header -->

			<div data-role="content" data-theme="a">	
   <p><a href="index.php" data-direction="reverse" data-role="button" data-theme="a">Back </a></p>					
	
<?

	include("simplehtmldom/simple_html_dom.php");
	
	$nl = "<br>";
	$link = html_entity_decode($_GET["link"]);
	
	//echo $link;
	
	$html = file_get_html($link);
	
	
	$article = $html->find('div[id=article]',0);
	
	// echo $article->children(1)->getAttribute('class');
	
	echo "<h2>";
	echo $article->children(0);
	echo "</h2>";
	
	$i = 1;
	while(true){
	
		if(($article->children($i)->getAttribute('class') == "answer salutation") ||
			($article->children($i)->getAttribute('class') == "answer")){
				break;
			}
		else{
			echo $article->children($i);
		}
		if ($i == 10){
			break;
		}
		$i++;
	}
	
	echo "<hr>";
	
	$answer = $article->find('p[class="answer"]');
	
	foreach($answer as $line){
		
		echo $line;
	
	}
	
?>
		<p><a href="index.php" data-direction="reverse" data-role="button" data-theme="a">Back </a></p>	
		
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Reader</h4>
	</div><!-- /footer -->
</div><!-- /page two -->



	</body>
</html>	
