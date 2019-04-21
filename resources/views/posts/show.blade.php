
<h1>Detail {{$post['id']}} </h1>
<ul>
    @foreach($post as $key=>$value)
        <li>{{$key}} - {{$value}}</li>
    @endforeach
</ul>