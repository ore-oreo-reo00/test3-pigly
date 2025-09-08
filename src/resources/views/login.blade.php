<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}" />
</head>

<body>
  <div class="register-form">
    <h1 class="register-form__heading content__heading">PiGly</h1>
    <div class="register-form__inner">
      <form class="register-form__form" action="/register" method="post">
        <h2>ログイン</h2>
        <div class="register-form__group">
          <label class="register-form__label" for="email">メールアドレス</label>
          <input class="register-form__input" type="mail" name="email" id="email" placeholder="メールアドレスを入力">
          <p class="register-form__error-message">
          </p>
        </div>
        <div class="register-form__group">
          <label class="register-form__label" for="password">パスワード</label>
          <input class="register-form__input" type="password" name="password" id="password" placeholder="パスワードを入力">
          <p class="register-form__error-message">
          </p>
        </div>
        <input class="register-form__btn btn" type="submit" value="ログイン">
        <ul>
          <a href="#" onclick="window.history.back(); return false;">アカウント作成はこちら</a>
        </ul>
      </form>
    </div>
  </div>
</body>