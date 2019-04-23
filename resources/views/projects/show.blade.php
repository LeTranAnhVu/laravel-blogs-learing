<section>
    <h3>{{$project->name}}</h3>
    <p>{{$project->description}}</p>
    <ul>
        @foreach($project->tasks as $task)
            <li>
            <form action="" method="POST">
                @method('PATCH')
                @csrf
                <label for="complete">{{$task->name}}</label>
                <input type="checkbox" name="complete">
            </form>
            </li>
        @endforeach
    </ul>
</section>

