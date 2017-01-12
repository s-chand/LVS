/**
 * Created by user on 10/01/2017.
 */
$(document).ready(function () {
    $('#submit').click(function (event) {
        event.preventDefault();
        //Make the ajax submission
        $.ajax({
            url: 'http://localhost/lvs/public/api/submit',
            type: 'post',
            data: $('form#feedback').serialize(),
            success: function (result) {
                $('#feedbackMessage').html('<label class="alert alert-success">Successful! Thank you so much. We will be in touch</label>');
                $('form#feedback')[0].reset();

            },
            error: function (res) {
                console.log(res);
                $('label#feedbackMessage').html('<label class="alert alert-error">Oh oh!! Please try again</label>');
            }
        });
    });
});
