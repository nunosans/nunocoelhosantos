<?php

/**
 * Redirect to a differnet page based on the browser language.
 * This system is good to serve the website on a language
 * that the user speaks and/or has preference for.
 */
function redirect() {
  /* Gather the browser language */
  $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

  /* Based on the first two letters from the browser language, forward to the right location */
  // Portuguese
  if (substr($lang, 0, 2) == 'pt') {
    header("Location: /pt/");
  // English (Fallback)
  } else {
    header("Location: /en/");
  }
};
redirect();

?>