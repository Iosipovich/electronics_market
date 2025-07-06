<h1>Редактировать категорию</h1>

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

<form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Название:</label>
    <input type="text" name="name" id="name" value="{{ $category->name }}" required>

    <button type="submit">Сохранить изменения</button>
</form>
