<?
	
	// $handle = popen("parser.py","r");
	
	$command = "python parser.py";

	
	$output;
	//echo exec("python parser.py", $output, $ret_code);
	exec($command,$output);
	var_dump($output);
	




?>