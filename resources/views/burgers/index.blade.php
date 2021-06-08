@extends('layouts.app')

@section('title' , 'Burgers')

@section('content')
    <div class="container pt-3">


        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>created at</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($burgers as $burger)
                <tr>
                    <td>{{$burger->id}}</td>
                    <td>{{$burger->name}}</td>
                    <td>{{$burger->created_at}}</td>
                    <td>
                        <div class="d-inline-flex ">
                            <a class="btn btn-primary me-1" href="{{route('burgers.show', ['burger' => $burger->id])}}">view</a>
                            <a class="btn btn-warning me-1" href="{{route('burgers.edit', ['burger' => $burger->id])}}">edit</a>
                            <form method="POST" action="{{route('burgers.destroy', ['burger' => $burger->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger me-1">delete</button>
                                {{--                                    <input type="submit" value="delete" class="btn btn-danger me-1">--}}
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
