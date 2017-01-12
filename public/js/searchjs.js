/**
 * Created by user on 11/01/2017.
 */
$(document).ready(function () {
    $('#searchParcel').click(function (event) {
       event.preventDefault();
        //Validation
        var data=$('#parcel_number').val();
        var url='http://localhost/lvs/public/land/search/'+data;
        console.log(url);
        var reportTemp='';
        $.ajax({
            url: url,
            type: 'get',
            success: function (result) {
                console.log(JSON.parse(result));
                var resultArr=JSON.parse(result);
                if(resultArr.length < 1)
                {
                    console.log('EMPTY!');
                    $('#result').html('<label class="alert alert-info"> We could not find that land :( </label>');
                }
                else {
                    var resultArr=JSON.parse(result);
                    console.log(resultArr[0].name_firstpart);
                    $('#result').html('' +
                        '<div class="card">' +
                        '<div class="card-body">' +
                        '<div class="nav-justified"><i>Property Owner : </i>' + resultArr[0].name+ " " + resultArr[0].last_name + '</div>' +
                        '<div class="nav-justified"><i>Property Location : </i>' + resultArr[0].location +
                        '<div class="nav-justified"><i>Property Number : </i>' + resultArr[0].name_lastpart + "/" + resultArr[0].name_firstpart+ '</div>'+ '</div></div></div>' );
                    $('form#searchform')[0].reset();
                }

            },
            error: function (res) {
                console.log('error');
                $('#result').html('<label class="alert alert-error">Oh oh!! Please try again</label>');
            }
        });
    });
});
