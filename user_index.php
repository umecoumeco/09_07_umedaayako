<?php
// セッションのスタート
session_start();

//0.外部ファイル読み込み
include('functions.php');

// ログイン状態のチェック
chk_ssid();

$menu = menu_select();

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー管理機能</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div{
            padding: 10px;
            font-size:16px;
            }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css" type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-ja.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">ユーザー管理機能</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <?=$menu?>
                </ul>
            </div>
        </nav>
    </header>

    <form method="post" action="user_insert.php" id="user_insert">
        <div class="form-group">
            <label for="name">ユーザー名</label>
            <input type="text" class="validate[required,minSize[3],maxSize[10],custom[onlyLetterNumber]]" id="name" name="name" placeholder="user name">
            <p>※半角英数字、3～10文字以内で登録してください。</p>
        </div>
        <div class="form-group">
            <label for="lid">ログインID</label>
            <input type="text" class="validate[required,custom[email]]" id="lid" name="lid" placeholder="e-mail">
            <p>※E-mailアドレスを登録してください。</p>
        </div>
        <div class="form-group">
            <label for="lpw">パスワード</label>
            <input type="password" id="lpw" name="lpw" class="validate[required,minSize[3],maxSize[10],custom[onlyLetterNumber]]">
            <p>※半角英数字、3～10文字以内で登録してください。</p>
        </div>
        <div>
          <input type="radio" name="kanri_flg" id="kanri_flg" value=0  checked> 一般権限
          <input type="radio" name="kanri_flg" id="kanri_flg" value=1> 管理者権限
        </div>
        <div class="form-group">
            <button id="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <script type="text/javascript">
       jQuery(document).ready(function(){
       jQuery("#user_insert").validationEngine();
       });

       $(function() {
    $('#passcheck').change(function(){
        if ( $(this).prop('checked') ) {
            $('#password').attr('type','text');
        } else {
            $('#password').attr('type','password');
        }
    });
});

    //  $("#submit").on()

</script>
</body>
</html>