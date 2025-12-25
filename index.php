<?php
require_once 'config/config.php';
require_once 'config/database.php';

$page = $_GET['page'] ?? 'home';

$file = "pages/$page.php";

include 'includes/header.php';

if (file_exists($file)) {
    include $file;
} else {
    echo "<h2>404 Page Not Found</h2>";
}

include 'includes/footer.php';
