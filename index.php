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
              <a class="navbar-brand" href="#">Mobile MiniReader</a>
            </div>
            <!-- things to collapse -->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="oldreader/index.php">Old Reader</a></li>
                </ul>
            </div><!--/.navbar-collapse -->
          </div>
        </div>


        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"><button type="button" class="btn btn-primary" style="font-variant:small-caps;">Light Theme (Yeti)</button></div>
                    <div class="col-md-4"><button type="button" class="btn btn-primary" style="font-variant:small-caps;">Gray Theme (Slate)</button></div>
                    <div class="col-md-4"><button type="button" class="btn btn-primary" style="font-variant:small-caps;">Dark Theme </button></div>
                </div>
            </div>
            <hr>

            <div class="container">
                <h1 style="font-variant:small-caps;">The Straight Dope</h1>
                <p></p>
                <p><a href="straightdope.php" class="btn btn-primary btn-lg" role="button" style="font-variant:small-caps;">Read &raquo;</a></p>
            </div>
        </div>
<?
        
    // include("simplehtmldom/simple_html_dom.php");
    
    // $internalURL = "reader.php?";
    
    // $html = file_get_html("http://www.straightdope.com");
    
    // $todaysQuestion = $html->find('div[id=todays_question] div[class=teaser] a',0);
    // $questionLink = $todaysQuestion->attr['href'];
    // $questionText = $todaysQuestion->plaintext;
    
    
    // echo "<h2>Today's Question</h2>";
    // echo "<p>";
    // print('<a href="' . $internalURL . "link=". $questionLink . '" data-role="button" data-theme="a">' . $questionText . '</a>');    
    // echo "</p>";
    //var_dump($todaysQuestion);
    // echo "<hr>";
    // echo "<h2> Recent Additions </h2>";
    
    // $recentQuestions = $html->find('div[id=column_one] div[class=item] div[class=teaser] a');
    
    // foreach($recentQuestions as $item){
    //  $itemLink = $item->attr['href'];
    //  $itemText = $item->plaintext;
    //  echo "<p>";
    //  print('<a href="' . $internalURL . "link=". htmlentities($itemLink) . '"data-role="button" data-theme="a">' . $itemText . '</a>');  
    //  echo "</p>";
    // }
?>
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html> 
