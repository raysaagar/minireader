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
		<!-- Start of links: #home -->
		<div data-role="page" id="home" data-theme="a">

			<div data-role="header">
				<h1>The Straight Dope Mini Reader</h1>
			</div><!-- /header -->

			<div data-role="content" data-theme="a">	

<?
		
	include("simplehtmldom/simple_html_dom.php");
	
	$internalURL = "reader.php?";
	
	$html = file_get_html("http://www.straightdope.com");
	
	$todaysQuestion = $html->find('div[id=todays_question] div[class=teaser] a',0);
	$questionLink = $todaysQuestion->attr['href'];
	$questionText = $todaysQuestion->plaintext;
	
	
	echo "<h2>Today's Question</h2>";
	echo "<p>";
	print('<a href="' . $internalURL . "link=". $questionLink . '" data-role="button" data-theme="a">' . $questionText . '</a>');	
	echo "</p>";
	//var_dump($todaysQuestion);
	echo "<hr>";
	echo "<h2> Recent Additions </h2>";
	
	$recentQuestions = $html->find('div[id=column_one] div[class=item] div[class=teaser] a');
	
	foreach($recentQuestions as $item){
		$itemLink = $item->attr['href'];
		$itemText = $item->plaintext;
		echo "<p>";
		print('<a href="' . $internalURL . "link=". htmlentities($itemLink) . '"data-role="button" data-theme="a">' . $itemText . '</a>');	
		echo "</p>";
	
	
	}
	
	
	// var_dump($recentQuestions);
	




?>
		
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Home</h4>
	</div><!-- /footer -->
</div><!-- /page two -->




	</body>
</html>	
