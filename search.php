<?php
# get the from the user input form perform basic validation
$site = mb_substr($_GET['site'],0,8);
$terms = mb_substr($_GET['terms'],0,25);

if ($site == "google")
    header('Location: https://www.google.com/search?q=' . $terms);
elseif ($site == "googlei")
    header('Location: https://www.google.com/search?tbm=isch&q=' . $terms);
elseif ($site == "duck")
    header('Location: https://duckduckgo.com/?q=' . $terms);
elseif ($site == "wiki")
    header('Location: https://www.wikipedia.org/wiki/' . $terms);
?>