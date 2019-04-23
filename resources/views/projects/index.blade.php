<ul>
    @if($projects->count())
        @foreach($projects as $project)
            <li>
                <a href="{{route('projects.show',['id'=>$project->id])}}">{{$project->name}}</a>
            </li>
        @endforeach
    @endif
</ul>
