@extends('master')

@section('content')
<span><b><a href="../"> Back To Pages List </a></b></span>

<div class="row list-group-item-info page-title">
<div class="col-xs-12">
   Are You Sure Want To Delete All Notes In <b>{{$page->title}}</b>
</div>
</div>


<div class="row list-group-item">
<div class="col-xs-12">
    <a href="../../pages/{{$page->id}}/deleteall" type="button" class="btn btn-danger ">Delete All</a>
    <a href="../" type="button"  class="btn btn-default">No Go Back</a>
</div>
</div>