@extends('layouts.app')

@section('content')
    <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Laravel 9 CRUD Example</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('Dataclients.create') }}"> Create Student</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th> Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{$Dataclients.id}}
                    @foreach ($Dataclients as $dataclient)
                        <tr>
                            <td>{{ $dataclient->id }}</td>
                            <td>{{ $dataclient->name }}</td>
                            <td>{{ $dataclient->email }}</td>
                            <td>{{ $dataclient->address }}</td>
                            <td>
                                <form action="{{ route('students.destroy',$student->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
     
        </div>
@endsection
