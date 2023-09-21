<h1> All Ideas </h1>

@auth 

@if(is_null($ideas))

<a href="/ideas/create"> Create an Idea </a>


@else

@foreach($ideas as $idea)

<h1> {{ $idea->title }}  </h1>

<p> {{ $idea->description }}  </p>

<h6> Create Comment </h6>

    <form action="/comments" method="post">
        @csrf

    <textarea name="com" id="" cols="20" rows="4" placeholder="Whats on your mind ?"></textarea>

    <input type="submit" value="Add comment">
    </form>

<hr>

@endforeach

<a href="/ideas/create"> Create an Idea </a>

@endif

@endauth 

@guest

<h1> Login to view ideas </h1>

<a href="/login"> Login </a>

@endguest









