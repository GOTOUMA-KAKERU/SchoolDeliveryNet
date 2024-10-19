<!DOCTYPE html>
<html lang="ja">
    <head>
        <?php $title = "お知らせNo.1" ?>
        <!--基本情報-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
        <title><?php echo"$title"?></title>
        <link rel="icon" href="../favicon.ico">
        <!--css-->
        <link rel="stylesheet" href="./index.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back" />
    </head>
	<body>
        <!--共通-->
        <!--ヘッダー兼メニュー-->
        <header>
            <a href="javascript:window.history.back();"><img src="./BackButton.svg" alt=""></a>
            <h1><?php echo"$title" ?></h1>
        </header>
        <?php include($_SERVER['DOCUMENT_ROOT']."../parents/common/contact-manu.html"); ?>

    </body>
</html>