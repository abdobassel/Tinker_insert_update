<h3>Fill Form!</h3>

<form action="{{ route('users.store') }}" method="post">
    @csrf
    @method('POST')



    <label for="first_name"> name</label>
    <input type="text" name="name" placeholder="name" />




    <label for="email">email</label>
    <input type="email" name="email" placeholder="email" />

    <label for="password">password </label>
    <input type="password" name="password" placeholder="password" />


    <button type="submit">Save</button>

</form>
