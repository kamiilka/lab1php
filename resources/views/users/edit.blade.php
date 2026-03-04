<h1>Редагувати користувача</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Ім'я:</label><br>
        <input type="text" name="name" value="{{ $user->name }}" required>
    </div>

    <br>

    <div>
        <label>Email:</label><br>
        <input type="email" name="name" value="{{ $user->email }}" required>
    </div>

    <br>
    
    <button type="submit">Оновити дані</button>
</form>

<br>
<a href="{{ route('users.index') }}">Назад до списку</a>