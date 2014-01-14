<?

	function displayTheme(){
		if (isset($_COOKIE["theme"])) {
			switch ($_COOKIE["theme"]) {
				case 1:
	        		echo '<link rel="stylesheet" href="css/slate.css" />';
					break;
				case 2:
	        		echo '<link rel="stylesheet" href="css/cyborg.css" />';
					break;
				default:
			    	echo '<link rel="stylesheet" href="css/yeti.css" />';
					break;
			}
		}
		else {
			// set a new default cookie
		    // setcookie('theme', 0, 31536000 + time());
	        echo '<link rel="stylesheet" href="css/yeti.css" />';
		}
	}

?>