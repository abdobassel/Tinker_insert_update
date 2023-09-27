<h1>All Users</h1>

@foreach ($users as $user)
    <div>
        <h3>ID: {{ $user->id }}</h3>
        <h3>Name: {{ $user->name }}</h3>
        <h3>Email: {{ $user->email }}</h3>
        <h3>created Date :{{ $user->created_at }}</h3>
        <a href="{{ route('users.edit', $user->id) }}">edit</a>
        <a href="">Delete</a>
    </div>
    <h2>Finshed Info </h2>
@endforeach
