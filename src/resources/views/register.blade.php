<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}" />
</head>

<body>
  <div class="register-form">
    <h1 class="register-form__heading content__heading">PiGly</h1>
    <div class="register-form__inner">
      <form class="register-form__form" action="/register" method="post">
        <h2>新規会員登録</h2>
        <h3>STEP1 アカウント情報の登録<h3>
          <div class="register-form__group">
            <label class="register-form__label" for="name">お名前</label>
            <input class="register-form__input" type="text" name="name" id="name" placeholder="名前を入力">
            <p class="register-form__error-message">
            </p>
          </div>
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
          <input class="register-form__btn btn" type="submit" value="次に進む">
          <ul>
            <a href="login">ログインはこちら</a>
          </ul>
        </form>
    </div>
  </div>
</body>