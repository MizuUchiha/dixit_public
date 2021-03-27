function register_new_user() {
    let data = $('#register').serializeObject();
    if (data.u_name.length < 4) {
        $('#u_name').addClass('is-invalid')
    }
    if (validateForm('register')) {
        $.ajax({
            url: '../ajax/user?check_user',
            data: data,
            type: 'POST',
            success: function (data) {
                if (data == 'success')
                    $.ajax({
                        url: '../ajax/user?register',
                        data: data,
                        type: 'POST',
                        success: function (data) {
                            Swal.fire(
                                'Good job!',
                                'You have been registered! You can login now.',
                                'success'
                            );
                            window.location = 'login';
                        }
                    });
                else
                    Swal.fire(
                        'Sorry!',
                        'It looks like this username has been taken.',
                        'error'
                    );
            }
        });

    }
}

$('#u_name').on('keyup change', function () {
    let reg = /^[a-zA-Z0-9]*$/gm;
    if (!reg.test($(this).val()))
        $(this).addClass('is-invalid')
});
$('#re_pass').on('keyup change', function () {
    if ($(this).val() !== $('#u_pass').val())
        $(this).addClass('is-invalid')
});