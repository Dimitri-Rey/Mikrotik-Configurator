<?php
if (isset($_GET['config'])) {
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="mikrotik_config.txt"');
    echo $_GET['config'];
    exit;
}
header('Location: config_mikrotik.php');
?> 