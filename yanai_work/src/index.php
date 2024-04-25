<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フラットテクノロジー</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>フラットテクノロジー</h1>
        <nav>
            <ul>
                <li><a href="company_infomation.php">会社について</a></li>
                <li><a href="service.php">サービス</a></li>
                <li><a href="#contact">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="contact">
            <h2>お問い合わせ</h2>
            <form action="submit_form.php" method="GET">
                <div>
                    <label for="name">名前:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">メールアドレス:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div>
                    <label for="message">メッセージ:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                
                <button type="submit">送信</button>
            </form>
        </section>
    </main>
    <footer>
        <p>© 2024 フラットテクノロジー. All rights reserved.</p>
    </footer>
</body>
</html>
