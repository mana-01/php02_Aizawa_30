<html>

<!-- input part -->

<head>
    <meta charset="utf-8">
    <title>洋服を選ぶ時のお悩みを教えてください！</title>
</head>

<body>
    <form action="/php02_Aizawa_30/insert.php" method="post">
        お名前: <input type="text" name="name">
        性別:
        <select name="sex">
            <option value="女性">女性</option>
            <option value="男性">男性</option>
            <option value="ニュートラル">ニュートラル</option>
        </select>
        年齢: <input type="text" name="age">
        お悩み:<textarea name="text" rows="4" clos="40">洋服にまつわる悩みを記載してください。</textarea>
        <input type="submit" value="送信">
    </form>
</body>

</html>
