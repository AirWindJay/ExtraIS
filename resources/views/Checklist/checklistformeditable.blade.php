@extends('layouts.adminltelayout')

@section('content')
    <div style="font-size: 20px">
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
                                <center><h3>IN - PATIENT'S RECORD (CHART)<br>CHECKLIST</h3></center>
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
                <br>
                <label for="select_all" style="margin-left: 30px">Select All</label>
                <input type="checkbox" id="select_all" onchange="select_all()" class="d-print-none" style="width: 25px; height: 25px">
                <form action="/checklist/save" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" id="enccode" name="enccode" value="{{$checklist[0]->enccode}}" hidden>
                    <div class="card-body" style="padding-bottom: 50px">
                            @include('Checklist.tablechecklistformeditable')
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
                    <div align="center">
                        <button type="submit" class="btn btn-success d-print-none" style="width: 200px; height: 55px; font-size: 30px">SAVE!</button>
                    </div>
                </form>
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

        function select_all()
        {
            var select_all = document.getElementById("select_all");
            var text1 = document.getElementById("firstcollapse");
            var text2 = document.getElementById("secondcollapse");
            var text3 = document.getElementById("thirdcollapse");
            var text4 = document.getElementById("fourthcollapse");

            if (select_all.checked == true)
            {
                text1.style.display = "";
                text2.style.display = "";
                text3.style.display = "";
                text4.style.display = "";
                document.getElementById("checkcount[0]").checked = true;
                document.getElementById("checkcount[1]").checked = true;
                document.getElementById("checkcount[2]").checked = true;
                document.getElementById("checkcount[3]").checked = true;
                document.getElementById("checkcount[4]").checked = true;
                document.getElementById("checkcount[5]").checked = true;
                document.getElementById("checkcount1").checked = true;
                document.getElementById("checkcount[7]").checked = true;
                document.getElementById("checkcount[9]").checked = true;
                document.getElementById("checkcount[8]").checked = true;
                document.getElementById("checkcount[10]").checked = true;
                document.getElementById("checkcount[11]").checked = true;
                document.getElementById("checkcount2").checked = true;
                document.getElementById("checkcount[13]").checked = true;
                document.getElementById("checkcount[14]").checked = true;
                document.getElementById("checkcount[15]").checked = true;
                document.getElementById("checkcount[16]").checked = true;
                document.getElementById("checkcount[17]").checked = true;
                document.getElementById("checkcount[18]").checked = true;
                document.getElementById("checkcount3").checked = true;
                document.getElementById("checkcount[20]").checked = true;
                document.getElementById("checkcount[21]").checked = true;
                document.getElementById("checkcount[22]").checked = true;
                document.getElementById("checkcount[23]").checked = true;
                document.getElementById("checkcount[24]").checked = true;
                document.getElementById("checkcount[25]").checked = true;
                document.getElementById("checkcount[26]").checked = true;
                document.getElementById("checkcount[27]").checked = true;
                document.getElementById("checkcount[28]").checked = true;
                document.getElementById("checkcount[29]").checked = true;
                document.getElementById("checkcount[30]").checked = true;
                document.getElementById("checkcount[31]").checked = true;
                document.getElementById("checkcount4").checked = true;
                document.getElementById("checkcount[33]").checked = true;
                document.getElementById("checkcount[34]").checked = true;
                document.getElementById("checkcount[35]").checked = true;
                document.getElementById("checkcount[36]").checked = true;
                document.getElementById("checkcount[37]").checked = true;
                document.getElementById("checkcount[38]").checked = true;
                document.getElementById("checkcount[39]").checked = true;
                document.getElementById("checkcount[40]").checked = true;
                document.getElementById("checkcount[41]").checked = true;
                document.getElementById("checkcount[42]").checked = true;
                document.getElementById("checkcount[43]").checked = true;
                document.getElementById("checkcount[44]").checked = true;
                document.getElementById("checkcount[45]").checked = true;
                document.getElementById("checkcount[46]").checked = true;
                document.getElementById("checkcount[47]").checked = true;
                document.getElementById("checkcount[48]").checked = true;
                document.getElementById("checkcount[49]").checked = true;
                document.getElementById("checkcount[50]").checked = true;
                document.getElementById("checkcount[51]").checked = true;
                document.getElementById("checkcount[52]").checked = true;
                document.getElementById("checkcount[53]").checked = true;
                document.getElementById("checkcount[54]").checked = true;
                document.getElementById("checkcount[55]").checked = true;
                document.getElementById("checkcount[56]").checked = true;
            }

            else
            {
                text1.style.display = "none";
                text2.style.display = "none";
                text3.style.display = "none";
                text4.style.display = "none";
                document.getElementById("checkcount[0]").checked = false;
                document.getElementById("checkcount[1]").checked = false;
                document.getElementById("checkcount[2]").checked = false;
                document.getElementById("checkcount[3]").checked = false;
                document.getElementById("checkcount[4]").checked = false;
                document.getElementById("checkcount[5]").checked = false;
                document.getElementById("checkcount1").checked = false;
                document.getElementById("checkcount[7]").checked = false;
                document.getElementById("checkcount[9]").checked = false;
                document.getElementById("checkcount[8]").checked = false;
                document.getElementById("checkcount[10]").checked = false;
                document.getElementById("checkcount[11]").checked = false;
                document.getElementById("checkcount2").checked = false;
                document.getElementById("checkcount[13]").checked = false;
                document.getElementById("checkcount[14]").checked = false;
                document.getElementById("checkcount[15]").checked = false;
                document.getElementById("checkcount[16]").checked = false;
                document.getElementById("checkcount[17]").checked = false;
                document.getElementById("checkcount[18]").checked = false;
                document.getElementById("checkcount3").checked = false;
                document.getElementById("checkcount[20]").checked = false;
                document.getElementById("checkcount[21]").checked = false;
                document.getElementById("checkcount[22]").checked = false;
                document.getElementById("checkcount[23]").checked = false;
                document.getElementById("checkcount[24]").checked = false;
                document.getElementById("checkcount[25]").checked = false;
                document.getElementById("checkcount[26]").checked = false;
                document.getElementById("checkcount[27]").checked = false;
                document.getElementById("checkcount[28]").checked = false;
                document.getElementById("checkcount[29]").checked = false;
                document.getElementById("checkcount[30]").checked = false;
                document.getElementById("checkcount[31]").checked = false;
                document.getElementById("checkcount4").checked = false;
                document.getElementById("checkcount[33]").checked = false;
                document.getElementById("checkcount[34]").checked = false;
                document.getElementById("checkcount[35]").checked = false;
                document.getElementById("checkcount[36]").checked = false;
                document.getElementById("checkcount[37]").checked = false;
                document.getElementById("checkcount[38]").checked = false;
                document.getElementById("checkcount[39]").checked = false;
                document.getElementById("checkcount[40]").checked = false;
                document.getElementById("checkcount[41]").checked = false;
                document.getElementById("checkcount[42]").checked = false;
                document.getElementById("checkcount[43]").checked = false;
                document.getElementById("checkcount[44]").checked = false;
                document.getElementById("checkcount[45]").checked = false;
                document.getElementById("checkcount[46]").checked = false;
                document.getElementById("checkcount[47]").checked = false;
                document.getElementById("checkcount[48]").checked = false;
                document.getElementById("checkcount[49]").checked = false;
                document.getElementById("checkcount[50]").checked = false;
                document.getElementById("checkcount[51]").checked = false;
                document.getElementById("checkcount[52]").checked = false;
                document.getElementById("checkcount[53]").checked = false;
                document.getElementById("checkcount[54]").checked = false;
                document.getElementById("checkcount[55]").checked = false;
                document.getElementById("checkcount[56]").checked = false;

            }

        }


        function firstcollapse() {
            var checkBox = document.getElementById("checkcount1");
            var text = document.getElementById("firstcollapse");
            if (checkBox.checked == true)
            {
                text.style.display = "";
            } else
            {
                text.style.display = "none";
                document.getElementById("checkcount[7]").checked = false;
                document.getElementById("checkcount[8]").checked = false;
                document.getElementById("checkcount[9]").checked = false;
                document.getElementById("checkcount[10]").checked = false;
            }
        }

        function secondcollapse() {
            var checkBox = document.getElementById("checkcount2");
            var text = document.getElementById("secondcollapse");
            if (checkBox.checked == true)
            {
                text.style.display = "";
            } else
            {
                text.style.display = "none";
                document.getElementById("checkcount[13]").checked = false;
                document.getElementById("checkcount[14]").checked = false;
                document.getElementById("checkcount[15]").checked = false;
                document.getElementById("checkcount[16]").checked = false;
                document.getElementById("checkcount[17]").checked = false;
                document.getElementById("checkcount[18]").checked = false;
            }
        }
        
        function thirdcollapse() {
            var checkBox = document.getElementById("checkcount3");
            var text = document.getElementById("thirdcollapse");
            if (checkBox.checked == true)
            {
                text.style.display = "";
            } else
            {
                text.style.display = "none";
                document.getElementById("checkcount[20]").checked = false;
                document.getElementById("checkcount[21]").checked = false;
                document.getElementById("checkcount[22]").checked = false;
                document.getElementById("checkcount[23]").checked = false;
                document.getElementById("checkcount[24]").checked = false;
                document.getElementById("checkcount[25]").checked = false;
                document.getElementById("checkcount[26]").checked = false;
                document.getElementById("checkcount[27]").checked = false;
                document.getElementById("checkcount[28]").checked = false;
                document.getElementById("checkcount[29]").checked = false;
                document.getElementById("checkcount[30]").checked = false;
                document.getElementById("checkcount[31]").checked = false;
            }
        }

        function fourthcollapse() {
            var checkBox = document.getElementById("checkcount4");
            var text = document.getElementById("fourthcollapse");
            if (checkBox.checked == true)
            {
                text.style.display = "";
            } else
            {
                text.style.display = "none";
                document.getElementById("checkcount[33]").checked = false;
                document.getElementById("checkcount[34]").checked = false;
                document.getElementById("checkcount[35]").checked = false;
                document.getElementById("checkcount[36]").checked = false;
                document.getElementById("checkcount[37]").checked = false;
                document.getElementById("checkcount[38]").checked = false;
                document.getElementById("checkcount[39]").checked = false;
                document.getElementById("checkcount[40]").checked = false;
                document.getElementById("checkcount[41]").checked = false;
                document.getElementById("checkcount[42]").checked = false;
            }
        }
    </script>
@endsection

@section('style')
    <style>
        input[type="checkbox"]
        {
            width: 15px; /*Desired width*/
            height: 15px; /*Desired height*/
        }
        .checkmark:after
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

