@extends('layouts.adminltelayout')

@section('content')
    <div style="width: 100%; height: 800px; overflow: auto; margin: auto;">
        <div class="card">
            <div class="card-header"><h1>USER LIST<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add User</button></h1></div>
            <hr>
            <div class="card-body">
                <table class="table-bordered" style="width: 95%; margin: auto">
                    <thead>
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Role
                            </th>
                            <th>
                                Date
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{$user->lastname}}, {{$user->firstname}} {{$user->middlename}}
                                </td>
                                <td>
                                    {{$user->role_id}}
                                </td>
                                <td>
                                    {{date('F d Y H:i:s', strtotime($user->created_at))}}
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Option
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="/webmaster/edit/{{$user->employeeid}}">{{ __('Edit') }}</a></li>
                                            <li><a href="/webmaster/delete/{{$user->employeeid}}">{{ __('Delete') }}</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">User List</h4>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Last Name.." title="Type in a name">
                </div>
                <div class="modal-body">
                    <table style="width: 100%" id="myTable">
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>
                                        {{$employee->lastname}}, {{$employee->firstname}} {{$employee->middlename}}
                                    </td>
                                    <td>
                                        <form action="/webmaster/adduser" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" id="role_id" name="role_id" required value="99" style="width: 100px">
                                            <input type="text" id="employeeid" name="employeeid" value="{{$employee->employeeid}}" hidden>
                                            <button type="submit" class="btn btn-info">Add User</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script>
        function myFunction()
        {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }       
            }
        }
        </script>
@endsection