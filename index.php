<?php

function redirect() {

	$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	
	if		(substr($lang, 0, 2) == 'pt')	{header("Location: /pt/");} // Portuguese
	elseif	(substr($lang, 0, 2) == 'jp')	{header("Location: /jp/");} // Japonese
	elseif	(substr($lang, 0, 2) == 'es')	{header("Location: /es/");} // Spanish
	elseif	(substr($lang, 0, 2) == 'ch')	{header("Location: /ch/");} // Chinese
	else									{header("Location: /en/");} // English

};
redirect();

?>
