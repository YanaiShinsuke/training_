<?php
// submit_form.php
try {
    # 接続用変数を定義
    $host = 'mysql';
    $dbname = $_ENV['MYSQL_DATABASE'];
    $user = 'root';
    $password = $_ENV['MYSQL_ROOT_PASSWORD'];

    # 新しいPDOオブジェクトを作成し、MySQLデータベースに接続
    $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8mb4", $user, $password);
}   catch (PDOException $e) {
    echo "データベース接続エラー　:".$e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // index.phpで入力されたデータを取得
    $name = $_GET["name"];
    $email = $_GET["email"];
    $message = $_GET["message"];

    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        // Handle error here
        exit('Please fill in all required fields.');
    }

    // Process the form data
    // ... (Your processing logic here)
    $sql = "INSERT INTO question_table (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $db->prepare($sql);

    // 挿入する値を配列に格納
    $params = array(':name' => $name, ':email' => $email, ':message' => $message);
    // SQLの実行
    $stmt->execute($params);

    // Redirect to the thank you page
    header('Location: thankyou.php');
    exit;
}
?>
