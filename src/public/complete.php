<?php

$name = filter_input(INPUT_POST, 'name');
$food_answer = filter_input(INPUT_POST, 'food_answer');
$hobby_answer = filter_input(INPUT_POST, 'hobby_answer');

$errors = [];
if (empty($name)||empty($food_answer)||empty($hobby_answer)) {
  $errors[] =  "「回答者名」「好きな食べ物」「趣味」のどれかが記入されてません！";
}

$dbUserName = 'root';
$dbPassword = 'password';
$pdo = new PDO(
  'mysql:host=mysql; dbname=questionnaireform; charset=utf8',$dbUserName, $dbPassword);
  $stmt = $pdo->prepare("INSERT INTO questionnaires (name, food_answer, hobby_answer)
   VALUES (:name, :food_answer, :hobby_answer)");
   
  $stmt->bindParam( ':name', $name, PDO::PARAM_STR);
  $stmt->bindParam( ':food_answer', $food_answer, PDO::PARAM_STR);
  $stmt->bindParam( ':hobby_answer', $hobby_answer, PDO::PARAM_STR);
  $stmt->execute();
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>アンケート完了画面</title>
</head>

<body>
  <div>
    <?php if (!empty($errors)): ?>
    <?php foreach ($errors as $error):?>
    <p><?php echo $error . "\n";?></p>
    <?php endforeach;?>
    <a href="index.php">アンケート画面へ</a>
    <?php endif;?>
    <?php if (empty($errors)): ?>
    <h2>アンケート完了</h2>
    <a href="index.php">アンケート画面へ</a><br><br>
    <?php endif;?>
    <div>
</body>

</html>