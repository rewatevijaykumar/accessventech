<?php
// Set the path for the html directory. We are already in the includes directory by this point.
// set_include_path(__DIR__.':../res/');
// set_include_path(__DIR__.':../res/');
set_include_path('res/');

// Draw the *full* page (not the static HTML - this is grabbed straight from Active CSS).
// include 'topbar.html';
include 'header.php';
include 'navbar.php';
// include $pageInclude.'.html';
foreach ($pageIncludes as $pageInclude){
    include $pageInclude.'.html';
}
include 'footer.php';
include 'topbar.html';

?>