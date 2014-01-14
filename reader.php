<? require_once("theme.php"); ?>
<html>

	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Mobile MiniReader</title> 

        <? displayTheme(); ?>

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
                    <li class="active"><a href="changetheme.php?theme=0">Light Theme</a></li>
                    <li class="active"><a href="changetheme.php?theme=1">Gray Theme</a></li>
                    <li class="active"><a href="changetheme.php?theme=2">Dark Theme</a></li>
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
	
	if ($origin == "straightdope"){

		$html = file_get_html($link);
		$article = $html->find('div[id=article]',0);

		// parse out any "descriptions" first, then go through question
		$desc = $article->find('div[id=description]',0);
		if ($desc != null){
			echo "<h4>";
			echo $desc->plaintext;
			echo "</h4>";
		}

		$questionTitle = $article->find('h1',0);
		echo "<h2>";
		echo $questionTitle->plaintext;
		echo "</h2>";

		// get question salutation, question text, and question byline
		$i = 1;
		$hr = false;
		while(true){

			if ($article->children($i) == null)
				break;

			// print dates
			if ($article->children($i)->getAttribute('class') == "date"){
				echo $article->children($i);
			}
			// print question related data
			if (($article->children($i)->getAttribute('class') == "question salutation") ||
			   ($article->children($i)->getAttribute('class') == "question") || 
			   ($article->children($i)->getAttribute('class') == "question byline")) {
				if (!$hr) {
					echo "<hr>";
					$hr = true;
				}
				echo $article->children($i);
		   	}
		   	// print answer related data
		   	if (($article->children($i)->getAttribute('class') == "answer salutation") ||
			   ($article->children($i)->getAttribute('class') == "answer") || 
			   ($article->children($i)->getAttribute('class') == "answer byline")) {
				if ($hr) {
					echo "<hr>";
					$hr = false;
				}
				echo $article->children($i);
		   	}
		   	$i++;
		}

	}
	else {
		echo "Article wasn't found!";
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
