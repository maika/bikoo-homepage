<?php
if (in_category('4')||in_category('13')) {
	include (TEMPLATEPATH . '/single_news.php');
}
elseif (in_category('35')||in_category('36')) { 
	include (TEMPLATEPATH . '/single_project.php');
}
else { 
	include (TEMPLATEPATH . '/single_project.php');
}
?>
