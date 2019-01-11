@extends('layout')

@section('content')
    <h1 class="title">{{$project->title}}</h1>

    <div class="content">{{$project->description}}
        <p><a href="/projects/{{$project->id}}/edit">Edit</a></p>
    </div>



    @if($project->tasks->count())
        <div>
            @foreach ($project->tasks as $task)
                <div>
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <label class="checkbox {{ $task->complited?'is-complete':'' }}" for="complited">
                            <input type="checkbox" name="complited" onchange="this.form.submit()" {{ $task->complited?'checked':'' }}>
                            {{$task->description}}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

@endsection