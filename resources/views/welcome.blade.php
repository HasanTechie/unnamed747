@extends ('layout')

@section('content')
    <h1>This is Homepage</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{$task}}</li>
        @endforeach

    </ul>



@endsection
