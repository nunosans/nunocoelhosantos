<?php

/*
 * Redirect to a differnet page based on the browser language.
 * This system is good to serve the website on a language
 * that the user speaks and/or has preference for.
 */
 
function redirect() {
	
	/* Gather the browser language */
	$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	
	/* Based on the first two letters from the browser language, forward to the right location */
	if		(substr($lang, 0, 2) == 'ch')	{header("Location: /en/");} // Chinese
	elseif	(substr($lang, 0, 2) == 'fi')	{header("Location: /en/");} // Finnish
	elseif	(substr($lang, 0, 2) == 'de')	{header("Location: /en/");} // German
	elseif	(substr($lang, 0, 2) == 'jp')	{header("Location: /en/");} // Japanese
	elseif	(substr($lang, 0, 2) == 'pt')	{header("Location: /en/");} // Portuguese
	elseif	(substr($lang, 0, 2) == 'es')	{header("Location: /en/");} // Spanish
	else									{header("Location: /en/");} // English (Fallback)

};
redirect();

?>