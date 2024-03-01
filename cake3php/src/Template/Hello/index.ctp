<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/base.css"> -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="originalContainer">
        <h1>基本の確認</h1>
        <p class="text">これはテストページです。</p>
        <p><?php echo date('Y/m/d', time()) ?></p>
    </div>

    <div class="formStyle">
        <p>フォームの送信</p>
        <!-- <form method="get" action="/hello/sendForm">
            <input type="text" name="text1">
            <input type="submit" value="送信">
        </form> -->

        <?=$this->Form->create(null, ['type' => 'get', 'url' => ['controller' => 'Hello', 'action' => 'sendForm']]) ?>
          <?=$this->Form->text("sendForm.text1") ?>
          <?=$this->Form->submit("送信") ?>
        <?=$this->Form->end() ?>
    </div>
</body>
</html>
