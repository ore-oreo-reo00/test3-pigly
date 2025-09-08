<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/weight-register.css') }}" />
</head>

<body>
  <div class="register-form">
    <h1 class="register-form__heading content__heading">PiGly</h1>
    <div class="register-form__inner">
      <form class="register-form__form" action="/register" method="post">
        <h2>新規会員登録</h2>
        <h3>STEP2 体重データの入力<h3>
          <div class="register-form__group">
            <label class="register-form__label" for="text">現在の体重</label>
            <input class="register-form__input" type="text" name="name" id="name" placeholder="現在の体重を入力">kg
            <p class="register-form__error-message">
            </p>
          </div>
          <div class="register-form__group">
            <label class="register-form__label" for="text">目標の体重</label>
            <input class="register-form__input" type="text" name="email" id="email" placeholder="目標の体重を入力">
            <p class="register-form__error-message">
            </p>
          </div>
          <input class="register-form__btn btn" type="submit" value="アカウント作成">
        </form>
    </div>
  </div>
</body>