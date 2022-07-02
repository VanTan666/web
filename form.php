<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Ваши данные:</h1>
    
    <p>
        Имя <?php echo $_REQUEST['name']?>
        Почта <?php echo $_REQUEST['email']?>
        Пароль <?php echo $_REQUEST['password']?>
    </p>
</body>
</html>