<?php require('dbconnect.php'); ?>
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">自由に投稿してね</h1>
</header>

<main>
<h2>~~ Memo management book ~~  </h2>
<!-- phpのコードを記入 -->
<?php
$statement = $db-> prepare('UPDATE  memos SET memo = ? WHERE id = ?');
$statement->execute(array($_POST['memo'], $_POST['id']));
?>
<p>メモの内容を変更しました</p>
<p><a href="index.php">戻る</a></p>
</main>
</body>
</html>
