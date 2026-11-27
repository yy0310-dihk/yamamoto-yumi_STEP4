<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>フォーム入力</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!-- タイトル -->
        <h1>フォーム入力</h1>

        <!-- フォーム -->
        <form action="confirm.php" method="post">

            <!-- 名前　-->
            <label for="username">名前：</label>
            <input type="text" id="username" name="username" required><br><br>

            <!-- 年齢 -->
            <label for="age">年齢：</label>
            <input type="number" id="age" name="age" min="0" max="150" required><br><br>

            <!-- 電話番号 -->
            <label for="phone">電話番号：</label>
            <input type="tel" id="phone" name="phone" required><br><br>

            <!-- メールアドレス -->
            <label for="email">メールアドレス：</label>
            <input type="email" id="email" name="email" required><br><br>

            <!-- 住所 -->
            <label for="address">住所：</label>
            <input type="text" id="address" name="address" required><br><br>

            <!-- 質問 -->
            <label for="question">質問：</label>
            <textarea id="question" name="question" rows="4" required></textarea><br><br>

            <!-- 性別 -->
            <label for="gender">性別：</label>
            <select id="gender" name="gender" required>
                <option value="male">男性</option>
                <option value="female">女性</option>
                <option value="other">その他／回答しない</option>
            </select><br><br>

            <!-- 送信ボタン -->
            <button type="submit">送信</button>
        
        </form>
    </body>
</html>