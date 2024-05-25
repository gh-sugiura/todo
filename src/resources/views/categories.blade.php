@extends('layout.app')


@section('css')
    <link rel="stylesheet" href="{{asset('css/categories.css')}}">
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
    
    <h2 class="category__title">カテゴリ新規作成</h2>
    <form action="/categories" class="category" method="POST">
        @csrf
        <div class="category-item">
            <input type="text" name="name" class="create__category" placeholder="カテゴリ" value="{{old("name")}}">
            <button class="category__button" type="submit">
                作成
            </button>
        </div>
    </form>

    <div class="todo-table">
    <table class="todo-table__inner">
      <tr class="todo-table__row">
        <th class="todo-table__header">カテゴリ</th>
      </tr>

      @foreach ($categories as $category)
        <tr class="todo-table__row">
            <td class="todo-table__item">
                <form class="update-form" action="categories/update" method="POST">
                    @csrf
                    @method("PATCH")
                    <div class="update-form__item">
                        <input class="update-form__item-input" type="text" name="content" value="{{ $category['name'] }}">
                        <input type="hidden" name="id" value="{{ $category['id'] }}">
                    </div>
                    <div class="update-form__button">
                        <button class="update-form__button-submit" type="submit">更新</button>
                    </div>
                </form>
            </td>
            <td class="todo-table__item">
                <form class="delete-form" action="categories/delete" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="delete-form__button">
                        <input type="hidden" name="id">
                        <button class="delete-form__button-submit" type="submit">削除</button>
                    </div>
                </form>
            </td>
      </tr>
      @endforeach

    </table>
  </div>    

@endsection