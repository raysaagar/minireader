<html>

	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Mobile MiniReader</title> 
		<link rel="stylesheet" href="css/yeti.css" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->
	    <?
    		$link = html_entity_decode($_GET["link"]);
    		$origin = html_entity_decode($_GET["origin"]);
	    ?>
	</head>

	<body>

	    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <a class="navbar-brand" href="index.php">Mobile MiniReader - Article Viewer</a>
	        </div>
	        <!-- things to collapse -->
	        <div class="navbar-collapse collapse">
	        	<ul class="nav navbar-nav">
	            	<li class="active"><a href="index.php">Home</a></li>
	          	</ul>
	        </div><!--/.navbar-collapse -->
	      </div>
	    </div>

	    <!-- Main jumbotron for a primary marketing message or call to action -->
	    <div class="jumbotron">
	      <div class="container">
	        <h1 style="font-variant:small-caps;">
	        	<!-- origin is where we came from -->
		        <a href=<?echo $origin . ".php" ?> class="btn btn-primary btn-lg" role="button" style="font-variant:small-caps;">Back &laquo;</a>
		        <?
		        	// place the correct header
					switch ($origin) {
					    case "straightdope":
					        echo "Article - The Straight Dope";
					        break;					
					}
		        ?>
	        </h1>

	      </div>
	    </div>
	
<?

	include("simplehtmldom/simple_html_dom.php");
	
	$nl = "<br>";	
	
	echo "<div class='container'>";
	echo "<div class='jumbotron'>";

	$html = file_get_html($link);
	$article = $html->find('div[id=article]',0);

	// TODO - parse out any "descriptions" first, then go through question

	echo "<h2>";
	echo $article->children(0)->plaintext;
	echo "</h2>";
	
	// get question, question byline, and question byline
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
	
	// get answers
	$answer = $article->find('p[class="answer"]');
	
	foreach($answer as $line){
		
		echo $line;
	
	}

	echo "</div>"; // jumbotron
	echo "</div>"; // container

	
?>


		<!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	</body>
</html>	
