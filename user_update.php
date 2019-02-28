<?php
//functions.phpを呼び込む
include('functions.php');
//
if (
!isset($_POST['name']) || $_POST['name']=='' ||
!isset($_POST['lid']) || $_POST['lid']=='' ||
!isset($_POST['lpw']) || $_POST['lpw']=='' ||
!isset($_POST['kanri_flg']) || $_POST['kanri_flg']==''
) {
    exit('ParamError');
}
$id = $_POST['id'];
$name = $_POST['name'];
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
$kanri_flg = $_POST['kanri_flg'];
$pdo = db_conn();//ここにnewPDOが返ってくる
$sql = 'UPDATE user_table SET name=:a1, lid=:a2, lpw=:a3, kanri_flg=:a4  WHERE id =:id';
$stmt = $pdo->prepare($sql); //->は「.」と同じ prepareは「準備する」
$stmt->bindValue(':a1', $name, PDO::PARAM_STR); //PRAMの形が文字列ならSTR,数字ならINT
$stmt->bindValue(':a2', $lid, PDO::PARAM_STR);
$stmt->bindValue(':a3', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':a4', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();  //executeは準備したstmtをinsert（実行）してtrueかfalseを返す
if ($status==false) {
    errorMsg($stmt);
} else {
    header('Location: user_select.php');  
    exit;
}
