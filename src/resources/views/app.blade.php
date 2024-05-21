<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO LIST</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <header class="header">
        <a class="header__text" href="/">
            Todo
        </a>
    </header>

    <div class="message">
        <p class="message__text">
            Todoを作成しました
        </p>
    </div>

    <form action="" class="create" method="POST">
        <div class="create-item">
            <input type="text" name="todo" class="create__todo" placeholder="xxxを確認する">
            <button class="create__button" type="submit">
                作成
            </button>
        </div>
    </form>

    <div class="todo-table">
    <table class="todo-table__inner">
      <tr class="todo-table__row">
        <th class="todo-table__header">Todo</th>
      </tr>
      <tr class="todo-table__row">
        <td class="todo-table__item">
          <form class="update-form">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="content" value="test">
            </div>
            <div class="update-form__button">
              <button class="update-form__button-submit" type="submit">更新</button>
            </div>
          </form>
        </td>
        <td class="todo-table__item">
          <form class="delete-form">
            <div class="delete-form__button">
              <button class="delete-form__button-submit" type="submit">削除</button>
            </div>
          </form>
        </td>
      </tr>
      <tr class="todo-table__row">
        <td class="todo-table__item">
          <form class="update-form">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="content" value="test2">
            </div>
            <div class="update-form__button">
              <button class="update-form__button-submit" type="submit">更新</button>
            </div>
          </form>
        </td>
        <td class="todo-table__item">
          <form class="delete-form">
            <div class="delete-form__button">
              <button class="delete-form__button-submit" type="submit">削除</button>
            </div>
          </form>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>