<?php
include('functions.php');
if (    
!isset($_POST['name']) || $_POST['name']=='' ||
!isset($_POST['lid']) || $_POST['lid']=='' ||
!isset($_POST['lpw']) || $_POST['lpw']=='' ||
!isset($_POST['kanri_flg']) || $_POST['kanri_flg']==''
) {
    var_dump($_POST);
    exit('ParamError');
}
$name = $_POST['name'];
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
$kanri_flg = $_POST['kanri_flg'];
$pdo = db_conn();//ここにnewPDOが返ってくる
$sql ='INSERT INTO user_table(id, name, lid, lpw, kanri_flg, life_flg)
VALUES(NULL, :a1, :a2, :a3, :a4, 0)';

$stmt = $pdo->prepare($sql); //->は「.」と同じ prepareは「準備する」
$stmt->bindValue(':a1', $name, PDO::PARAM_STR); //PRAMの形が文字列ならSTR,数字ならINT
$stmt->bindValue(':a2', $lid, PDO::PARAM_STR);
$stmt->bindValue(':a3', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':a4', $kanri_flg, PDO::PARAM_INT);
$status = $stmt->execute();  //executeは 準備したstmtをinsert（実行）してtrueかfalseを返す


if ($status==false) {
    $error = $stmt->errorInfo();
    exit('sqlError:'.$error[2]);
} else {
    header('Location: user_index.php');
}


