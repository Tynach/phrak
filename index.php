<?php error_reporting(E_ALL); ini_set('display_errors',1);

$page = !empty($_GET['_page']) ? $_GET['_page'] : 'index.php';
$title = 'Website Name';
if (!file_exists("./pages/$page")) { $page = '404.php'; }

ob_start();
include("./pages/{$page}");
$content = ob_get_clean();

include("./theme/index.php");