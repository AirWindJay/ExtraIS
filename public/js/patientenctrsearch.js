$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function onloadpage()
{
    
}

function genpatlist()
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
                $('#patlistTable tbody').empty();
                $('#enctrtable tbody').empty();
                data.forEach(element =>
                {
                    template += '<tr>' +
                            '<td><a href="#" class="btnSelect" data-hpercode="'+ element.hpercode +'">'+ element.hpercode +'</a></td>' +
                            '<td>'+ element.patlast +'</td>' +
                            '<td>'+ element.patfirst +'</td>' +
                            '<td>'+ element.patmiddle +'</td>' +
                            '<td>'+ element.patbdate +'</td>' +
                            '<td>'+ element.patbplace +'</td>' +
                            '<td>'+ element.patsex +'</td>' +
                            '</tr>';
                });
                $('#patlistTable tbody').append(template);
                // $('#patlistTable').modal('show');
            }
        }
    });
}

$(document).on('click', '.btnSelect', function(){
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
                $('#enctrtable tbody').empty();
                data.forEach(element =>
                {
                    template += '<tr>' +
                            '<td>'+ element.admdate +'</td>' +
                            '<td>'+ element.toecode +'</td>' +
                            '<td>'+ element.findx +'</td>' +
                            '</tr>';
                });
                $('#enctrtable tbody').append(template);
            }
            
        },
    });
})