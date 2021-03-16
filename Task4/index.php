<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Функциональный способ</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <div class="main">
        <form action="./handler.php" method="POST" class="main__form">
            <input type="text" name="nameField" id="name" value="" required class="form__input-number"
                placeholder="Имя">
            <input type="text" name="surnameField" id="surname" value="" required class="form__input-number"
                placeholder="Фамилия">
            <input type="email" name="emailField" id="email" value="" required class="form__input-number"
                placeholder="Электронная почта">
            <input type="tel" name="telField" id="telephone" value="" required class="form__input-number"
                placeholder="Телефон">
            <select name="topicField" id="topic" class="form__input-number">
                <option value="business">Бизнес</option>
                <option value="technologies">Технологии</option>
                <option value="media">Реклама и Маркетинг</option>
            </select>
            <select name="paymentField" id="payment" class="form__input-number">
                <option value="WebMoney">WebMoney</option>
                <option value="YaMoney">Яндекс.Деньги</option>
                <option value="PayPal">PayPal</option>
                <option value="Credit">Кредитная Карта</option>
            </select>
            <label for="mailing" class="form__checkbox-label">Я согласен получать рекламные объявления

                <input type="checkbox" name="mailingField" id="mailing" checked>
            </label>

            <button type="submit" class="main__submit-form ">Сдать</button>
            <form>
    </div>
</body>

</html>