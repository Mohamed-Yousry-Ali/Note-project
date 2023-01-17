@extends('master')

@section('content')

<span><b><a href="../pages/"> Back To Pages List </a></b></span>

@foreach($page->notes as $note)

    <div class="row list-group-item page-title-list">
        <div class="col-xs-8">
        {{$note->text}}
        </div>
        <div class="col-xs-4">
            <div><a href="../notes/{{$note->id}}/delete" class="btn btn-danger pull-right">Delete</a></div>
            <div><a href="../notes/{{$note->id}}/edit" class="btn btn-danger pull-right">Edit</a></div>
        </div>
    </div>

@endforeach

<div class="row list-group-item">
    <form method="POST" action="{{ $page->id }}/notesstore">
        {{csrf_field()}}
        <div class="input-group">
            <input type="text" name="text" class="form-control" placeholder="Add Note ...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Add</button>
            </span>
        </div>
    </form>
</div>

    @if(count($errors))
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
@stop