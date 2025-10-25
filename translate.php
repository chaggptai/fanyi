<?php
header('Content-Type: text/plain; charset=utf-8');

$text = $_POST['text'] ?? '';
$from = $_POST['from'] ?? 'zh';
$to   = $_POST['to'] ?? 'ug';

if (trim($text) === '') {
    echo "";
    exit;
}

// TODO: Replace the following placeholder with real translation logic.
// Example: call external API using cURL with your credentials.
$result = "[translated $from->$to] " . $text;

echo $result;
