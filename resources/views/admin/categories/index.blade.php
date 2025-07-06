<h1>Категории</h1>

<a href="{{ route('categories.create') }}">Добавить категорию</a>

@if (session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<ul>
    @foreach ($categories as $category)
        <li>
            {{ $category->name }}

            <a href="{{ route('categories.edit', $category) }}">Редактировать</a>

            <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
            </form>
        </li>
    @endforeach
</ul>
