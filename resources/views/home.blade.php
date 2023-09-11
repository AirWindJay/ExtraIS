@extends('layouts.adminltelayout')

@section('content')
    <div style="width: 100%; height: 800px; overflow: auto; margin: auto;">
        <h1>Welcome {{$mydata[0]->lastname}}, {{$mydata[0]->firstname}} {{$mydata[0]->middlename}}</h1>
    </div>
@endsection
