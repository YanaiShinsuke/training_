<?php

$host = 'mysql';
$dbname = $_ENV['MYSQL_DATABASE'];
$user = 'root';
$password = $_ENV['MYSQL_ROOT_PASSWORD'];

# 新しいPDOオブジェクトを作成し、MySQLデータベースに接続
$db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $user, $password);

# SQL　文を実行
$stmt = $db->prepare('SELECT * FROM question_table');
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $result) {
    echo $result['id'] . '. ' . $result['name'] . ' ' . $result['email'] . ' ' . $result['message']. PHP_EOL;
}
