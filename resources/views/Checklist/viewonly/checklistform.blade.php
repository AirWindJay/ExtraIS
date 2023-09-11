@extends('layouts.adminltelayout')

@section('content')
    <div style="font-size: 12px">
        <div>
            <div class="card">
                <div class="card-header" align="center">
                    {{-- <h5>{{$checklist[0]->patlast}}, {{$checklist[0]->patfirst}} {{$checklist[0]->patmiddle}}</h5>
                    <h5>Hospital Number: {{$checklist[0]->hpercode}}</h5>
                    <h6>PARTS OF CHART</h6> --}}
                    <table style="width: 95%">
                        <tr style="border: 1px solid black;">
                            <td rowspan="4" align="center" style="border: 1px solid black;">
                                <img src="{{ asset('/image/bghmc.png') }}" width="100px" height="100x">
                            </td>
                            <td colspan="3" style="border: 1px solid black;">
                                <center>Republic of the Philippines<br>Department if Health<br><b>BAGUIO GENERAL HOSPITAL AND MEDICAL CENTER</b><br>Baguio City</center>
                            </td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td rowspan="3" style="border: 1px solid black;">
                                <center><h4>IN - PATIENT'S RECORD (CHART)<br>CHECKLIST</h4></center>
                            </td>
                            <td colspan="2" style="border: 1px solid black;">
                                Form No.: <b>NS-COM-001A</b>
                            </td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td colspan="2" style="border: 1px solid black;">
                                Revision No.: 2
                            </td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td colspan="2" style="border: 1px solid black;">
                                Effectivity Date: Sept 1, 2016
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-body">
                        @include('Checklist.viewonly.tablechecklistform')
                    <table style="width: 95%" align="center">
                        <tr>
                            <td style="border: 1px solid black; width: 50%">
                                <b>Name of Patient:</b> {{$checklist[0]->patlast}}, {{$checklist[0]->patfirst}} {{$checklist[0]->patmiddle}}
                            </td>
                            <td style="border: 1px solid black; width: 50%">
                                <b>Hospital Number:</b> {{$checklist[0]->hpercode}}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer" align="center">
                    <button class="btn btn-info" id="btnprint" style="width: 90%; height: 200px; font-size: 50px" onclick="printpage()">PRINT</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // $(document).ready(function() {
        //     $('[data-toggle="toggle"]').change(function(){
        //         $(this).parents().next('.hide').toggle();
        //     });
        // });

        // $('.header').click(function(){

        // $(this).nextUntil('tr.header').slideToggle(0);
        // });
        function printpage()
        {
            $("#btnprint").hide();
            window.print();
            $("#btnprint").show();
        }
    </script>
@endsection

@section('style')
    <style type="text/css">
        input[type="checkbox"]
        {
            width: 10px; /*Desired width*/
            height: 10px; /*Desired height*/
            pointer-events:none;
        }
        /* .checkmark:after
        {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid black;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        select[disabled] { opacity: 0 } */
         /* table, tr,   td
        {
            border: 1px solid black;
        } */

        /*table
        { 
            border-collapse: collapse; 
        }

        td,
        {  
            border: 1px solid #ccc; 
            text-align: left;
        }

        .labels tr td
        {
            background-color: #2cc16a;
            font-weight: bold;
            color: #fff;
        }

        .label tr td label
        {
            display: block;
        } */
        /* tr.header
        {
            cursor:pointer;
        } */
    </style>
@endsection

