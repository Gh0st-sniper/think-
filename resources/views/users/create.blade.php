<h1> Sign up </h1>

<form action="/users" method="post">
    @csrf

    <label for=""> Name </label>
    <input type="text" name="name" id=""><br>
    <label for=""> Email </label>
    <input type="text" name="email" id=""><br>
    <label for=""> Password </label>
    <input type="text" name="password" id=""><br>
    
    <input type="text" name="submit" id="">

</form>