@extends('layouts.adminltelayout')

@section('content')
    <div style="width: 100%; height: 800px; overflow: auto; margin: auto;">
        <div class="card">
            <div class="card-header"><h1>ACTIVITY LOG</h1></div>
            <hr>
            <div class="card-body">
                <table class="table-bordered" style="width: 95%; margin: auto">
                    <thead>
                        <tr>
                            <th>
                                Employee Name
                            </th>
                            <th>
                                Activity Details
                            </th>
                            <th>
                                Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($actlogs as $actlog)
                            <tr>
                                <td>
                                    {{$actlog->lastname}}, {{$actlog->firstname}} {{$actlog->middlename}}
                                </td>
                                <td>
                                    {{$actlog->act_details}}
                                </td>
                                <td>
                                    {{date('F d Y H:i:s', strtotime($actlog->created_at))}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                {{ $actlogs->links() }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
