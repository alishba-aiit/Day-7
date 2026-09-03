<?php

require_once __DIR__ . '/vendor/autoload.php';

use Html\Table as HtmlTable;
use Database\Table as DbTable;

$html = new HtmlTable();
$html->display();
echo "<br>";

$db = new DbTable();
$db->get();