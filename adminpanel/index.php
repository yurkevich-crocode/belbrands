<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.min.css" />
    <title>БелБренды | Авторизация</title>
    <link rel="icon" type="image/png" href="favicon/favicon.ico"/>
  </head>
  <body>
    <main class="login">
      <div class="login__wrapper">
        <h1 class="login__title">Авторизация</h1>
        <form action="php/login.php" method="post" class="login__form">
          <div class="login__input-wrapper">
            <label for="email" class="login__input-label">Эл. почта</label>
            <input
              type="email"
              name="email"
              id="email"
              class="login__input"
              placeholder="Эл. почта..."
              required
            />
          </div>
          <div class="login__input-wrapper">
            <label for="password" class="login__input-label">Пароль</label>
            <input
              type="password"
              name="password"
              id="password"
              class="login__input"
              placeholder="Пароль..."
              required
            />
          </div>
          <button type="submit" class="login__input-btn">Войти</button>
        </form>
      </div>
    </main>
  </body>
</html>
