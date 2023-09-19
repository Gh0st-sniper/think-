<h1> Edit the Idea </h1>

<h1> Create an Idea </h1>

<form action="/ideas/{{ $idea->id }}" method="post">
    @csrf
    @method('put')

<label for=""> Title </label>
<input type="text" name="title" id=""><br>
<label for=""> Description </label>
<input type="text" name="title" id=""><br>
<input type="submit" value="Create Idea">


</form>