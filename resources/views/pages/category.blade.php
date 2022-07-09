@extends('layouts.main')

@section('content')
    <div class="navigation-area">
        <div class="navigation-area__content">
            @include('particles.menu')
        </div>
        <div class="navigation-area__search">
            <button class="button" data-modal="add-category-modal">
                Добавить категорию
            </button>
        </div>
    </div>

    <div class="list">
        <div class="list__header">
            <div class="list__col">
                Название категории
            </div>
            <div class="list__col">
                Описание категории
            </div>
            <div class="list__col">

            </div>
        </div>
        @foreach($categories as $category)
            <div class="list__row">
                <div class="list__col">
                    {{$category->name}}
                </div>
                <div class="list__col">
                    {{$category->description}}
                </div>
                <div class="list__col">
                    <form action="/categories/{{$category->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button button_delete">Удалить</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('modal')
    <div class="modal" id="add-category-modal">
        <div class="modal__dialog">
            <div class="modal__header">
                <h2>Добавить категорию</h2>
            </div>
            <div class="modal__content">
                <form action="/categories" method="POST">
                    @csrf
                    @method('POST')
                    <input type="text" name="name" placeholder="Название">
                    <input type="text" name="key" placeholder="Ключ для ТГ">
                    <textarea name="description" rows="10" placeholder="Описание"></textarea>
                    <textarea name="keywords" rows="10" placeholder="Описание"></textarea>
                    <button type="submit" class="button" data-modal="add-category">
                        Сохранить
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
