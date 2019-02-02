@extends('layouts.app')

@section('content')
  <h1>Todos</h1>
  @if(count($todos) > 0)
    @foreach($todos as $todo)
      <div class="card mb-4 mt-4 bg-light">
        <div class="card-body">
          <h3>
            <a href="todo/{{$todo->id}}">{{$todo->text}}</a>
            <span class="badge badge-danger">{{$todo->due}}</span>
          </h3>
        </div>
      </div>
    @endforeach
  @endif
@endsection
