<?php

$limit = 10; //s

header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Warsaw');

if (ob_get_level() == 0) {
	ob_start();
}

echo <<<CSS
<style>
.date {
	position: absolute; background: white;
}
</style>
CSS;

echo '<h1>PHP-Clock</h1>';

set_time_limit($limit);
for($i=0; $i<=$limit; $i++){

	echo '<div class="date">';
	echo date('d-m-Y H:i:s');
	echo '</div>';

	ob_flush();
	flush();
	sleep(1);
}

echo '<br><br>End of script';

ob_end_flush();