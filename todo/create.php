<?php 
header('Content-Type: application/json; charset=utf-8');

try{
    $pdo = new PDO("mysql:localhost; dbname=todolist_demo;port=3306;
                    charset=utf8",'lazio_demo','letmein');
    
}catch(PDOException $e){
    echo "Database connection failed!";
    exit;
}

$sql = 'INSERT INTO todos (content, is_complete, `order`)
        VALUES (:content, :is_complete, :order)';
$statment = $pdo->prepare($sql);
$statment->bindValue(':content', $_POST['content'], PDO::PARAM_STR);
$statment->bindValue(':is_complete', 0, PDO::PARAM_INT);
$statment->bindValue(':order', $_POST['order'], PDO::PARAM_INT);
$result = $statment->execute();

if($result){
    echo json_encode([id => $pdo->lastInsertId()]);
}else{
    echo ($_POST['content']);
    var_dump($pdo->errorInfo());
}
?>