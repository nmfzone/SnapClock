$.fn.clearForm = function() {
    return this.each(function() {
        var type = this.type, tag = this.tagName.toLowerCase();
        if (tag == 'form')
            return $(':input',this).clearForm();
        if (type == 'text' || type == 'password' || tag == 'textarea')
            this.value = '';
        else if (type == 'checkbox' || type == 'radio')
            this.checked = false;
        else if (tag == 'select')
            this.selectedIndex = -1;
    });
};

var Login = function() {
    var snapValues = {};
    var photo64 = '';

    var clockInOut = function()
    {
        Metronic.startPageLoading();
        $.ajax({
            type: "POST",
            url: "attendance/store",
            data: snapValues
        })
        .done(function(response){
            $('#full-width').modal('hide');
            $('.login-form').clearForm();
            Metronic.stopPageLoading();
        });
    }

    var submitForm = function(form)
    {
        Metronic.startPageLoading();

        $.ajax({
            type: "POST",
            url: "attendance/check",
            data: $(form).serialize()
        })
        .done(function(response){
            if (response.error) {
                alert(response.msg);
                return false;
            }

            Webcam.snap( function(data_uri) {
                document.getElementById('my-photo').innerHTML = '<img style="width: 320px; height: 240px;" src="'+data_uri+'"/>';
                photo64 = data_uri.replace(/^data:image\/\w+;base64,/, '');
            } );

            $('#employee_id').html(response.employee_id);
            $('#employee_name').html(response.name);

            if (response.type == 'out') {
                $('#clock-snap').removeClass('blue').addClass('red').html("ABSEN KELUAR");
            } else {
                $('#clock-snap').removeClass('red').addClass('blue').html("HADIR MASUK");
            }

            $('#full-width').modal('show');

            snapValues = response;
            snapValues.photo = photo64;
            Metronic.stopPageLoading();
        });
    }

    var handleLogin = function() {

        $('.login-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                },
                remember: {
                    required: false
                }
            },

            messages: {
                username: {
                    required: "Username is required."
                },
                password: {
                    required: "Password is required."
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit   
                $('.alert-danger', $('.login-form')).show();
            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function(form) {
                submitForm(form);
                return false;
            }
        });

        $('.login-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.login-form').validate().form()) {
                    var form = '.login-form';
                    submitForm(form);
                }
                return false;
            }
        });
    }

    return {
        init: function() {
            handleLogin();
        },
        doClockInOut: function(elem) {
            $(elem).on('click', function(e)
            {
                e.preventDefault();
                clockInOut();
            });
        }

    };

}();