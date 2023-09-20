<h1> Login </h1>

<form action="/session" method="post">
    @csrf

    <label for=""> Name </label>
    <input type="text" name="name" id=""><br>
    <label for=""> Email </label>
    <input type="text" name="email" id=""><br>
    <label for=""> Password </label>
    <input type="password" name="password" id=""><br>
    
    <input type="submit" name="Create Account" id="">

</form>