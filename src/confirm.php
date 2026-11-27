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

        <!-- PHP -->
        <?php
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $username = $_POST["username"];
            $age = $_POST["age"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $question = $_POST["question"];
            $gender = $_POST["gender"];

        //バリエーション
        if (!preg_match('/^[\p{Hiragana}\p{Katakana}\p{Han}\p{Latin}]+$/u', $username)){
            echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
        } elseif (!preg_match('/^(0|[1-9][0-9]?|1[0-4][0-9]|150)$/', $age)){
            echo "<p>年齢は0から150の間で入力してください。</p>";
        } elseif (!preg_match('/^[0-9-]+$/', $phone)){
            echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<p>メールアドレスの形式が正しくありません。</p>";
        } elseif (!preg_match('/^[\p{Hiragana}\p{Katakana}\p{Han}a-zA-Z0-9-]+$/u', $address)){
            echo "<p>住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。</p>";
        } else {
            //入力内容の表示
            $genderLabels = [
            'male' => '男性',
            'female' => '女性',
            'other' => 'その他／回答しない',
            ]; 
            $genderText = $genderLabels[$gender] ?? $gender;

            echo "<p>名前：" . htmlspecialchars($username,ENT_QUOTES,"UTF-8") . "</p>";
            echo "<p>年齢：" . htmlspecialchars($age,ENT_QUOTES,"UTF-8") . "</p>";
            echo "<p>電話番号：" . htmlspecialchars($phone,ENT_QUOTES,"UTF-8") . "</p>";
            echo "<p>メールアドレス：" . htmlspecialchars($email,ENT_QUOTES,"UTF-8") . "</p>";
            echo "<p>住所：" . htmlspecialchars($address,ENT_QUOTES,"UTF-8") . "</p>";
            echo "<p>質問：" . htmlspecialchars($question,ENT_QUOTES,"UTF-8") . "</p>";
            echo "<p>性別：" . htmlspecialchars($genderText,ENT_QUOTES,"UTF-8") . "</p>";
        }
        } else {
            echo "<p>データが送信されていません。</p>";
        }
        ?>
    </body>
</html>