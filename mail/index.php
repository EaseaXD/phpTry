<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="form">
            <form action="" id="form" class="form__body">
                <h1 class="form__title">Обратная связь</h1>
                <div class="form__item">
                    <label for="forName" class="form__label">Имя*</label>
                    <input id="forName" type="text" name="name" class="form__input _req">
                </div>
                <div class="form__item">
                    <label for="forEmail" class="form__label">E-mail*</label>
                    <input id="forEmail" type="text" name="Email" class="form__input _req _email">
                </div>
                <div class="form__item">
                   <div class="form__title">Левша или Правша?</div>
                   <div class="options">
                       <div class="options__item">
                           <input id="forRightHander" checked type="radio" value="right" name="hand" class="options__input">
                           <label for="forRightHander" class="options__label"><span>Правша</span></label>
                       </div>
                       <div class="options__item">
                           <input id="forLeftHander" type="radio" name="hand" value="left" class="options__input">
                           <label for="forLeftHander" class="options__label"><span>Левша</span></label>
                       </div>
                   </div>
                </div>
                <div class="form__item">
                    <label for="formMessage" class="form__label">Сообщение:</label>
                    <textarea name="message" id="forMessage" class="form__message" ></textarea>
                </div>
                <div class="form__item">
                    <div class="form__label">Возраст:</div>
                    <select name="age" id="select" class="select">
                        <option value="от 18 до 25">Молодой</option>
                        <option value="от 25 до 45">Взрослый</option>
                        <option value="от 45">Старый</option>
                    </select>
                </div>
                <div class="form__item">
                    <div class="form__label">Прикрепить фото</div>
                    <div class="file">
                        <div class="file__item">
                            <input accept=".jpg, .png, .gif" type="file" class="file__input" name="image">
                            <div class="file__button">Выбрать</div>
                        </div>
                        <div class="file__preview"></div>
                    </div>
                </div>
                <div class="form__item">
                    <div class="checkbox">
                        <input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input _req">
                        <label for="formAgreement" class="checkbox__label ">Я даю согласие на обработку персональных данных образец</label>
                    </div>
                </div>
                <button class="form__button" type="submit">Отправить </button>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="src/js/script.js"></script>
</body>
</html>