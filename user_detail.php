<?php
include('functions.php');

$id = $_GET['id'];
$pdo = db_conn();
$sql = 'SELECT * FROM user_table WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();
if ($status==false) {
    errorMsg($stmt);
} else {
    $rs = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー情報更新ページ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div{
            padding: 10px;
            font-size:16px;
            }
    </style>
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
                    <li class="nav-item">
                        <a class="nav-link" href="user_index.php">新規登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_select.php">ユーザー一覧</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form method="post" action="user_update.php">
    <div class="form-group">
            <label for="name">ユーザー名</label>
            <input type="text" class="validate[required,minSize[3],maxSize[10],custom[onlyLetterNumber]]" value ="<?=$rs['name']?>" id="name" name="name" placeholder="user name">
            <p>※半角英数字、3～10文字以内で登録してください。</p>
        </div>
        <div class="form-group">
            <label for="lid">ログインID</label>
            <input type="text" class="validate[required,custom[email]]" id="lid" name="lid" value ="<?=$rs['lid']?>">
            <p>※E-mailアドレスを登録してください。</p>
        </div>
        <div class="form-group">
            <label for="lpw">パスワード</label>
            <input type="text" class="validate[required,minSize[3],maxSize[10],custom[onlyLetterNumber]]" id="lpw" name="lpw" value ="<?=$rs['lpw']?>"> 
            <p>※半角英数字、3～10文字以内で登録してください。</p>
        </div>
        <div>
          <input type="radio" name="kanri_flg" id="kanri_flg" value="0"  checked> 一般権限
          <input type="radio" name="kanri_flg" id="kanri_flg" value="1"> 管理者権限
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- idは変えたくない = ユーザーから見えないようにする-->
        <input type="hidden" name="id" value ="<?=$rs['id']?>">
    </form>

    <script type="text/javascript">
       jQuery(document).ready(function(){
       jQuery("#user_insert").validationEngine();
       });
</script>
</body>
</html>
