<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="wrapper">
            <h1>Список дел</h1>
            <form action="/add.php" method="post">
                <input type="text" name="task" id="task" placeholder="Нужно сделать" class="form-control">
                <button type="submit" id="" name="sendTask" class="btn btn-success">Отправить</button>
            </form>
        </div>
       
        <div class="info">
            <div class="info__btn">
                <button type="submit" class="btn btn-success">Удалить</button>   
            </div>
            <div class="info__content">
                
            </div>

        </div>
       
    </div>

    <script src="src/js/script.js"></script>
</body>
</html>