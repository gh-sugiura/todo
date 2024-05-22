@extends('layout.app')


@section('css')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection
    
@section('content')
    @if (session("message") == true)
        <div class="message_success">
            <p class="message__text--success">
                {{session("message")}}
            </p>
        </div>
    @endif

    @if ($errors->any())
        <div class="message_alert">
            <ul class="message__text--alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div> 
    @endif
    

    <form action="/todos" class="create" method="POST">
        @csrf
        <div class="create-item">
            <input type="text" name="content" class="create__todo" placeholder="xxxを確認する">
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

      @foreach ($todos as $todo)
        <tr class="todo-table__row">
            <td class="todo-table__item">
                <form class="update-form">
                    <div class="update-form__item">
                        <p class="update-form__item-input">・{{$todo["content"]}}</p>
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
      @endforeach

    </table>
  </div>    

@endsection