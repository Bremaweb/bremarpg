<?php
// load and return a webpage as a proxy to bypass same origin policy on IE. I can use headers to avoid same origin problems in other browsers

$pageContent = file_get_contents($_REQUEST['href']);

$fixedContent = str_replace("src=\"","src=\"http://www.ambergevents.com/",$pageContent);

echo $fixedContent;
?>