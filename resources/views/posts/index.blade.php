<h1>Posts List</h1>
@if (!$posts)
    <h3>Posts empty!!</h3>
@else
    <table>
        <thead>
        <tr>
            @foreach($posts[0] as $field=>$value )
                <th>{{$field}}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                @foreach($post as $field=>$value)
                    <td>{{$value}}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
@endif