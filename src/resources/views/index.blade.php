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
    
    <h2 class="create__title">新規作成</h2>
    <form action="/todos" class="create" method="POST">
        @csrf
        <div class="create-item">
            <input type="text" name="content" class="create__todo" placeholder="xxxを確認する">
            <input type="text" name="content" class="create__category" placeholder="カテゴリ">
            <button class="create__button" type="submit">
                作成
            </button>
        </div>
    </form>

    <h2 class="serch__title">Todo検索</h2>
    <form action="/serch" class="serch" method="POST">
        @csrf
        <div class="serch-item">
            <input type="text" name="content" class="serch__todo" placeholder="xxxを確認する">
            <input type="text" name="content" class="serch__category" placeholder="カテゴリ">
            <button class="serch__button" type="submit">
                検索
            </button>
        </div>
    </form>

    <div class="todo-table">
    <table class="todo-table__inner">
      <tr class="todo-table__row">
        <th class="todo-table__header">Todo</th>
        <th class="todo-table__header">カテゴリ</th>
      </tr>

      @foreach ($todos as $todo)
        <tr class="todo-table__row">
            <td class="todo-table__item">
                <form class="update-form" action="todos/update" method="POST">
                    @csrf
                    @method("PATCH")
                    <div class="update-form__item">
                        <input class="update-form__item-input" type="text" name="content" value="{{ $todo['content'] }}">
                        <input type="hidden" name="id" value="{{ $todo['id'] }}">
                    </div>
                    <div class="update-form__button">
                        <button class="update-form__button-submit" type="submit">更新</button>
                    </div>
                </form>
            </td>
            <td class="todo-table__item">
                <form class="delete-form" action="todos/delete" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="delete-form__button">
                        <input type="hidden" name="id" value="{{ $todo['id'] }}">
                        <button class="delete-form__button-submit" type="submit">削除</button>
                    </div>
                </form>
            </td>
      </tr>
      @endforeach

    </table>
  </div>    

@endsection