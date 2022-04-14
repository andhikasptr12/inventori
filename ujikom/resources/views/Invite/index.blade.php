@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h5>Data Members</h5>
                        <div class="mb-5">
                            <a href="{{route('invite.create')}}" class="btn btn-outline-primary btn-sm">Tambah members</a>
                        </div>
                        <table class="table table-striped" s>
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Phone</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($users as $user)
                              <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->roles->first()->name}}</td>
                                <td>{{$user->phone}}</td>
                                <td>
                                    <form action="{{route('invite.delete', $user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('invite.edit', $user->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection