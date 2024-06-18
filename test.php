<?php
include('config/config.inc.php');

$files = scandir(_PS_ROOT_DIR_.'/administration/import/', SCANDIR_SORT_DESCENDING);

foreach ($files as $f) {
    if (strpos($f, '.csv') > 0)
        break;    
}
echo $f;
