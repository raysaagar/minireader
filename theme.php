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
	        echo '<link rel="stylesheet" href="css/yeti.css" />';
		}
	}

?>