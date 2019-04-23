<section style="margin: 40px; padding: 30px">
    <form action="{{route('projects.store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="project name" style="border: {{$errors->has('name') ? '1px red solid' : 'initial'}}">
        <div>
            <textarea name="description" placeholder="description" cols="20" rows="20"></textarea>
        </div>
        <input type="submit">
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{$e}}</li>
                @endforeach
            </ul>
        @endIf
    </form>
</section>