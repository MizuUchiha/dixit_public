// SERIALIZE OBJECT
$.fn.serializeObject = function () {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

// VERIFY FORM
function validateForm(form_id) {
    let count_invalid = 0;
    $('#' + form_id).find('[required]').each(function () {
        if ($(this).val().trim() == '') {
            $(this).addClass('is-invalid');
            count_invalid++;
        } else {
            $(this).addClass('is-valid');
        }
    });
    return (count_invalid === 0);
}

// Email must be an email
$('input[type=email]').on('keyup change', function () {
    let input = $(this),
        re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
        is_email = re.test(input.val());
    if (is_email)
        input.removeClass("is-invalid").addClass("is-valid");
    else
        input.removeClass("is-valid").addClass("is-invalid");
});

// REMOVE INVALID
$('body').on('keyup', '.is-invalid', function () {
    $(this).removeClass('is-invalid');
});

// VIEW PASSWORD
$('.toggle-password').on('click', function () {
    $(this).toggleClass('fa-eye fa-eye-slash');
    let input = $($(this).data("toggle"));
    input.attr('type', ((input.attr("type") == "password") ? 'text' : 'password'));
});

// SIGN OUT
function logOut() {
    $.ajax({
        url: '../ajax/user?log_out',
        data: {id: 'sign_out'},
        type: 'POST',
        success: function (data) {
            window.location = 'index';
        }
    });
}