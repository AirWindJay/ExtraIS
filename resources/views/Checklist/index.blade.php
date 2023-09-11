@extends('layouts.adminltelayout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>CHART CHECKLIST</h1>
        </div>
        <div class="col-sm-12">
            <a href="#" data-toggle="modal" data-target="#UniChargesearchpatientmodal" style="margin-left:10px"><i class="fa fa-user"></i><i class="fa fa-search"></i><span>Search Patient</span></a>
        </div>
        <div class="col-sm-12">
            <table style="width: 100%; border-color: black">
                <tr>
                    <td style="width: 10%;">
                        Patient Name : 
                    </td>
                    <td>
                        <input type="text" id="toppatientname" class="form-control" disabled="disabled">
                    </td>
                    <td style="width: 10%;">
                        Encounter Type :  
                    </td>
                    <td>
                        <input type="text" id="topencountertype" class="form-control" disabled="disabled">
                    </td>
                </tr>
                <tr>
                    <td>
                        HOSPITAL NO. : 
                    </td>
                    <td>
                        <input type="text" class="form-control" disabled="disabled">
                    </td>
                    <td>
                        PHILHEALTH TYPE : 
                    </td>
                    <td>
                        <input type="text" class="form-control" disabled="disabled">
                    </td>
                </tr>
            </table>

            <table style="width: 100%">
                <thead>
                    <tr bgcolor="black" style="color:white">
                        <th>
                            Charge Slip No.
                        </th>
                        <th>
                            <sup>Item Description</sup><sub>Type Of Charge</sub>
                        </th>
                        <th>
                            Unit
                        </th>
                        <th>
                            Quantity
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Amount
                        </th>
                        <th>
                            Doctor
                        </th>
                    </tr>
                </thead>
            </table>
            
        </div>
    </div>

    {{-- MODAL --}}
    <div class="modal fade" id="UniChargesearchpatientmodal" tabindex="-1" role="dialog" aria-labelledby="UniChargesearchpatientmodalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="UniChargesearchpatientmodalTitle">Search Patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-sm-6">
                    <label for="hospnumber">HOSP NUMBER</label>
                    <input type="text" id="hospnumber" name="hospnumber" class="form-control">
                    <label for="patlast">LAST NAME:</label>
                    <input type="text" id="patlast" name="patlast" class="form-control">
                    <label for="patfirst">FIRST NAME:</label>
                    <input type="text" id="patfirst" name="patfirst" class="form-control">
                    <label for="patmiddle">MIDDLE NAME:</label>
                    <input type="text" id="patmiddle" name="patmiddle" class="form-control">
                    <button class="btn btn-info" style="margin-top: 5px" onclick="UniChargegenpatlist()">Retrieve</button>
                    </div>
                    <div class="col-sm-6" style="height: 300px; overflow: auto;">
                        <table class="table table-bordered" style="width: 100%" id="UniChargeenctrtable">
                            <thead class="thead-dark">
                                <tr style="color:white" bgcolor="black">
                                    <th style="width: 20%">
                                        DATE/TIME
                                    </th>
                                    <th style="width: 20%">
                                        TYPE
                                    </th>
                                    <th style="width: 60%">
                                        FINAL DIAGNOSIS
                                    </th>
                                    <th>
                                        ACTION
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-12 mt-2" style="height: 300px; overflow: auto;">
                    <table class="table table-striped" style="width: 100%;" id="UniChargepatlistTable">
                        <thead>
                            <tr style="color:white" bgcolor="black">
                                <th>
                                    ACTION
                                </th>
                                <th>
                                    HOSP NUMBER
                                </th>
                                <th>
                                    LAST NAME
                                </th>
                                <th>
                                    FIRST NAME
                                </th>
                                <th>
                                    MIDDLE NAME
                                </th>
                                <th>
                                    BIRTH DATE
                                </th>
                                <th>
                                    BIRTHPLACE
                                </th>
                                <th>
                                    SEX
                                </th>
                                <th>
                                    ACTION
                                </th>
                            </tr>
                        </thead>
                        <tbody>
        
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function test()
        {
            var enccode = $(this).attr('data-enccode');
            console.log(enccode);

            $(document).on('click', '#UniChargebtnSelect', function(){
            var hpercode = $(this).attr('data-hpercode');
            
            var template = '';
            $.ajax({
                type: "POST",
                url: '/JS/submitenccode',
                data: {enccode : enccode},
                dataType: 'json',
                success: function(data)
                {
                    console.log(data);
                },
            });
        })
        }
        function onloadpage()
        {
            
        }

        function UniChargegenpatlist()
        {
            var hospnumber = $("#hospnumber").val();
            var patlast = $("#patlast").val();
            var patfirst = $("#patfirst").val();
            var patmiddle = $("#patmiddle").val();

            console.log(hospnumber);
            console.log(patlast);
            console.log(patfirst);
            console.log(patmiddle);

            var template = '';
            $.ajax({
                type: "POST",
                url: '/JS/genpatientlist',
                data: { hospnumber: hospnumber, patlast: patlast, patfirst: patfirst, patmiddle: patmiddle },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if(data != null)
                    {
                        $('#UniChargepatlistTable tbody').empty();
                        $('#UniChargeenctrtable tbody').empty();
                        data.forEach(element =>
                        {
                            template += '<tr>' +
                                    '<td><a href="#" id="UniChargebtnSelect" class="btn btn-info" data-hpercode="'+ element.hpercode +'">Encounter History</a></td>' +
                                    '<td>'+ element.hpercode +'</td>' +
                                    '<td>'+ element.patlast +'</td>' +
                                    '<td>'+ element.patfirst +'</td>' +
                                    '<td>'+ element.patmiddle +'</td>' +
                                    '<td>'+ element.patbdate +'</td>' +
                                    '<td>'+ element.patbplace +'</td>' +
                                    '<td>'+ element.patsex +'</td>' +
                                    '<td><a href="#" class="btn btn-info" data-enccode="'+ element.enccode +'" onclick="test()">Latest Encounter</a></td>' +
                                    '</tr>';
                        });
                        $('#UniChargepatlistTable tbody').append(template);
                        // $('#UniChargepatlistTable').modal('show');
                    }
                }
            });
        }

        $(document).on('click', '#UniChargebtnSelect', function(){
            var hpercode = $(this).attr('data-hpercode');
            
            var template = '';
            $.ajax({
                type: "POST",
                url: '/JS/genenclist',
                data: {hpercode : hpercode},
                dataType: 'json',
                success: function(data)
                {
                    console.log(data);
                    if(data != null)
                    {
                        $('#UniChargeenctrtable tbody').empty();
                        data.forEach(element =>
                        {
                            template += '<tr>' +
                                    '<td>'+ element.admdate +'</td>' +
                                    '<td>'+ element.toecode +'</td>' +
                                    '<td>'+ element.findx +'</td>' +
                                    '<td><a href="#" class="btn btn-info" data-enccode="'+ element.enccode +'">SUBMIT</a></td>' +
                                    '</tr>';
                        });
                        $('#UniChargeenctrtable tbody').append(template);
                    }
                    
                },
            });
        })

        $(document).on('click', '#UniChargeAddCharge', function(){

            var toppatientname = document.getElementById("toppatientname").value; 
            if(toppatientname == '')
            {
                alert("Search A Patient First!");
                $('#UniChargepatlistTable tbody').empty();
                $('#UniChargeenctrtable tbody').empty();
                $("#UniChargesearchpatientmodal").modal("show");
            }
            else
            {

            }
        })
    </script>
@endsection

@section('style')
    <style>
        td
        {
            border: 1px solid black;
        }
    </style>
@endsection

