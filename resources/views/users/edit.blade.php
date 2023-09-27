<h3>edit Form</h3>

<form action="{{ route('users.update', $user->id) }}" method="post">
    @csrf
    @method('PUT')



    <label for="first_name"> name</label>
    <input type="text" name="name" value="{{ $user->name }}" placeholder="name" />




    <label for="email">email</label>
    <input type="email" name="email" value="{{ $user->email }}" placeholder="email" />

    <label for="password">password </label>
    <input type="password" name="password" value="{{ $user->password }}" placeholder="password" />


    <button type="submit">Update</button>

</form>
