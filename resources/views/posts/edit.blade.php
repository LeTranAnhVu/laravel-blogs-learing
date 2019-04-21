<h1>Edit Post</h1>
    <form action="{{route('posts.update', ['id'=>$post['id']])}}" method="POST">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <div>
        <input type="text" id="title" name="title" value="{{$post['title']}}" placeholder="title">
    </div>
    <div>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="content">{{$post['content']}}</textarea>
    </div>
    <div>
        <input type="submit">
    </div>
</form>