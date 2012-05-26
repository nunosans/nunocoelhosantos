<?php

function redirect() {

	$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	
	if		(substr($lang, 0, 2) == 'pt')	{header("Location: /en/");} // Portuguese
	elseif	(substr($lang, 0, 2) == 'jp')	{header("Location: /en/");} // Japonese
	elseif	(substr($lang, 0, 2) == 'es')	{header("Location: /en/");} // Spanish
	elseif	(substr($lang, 0, 2) == 'ch')	{header("Location: /en/");} // Chinese
	elseif	(substr($lang, 0, 2) == 'fi')	{header("Location: /en/");} // Finnish
	else									{header("Location: /en/");} // English

};
redirect();

?>
