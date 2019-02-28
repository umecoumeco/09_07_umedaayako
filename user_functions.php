<?php
//db_connという関数作ります宣言
function db_conn() 
{   
//tableの住所
    $dbn = 'mysql:dbname=gs_f02_db07;charset=utf8;port=3306;host=localhost';
//管理者権限    
    $user = 'root';
    $pwd = '';
//(呪文)PDOをmySQLにつなぐ呪文
    try {
//dbn,user,pwdの中身を        newでPDO型のものを作る
        return new PDO($dbn, $user, $pwd); //PDOは
//PDOでエラーがおきた場合、dbErrorのメッセージを表示します＋       
    } catch (PDOException $e) {
        exit('dbError:'.$e->getMessage());
    }
}
//errorMsg($stmt)の関数を作ります宣言。そもそもDBにつながらなかったときのエラーを出す呪文。
function errorMsg($stmt)
{  
    $error = $stmt->errorInfo();
    exit('ErrorQuery:'.$error[2]);
}
//ユーザーが入力したテキスト情報をhtmlに変換する。
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
