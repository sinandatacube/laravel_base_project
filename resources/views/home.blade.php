@extends('layout')
@section('title')
Home | Todo
@endsection
@section('content')
<body>
<section id="todo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center display-4">Todo</h1>
            </div>
            <div class="col-md-12">
                <form method="POST" action="{{ route('insert')}}">
                    @csrf
                    <label for="title">Title*</label>
                    <input type="text" name="title" id="title" class="form-control mb-2"/>

                    {{-- for many error list --}}
                    @foreach($errors->get('title') as $err)
                    <small class="text-danger">{{$err}}</small>
                    @endforeach
                    {{-- for single error --}}

                    {{-- @error('title')
                    <small class="text-danger">{{$message}}</small>
                    @enderror --}}
                    <input type="submit" class="btn btn-dark btn-block" value="Submit"/>
                </form>
            </div>
            <div class="col-md-12 mt-3">
                <div class="todo-list text-center">
                    @foreach($todos as $item)
                    <div class="todo-content border border-dark p-2 mb-2 d-flex justify-content-between">
                        <div>
                            <span class="lead">{{ $item -> title}}</span>
                        </div>
                        <div>
                            <span class="lead">{{ $item -> description}}</span>
                        </div>
                        <div>
                            <a href="{{route('update',$item->id)}}" class="btn btn-warning">Update</a>
                            <form action="{{route('delete',$item->id)}}" method="POST" class="d-inline-block">
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Delete"/>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section>
@endsection