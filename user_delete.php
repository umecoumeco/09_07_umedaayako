<?php
include('functions.php');
$id   = $_GET['id'];
$pdo = db_conn();

$sql = 'UPDATE user_table SET life_flg=1 WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// $sql = 'DELETE FROM user_table WHERE id =:id';
// $stmt = $pdo->prepare($sql);
// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
// $status = $stmt->execute();


if ($status==false) {
    errorMsg($stmt);
} else {
    header('Location: user_select.php');
    exit;
}
