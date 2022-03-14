<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Админ-панель</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Poor+Story&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>

    <header>
        <div class="container">
            <p>NovemberCMS</p>
            <a href="/">Перейти на сайт</a>
        </div>

    </header>

    <div class="container wrapper">

        <div class="nav-bar">
            <h2>Разделы</h2>
            <div class="nav-bar__list">
                <div class="nav-bar__btn-active">Сниппеты</div>
{{--                <div class="nav-bar__btn">Страницы</div>--}}
            </div>
        </div>

        <div class="manage-bar">
            <h2>Список сниппетов</h2>
            <div class="add-form">
                <div class="row ">
                    <input type="text" name="key" placeholder="ключ" id="key">
                    <input type="text" name="value" placeholder="значение" id="va">
                </div>

                 <button id="add">Добавить</button>
            </div>

            <div class="line"></div>

            <div id="list" class="snip-list">
                <div class="snip-list__el">
                    <p class="del" data-id="one">
                        <svg data-id="one" xmlns="http://www.w3.org/2000/svg" width="23" height="26" viewBox="0 0 23 26" fill="none">
                            <path data-id="one" d="M21.8691 2.21192H16.0098L15.5508 1.29884C15.4536 1.10363 15.3038 0.939424 15.1183 0.824695C14.9329 0.709967 14.7191 0.649266 14.501 0.649423H8.91992C8.70233 0.648586 8.48891 0.70906 8.3041 0.823917C8.1193 0.938773 7.97058 1.10337 7.875 1.29884L7.41602 2.21192H1.55664C1.34944 2.21192 1.15073 2.29423 1.00421 2.44075C0.857701 2.58726 0.775391 2.78597 0.775391 2.99317V4.55567C0.775391 4.76287 0.857701 4.96159 1.00421 5.1081C1.15073 5.25461 1.34944 5.33692 1.55664 5.33692H21.8691C22.0763 5.33692 22.2751 5.25461 22.4216 5.1081C22.5681 4.96159 22.6504 4.76287 22.6504 4.55567V2.99317C22.6504 2.78597 22.5681 2.58726 22.4216 2.44075C22.2751 2.29423 22.0763 2.21192 21.8691 2.21192ZM3.37305 23.4522C3.41031 24.0472 3.67293 24.6056 4.10745 25.0139C4.54197 25.4221 5.11572 25.6493 5.71191 25.6494H17.7139C18.3101 25.6493 18.8838 25.4221 19.3183 25.0139C19.7528 24.6056 20.0155 24.0472 20.0527 23.4522L21.0879 6.89942H2.33789L3.37305 23.4522Z" fill="#D04925"/>
                        </svg>
                    </p>
                    <p data-id="one">текст1</p>
                    <input type="text" data-id="one" class="val-snip">
                </div>
                <div class="snip-list__el">
                    <p class="del" data-id="one">
                        <svg data-id="one" xmlns="http://www.w3.org/2000/svg" width="23" height="26" viewBox="0 0 23 26" fill="none">
                            <path data-id="one" d="M21.8691 2.21192H16.0098L15.5508 1.29884C15.4536 1.10363 15.3038 0.939424 15.1183 0.824695C14.9329 0.709967 14.7191 0.649266 14.501 0.649423H8.91992C8.70233 0.648586 8.48891 0.70906 8.3041 0.823917C8.1193 0.938773 7.97058 1.10337 7.875 1.29884L7.41602 2.21192H1.55664C1.34944 2.21192 1.15073 2.29423 1.00421 2.44075C0.857701 2.58726 0.775391 2.78597 0.775391 2.99317V4.55567C0.775391 4.76287 0.857701 4.96159 1.00421 5.1081C1.15073 5.25461 1.34944 5.33692 1.55664 5.33692H21.8691C22.0763 5.33692 22.2751 5.25461 22.4216 5.1081C22.5681 4.96159 22.6504 4.76287 22.6504 4.55567V2.99317C22.6504 2.78597 22.5681 2.58726 22.4216 2.44075C22.2751 2.29423 22.0763 2.21192 21.8691 2.21192ZM3.37305 23.4522C3.41031 24.0472 3.67293 24.6056 4.10745 25.0139C4.54197 25.4221 5.11572 25.6493 5.71191 25.6494H17.7139C18.3101 25.6493 18.8838 25.4221 19.3183 25.0139C19.7528 24.6056 20.0155 24.0472 20.0527 23.4522L21.0879 6.89942H2.33789L3.37305 23.4522Z" fill="#D04925"/>
                        </svg>
                    </p>
                    <p data-id="one">текст1</p>
                    <input type="text" data-id="one" class="val-snip">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>


        $("#add").on('click',()=>{
            let key = $("#key").val();
            let va = $("#va").val();
            add_snipp(key, va);
        });

        $(".val-snip").change((e)=>{
            alert(e.target.attributes['data-id'].value);
        })

        $(".del").on('click',(e)=>{
            alert('123');
            //dell_snipp($(e.target).attr('data-id'));
        })

        function add_snipp(key, value){
            let _token   = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "/add_snipp",
                type: "POST",
                data: {"_token": _token, "key": key, "value":value},
                success: (res)=>{
                    update_list();
                }
            })
        }

        function dell_snipp(id){
            let _token   = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "/delete_snip",
                method: "DELETE",
                data: {"_token": _token, "sid": id},
                success: (res)=>{
                    update_list();
                }
            })
        }

        function change_snipp(key,cont){
            let _token   = $('meta[name="csrf-token"]').attr('content');


            $.ajax({
                url: "/change_snipp",
                method: "post",
                data: {"_token": _token, "sid": key, "cont": cont},
                success: (res)=>{
                    alert('Изменения сохранены!')
                }
            })
        }

        function update_list(){
            $.ajax({
                url: "/get_snipps",
                type: "GET",
                success: (res)=>{

                    let generated = '';
                    res.forEach((el)=>{
                        let id = el['id'];
                        generated +=
                            '<div class="snip-list__el">'+
                            '<p class="del" onclick="dell_snipp('+id+')" data-id="'+el['id']+'">'+
                                '<svg data-id="'+el['id']+'" xmlns="http://www.w3.org/2000/svg" width="23" height="26" viewBox="0 0 23 26" fill="none">'+
                                    '<path data-id="'+el['id']+'" d="M21.8691 2.21192H16.0098L15.5508 1.29884C15.4536 1.10363 15.3038 0.939424 15.1183 0.824695C14.9329 0.709967 14.7191 0.649266 14.501 0.649423H8.91992C8.70233 0.648586 8.48891 0.70906 8.3041 0.823917C8.1193 0.938773 7.97058 1.10337 7.875 1.29884L7.41602 2.21192H1.55664C1.34944 2.21192 1.15073 2.29423 1.00421 2.44075C0.857701 2.58726 0.775391 2.78597 0.775391 2.99317V4.55567C0.775391 4.76287 0.857701 4.96159 1.00421 5.1081C1.15073 5.25461 1.34944 5.33692 1.55664 5.33692H21.8691C22.0763 5.33692 22.2751 5.25461 22.4216 5.1081C22.5681 4.96159 22.6504 4.76287 22.6504 4.55567V2.99317C22.6504 2.78597 22.5681 2.58726 22.4216 2.44075C22.2751 2.29423 22.0763 2.21192 21.8691 2.21192ZM3.37305 23.4522C3.41031 24.0472 3.67293 24.6056 4.10745 25.0139C4.54197 25.4221 5.11572 25.6493 5.71191 25.6494H17.7139C18.3101 25.6493 18.8838 25.4221 19.3183 25.0139C19.7528 24.6056 20.0155 24.0472 20.0527 23.4522L21.0879 6.89942H2.33789L3.37305 23.4522Z" fill="#D04925"/>'+
                                '</svg>'+
                            '</p>'+
                            '<p data-id="'+el['id']+'">'+el['name']+'</p>'+
                            '<input onchange=change_snipp('+id+',this.value) type="text" data-id="'+el['id']+'" class="val-snip" value="'+el['content']+'">'+
                        '</div>';
                    })

                    document.getElementById("list").innerHTML= generated;
                }
            })

        }

        $(document).ready(()=>{
            update_list();
        })
    </script>
</body>
</html>
