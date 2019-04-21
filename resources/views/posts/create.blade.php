<h1>Create new Post</h1>
<form action="{{route('posts.store')}}" method="POST">
    {{csrf_field()}}
    <div>
        <input type="text" id="title" name="title" placeholder="title">
    </div>
    <div>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="content"></textarea>
    </div>
    <div>
        <input type="submit">
    </div>
</form>