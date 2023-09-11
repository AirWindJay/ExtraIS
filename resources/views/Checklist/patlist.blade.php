@extends('layouts.adminltelayout')

@section('content')
    <div style="width: 100%; height: 800px; overflow: auto; margin: auto;">
        <div class="card">
            <div class="card-header"><h1>PATIENT LIST</h1></div>
            <hr>
            <div class="card-body">
                <table class="table-bordered" style="width: 95%; margin: auto">
                    <thead>
                        <tr>
                            <th>
                                Patient Name
                            </th>
                            <th>
                                Admit Date
                            </th>
                            <th>
                                Discharge Date
                            </th>
                            <th>
                                Ward
                            </th>
                            <th>
                                Type
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pats as $pat)
                            <tr>
                                <td>
                                    @if ($mydata[0]->role_id == '99')
                                        <form action="/generate/checklist" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" name="enccode" id="enccode" value="{{$pat->enccode}}" hidden>
                                            <button type="submit" class="btn btn-primary" style="font-size: 20px">{{$pat->patlast}}, {{$pat->patfirst}} {{$pat->patmiddle}}</button>
                                        </form>
                                    @elseif ($mydata[0]->role_id != '99')
                                        <form action="/generate/checklisteditable" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" name="enccode" id="enccode" value="{{$pat->enccode}}" hidden>
                                            <button type="submit" class="btn btn-primary" style="font-size: 20px">{{$pat->patlast}}, {{$pat->patfirst}} {{$pat->patmiddle}}</button>
                                        </form>
                                    @endif
                                    
                                </td>
                                <td>
                                    {{date('F d Y', strtotime($pat->admdate))}}
                                </td>
                                <td>
                                    {{date('F d Y', strtotime($pat->disdate))}}
                                </td>
                                <td>
                                    {{$pat->getward}}
                                </td>
                                <td>
                                    {{$pat->enctype}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
