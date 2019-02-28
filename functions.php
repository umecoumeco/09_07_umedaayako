<?php
// 共通で使うものを別ファイルにしておきましょう。

// DB接続関数（PDO）
function db_conn()
{
    $dbname = 'gs_f02_db07';
    $db = 'mysql:dbname='.$dbname.';charset=utf8;port=3306;host=localhost';
    $user = 'root';
    $pwd = '';
    try {
        return new PDO($db, $user, $pwd);
    } catch (PDOException $e) {
        exit('dbError:'.$e->getMessage());
    }
}

// SQL処理エラー
function errorMsg($stmt)
{
    $error = $stmt->errorInfo();
    exit('ErrorQuery:'.$error[2]);
}

// SESSIONチェック＆リジェネレイト
function chk_ssid()
{
    // ログイン失敗時の処理（ログイン画面に移動）
    if (!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid']!=session_id()) {
         header('Location: login.php');
        } else {
    // ログイン成功時の処理（一覧画面に移動）        
          session_regenerate_id(true); // セッションidの再生成
          $_SESSION['chk_ssid'] = session_id(); // セッション変数に格納
}
}

// menu01:ログインページ/一覧ページ
function menu01()
{
    $menu = '<li class="nav-item"><a class="nav-link" href="login.php">ログインページ</a></li><li class="nav-item"><a class="nav-link" href="select_nologin.php">一覧ページ</a></li>';
    return $menu;
}

// menu02:todo登録/todo一覧/ログアウト
function menu02()
{
    $menu = '<li class="nav-item"><a class="nav-link" href="index.php">todo登録</a></li><li class="nav-item"><a class="nav-link" href="select.php">todo一覧</a></li>';
    $menu .= '<li class="nav-item"><a class="nav-link" href="logout.php">ログアウト</a></li>';
    return $menu;
}

// menu03:todo登録/todo一覧/user登録/user一覧/ログアウト
function menu03()
{
    $menu = '<li class="nav-item"><a class="nav-link" href="index.php">todo登録</a></li><li class="nav-item"><a class="nav-link" href="select.php">todo一覧</a></li>';
    $menu .= '<li class="nav-item"><a class="nav-link" href="user_index.php">ユーザー登録</a></li><li class="nav-item"><a class="nav-link" href="user_select.php">ユーザー一覧</a></li>';
    $menu .= '<li class="nav-item"><a class="nav-link" href="logout.php">ログアウト</a></li>';
    return $menu;
}

// menu分岐させたいときの関数
function menu_select()
{
//    $menu = "";
   if($_SESSION["kanri_flg"]==0){
      $menu = menu02();
      return $menu;
    }else if($_SESSION["kanri_flg"]==1){
      $menu = menu03();
      return $menu;
    }else{
      echo"管理者権限がありません。";
    }
}