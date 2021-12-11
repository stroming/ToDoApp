@extends('base')

@section('main')
<div>
    <a style="margin: 19px;" href="{{ route('tasks.create')}}" class="btn btn-primary">New task</a>
    </div>  
<div class="row">
<div class="col-sm-12">

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}  
  </div>
@endif
    <h1 class="display-3">Tasks</h1>    
  <table class="table table-striped">
    <thead>
      <tr>
          <td>Id</td>
          <td>Title</td>
          <td>Description</td>
          <td>Task</td>
          <td>User id</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->title}} </td>
            <td>{{$task->description}}</td>
            <td>{{$task->todo}}</td>
            <td>{{$task->user_id}}</td>
            <td>
                <a href="{{ route('tasks.edit',$task->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('tasks.destroy', $task->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection