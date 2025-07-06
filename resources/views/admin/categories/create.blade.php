<h1>Добавить категорию</h1>

<a href="{{ route('categories.index') }}">Назад к списку</a>

@if ($errors->any())
    <div style="color: red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label for="name">Название:</label>
    <input type="text" name="name" id="name" required>

    <button type="submit">Сохранить</button>
</form>
