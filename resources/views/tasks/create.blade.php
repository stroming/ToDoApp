@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <br> 
    <h1 class="display-3">Add a task</h1>
    <br>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('tasks.store') }}">
          @csrf
          <div class="form-group">    
              <label for="title">Title:</label>
              <br>
              <input type="text-area" class="form-control" name="title"/>
              <br>
          </div>

          <div class="form-group">
              <label for="todo">Task:</label>
              <br>
              <input type="text-area" class="form-control" name="todo"/>
              <br>
          </div>

          <div class="form-group">
              <label for="description">Description:</label>
              <br>
              <input type="text-area" class="form-control" name="description"/>
              <br>
          </div>
          <br>
          <button type="submit" class="btn btn-lg btn-primary">Add task</button>
          <a href="{{ route('dashboard')}}" class="btn btn-lg btn-primary">Go back</a>

      </form>
  </div>
</div>
</div>
@endsection