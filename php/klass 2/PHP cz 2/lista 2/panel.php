<?php
session_start();

if (!isset($_SESSION["user"])) {
    echo "Brak dostępu";
    exit;
}

echo "Witaj w panelu, " . $_SESSION["user"];
?>