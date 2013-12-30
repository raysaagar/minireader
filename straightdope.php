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
	</head>

	<body>

	    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="index.php">Mobile MiniReader - The Straight Dope</a>
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
		        <a href="index.php" class="btn btn-primary btn-lg" role="button" style="font-variant:small-caps;">Home &laquo;</a>
		        The Straight Dope
	        </h1>

	      </div>
	    </div>
<?
		
	include("simplehtmldom/simple_html_dom.php");
	
	$internalURL = "reader.php?";
	$articleOrigin = "straightdope";
	
	$html = file_get_html("http://www.straightdope.com");
	
	$todaysQuestion = $html->find('div[id=todays_question] div[class=teaser] a',0);
	$questionLink = $todaysQuestion->attr['href'];
	$questionText = $todaysQuestion->plaintext;
	

	echo "<div class='container'>";
	echo "<div class='jumbotron'>";

	// display today's question
	echo "<h2 style='font-variant:small-caps;'>Today's Question</h2>";
	echo "<p>";
	// read button
	print('<a href="' . $internalURL . "origin=" . $articleOrigin ."&link=". htmlentities($questionLink) . '" class="btn btn-primary btn-sm" role="button"> Read &raquo; </a>  ');
	print('<span class="text-success">' . $questionText . '</span>');	
	echo "</p>";
	echo "<hr>";

	// other articles
	echo "<h2 style='font-variant:small-caps;'> Recent Additions </h2>";
	$recentQuestions = $html->find('div[id=column_one] div[class=item] div[class=teaser] a');
	
	foreach($recentQuestions as $item){
		$itemLink = $item->attr['href'];
		$itemText = $item->plaintext;
		echo "<p>";
		print('<a href="' . $internalURL . "origin=" . $articleOrigin ."&link=". htmlentities($itemLink) . '" class="btn btn-primary btn-sm" role="button"> Read &raquo; </a>  ');
		print('<span class="text-success">' . $itemText . '</span>');	
		echo "</p>";
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
