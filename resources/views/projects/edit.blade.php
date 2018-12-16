@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="post" action="/projects/{{$project->id}}">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{$project->title}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea class="textarea" name="description"
                          placeholder="Description">{{$project->description}}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>
    <form method="post" action="/projects/{{$project->id}}" style="margin-top: 1em;">

        @csrf
        @method('DELETE')
        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Project</button>
            </div>
        </div>
    </form>
@endsection