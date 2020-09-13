<?php
// About me page. This is the first page that the web server finds.
// $pageInclude = 'about-us';
$pageTitle = 'About us';

$pageIncludes = array(
    'about-us',
    'about-list-section',
    'counts'
);

// Output the page.
include 'common/page-output.php';

?>