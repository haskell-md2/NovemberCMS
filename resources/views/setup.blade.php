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
        <form action="/setup_form" method="post">
            @csrf
            <h2>Установка</h2>
            <div class="input-block">
                @if($errors->any())
                    <p style="color: #b41001;font-size: 22px;">Что-то не так. Проверьте корректность данных</p>
                @endif

                <div class="input-block__title">база даных</div>
                <div class="row">
                    <input type="text" placeholder="хост" name="db_path">
                    <input type="text" placeholder="порт" name="db_port">
                </div>
                <div class="row">
                    <input type="text" placeholder="пользователь" name="db_user">
                    <input type="text" placeholder="пароль" name="db_pas">
                </div>
                <div class="row">
                    <input type="text" placeholder="название БД" name="db_name">
                </div>
            </div>

            <button type="submit">Установить</button>
        </form>

    </div>

</body>
</html>
