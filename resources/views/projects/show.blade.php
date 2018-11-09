@extends('layout.master')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">
        <div class="content">
            {{ $project->description }}
        </div>

        <p>
            <a href="/projects/{{ $project->id }}/edit">Edit</a>
        </p>
    </div>

    @if($project->tasks->count())

        <div class="box">

            @foreach($project->tasks as $task)

                <div>

                    {{--PATCH /tasks/id recommended--}}
                    <form action="/tasks/{{ $task->id }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <label class="checkbox {{ $task->completed ? 'is-complete'  : ''}}" for="completed">

                            <input type="checkbox" name="completed" onchange="this.form.submit()"
                                    {{ $task->completed ? 'checked'  : ''}}>

                            {{ $task->body }}

                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif
    

@endsection