<?
	// set the theme via get and then return
	$url = $_SERVER['HTTP_REFERER'];
    setcookie('theme', $_GET["theme"], 31536000 + time());
    header("Location: $url");
    exit;
?>