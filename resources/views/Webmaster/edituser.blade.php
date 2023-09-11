@extends('layouts.adminltelayout')

@section('content')
    <div style="width: 100%; height: 800px; overflow: auto; margin: auto;">
        <div class="card">
            <div class="card-header"><h1>EDIT USER</h1></div>
            <hr>
            <div class="card-body">
                <table class="table-bordered" style="width: 95%; margin: auto">
                    <thead>
                        <tr>
                            <th>
                                Employee ID
                            </th>
                            <th>
                                Role
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$user->employeeid}}
                            </td>
                            <td>
                                <form action="/webmaster/save/edit" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="employeeid" id="employeeid" value="{{$user->employeeid}}" disabled>
                                    <input type="text" name="employeeid" id="employeeid" value="{{$user->employeeid}}" hidden>
                                    <input type="text" name="role_id" id="role_id" value="{{$user->role_id}}">
                                    <button type="submit" class="btn btn-success">SAVE</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
