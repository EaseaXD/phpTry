<?php
$task = $_POST['task'];
if($task==''){
    echo "Введите само задание";
    exit();
    
}

$dsn ='mysql:host=localhost;dbname=to-do';
$pdo = new PDO($dsn, 'easeaxd','12151728');

$sql = 'INSERT INTO tasks(task) VALUES(:task)';/*Добавляем в внутрь таблицы переменую $task */
$query = $pdo->prepare($sql); /*Подготовили sql команду */
$query->execute(['task' => $task]);/*ВЫполняем sql комунду,в заглушку :task вставляем значение переменной $task */

header('Location: /');

?>