<h1>Список користувачів</h1>
<a href="{{ route('users.create') }}">Додати нового</a>

<table border="1" style="width: 100%; margin-top: 20px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ім'я</th>
            <th>Email</th>
            <th>Дії</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}">Редагувати</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Видалити</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>