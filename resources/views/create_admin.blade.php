<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("css/setup.css") }}">
</head>
<body>

<div class="container">

    <img src="img/logo.png" alt="" class="center-logo">
    <form action="/admin_create" method="post">
        @csrf
        <h2>Создание учётной записи администратора</h2>
        <div class="input-block">
            @if($errors->any())
                <p style="color: #b41001;font-size: 22px;">Что-то не так. Проверьте корректность данных</p>
            @endif

            <div class="input-block__title">админ</div>
            <div class="row">
                <input type="text" placeholder="имя пользователя" name="admin_user">
                <input type="text" placeholder="пароль" name="admin_pas">
            </div>
        </div>

        <button type="submit">Создать</button>
    </form>

</div>

</body>
</html>

