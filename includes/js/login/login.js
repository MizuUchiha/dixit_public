function login() {
    let data = $('#login').serializeObject();
    if (validateForm('login'))
        $.ajax({
            url: '../ajax/user?sign_in',
            data: data,
            type: 'POST',
            success: function (data) {
                if (data != 'error') {
                    Swal.fire(
                        'Hi ' + data + '!',
                        '',
                        'success'
                    );
                    window.location = 'index';
                } else
                    Swal.fire(
                        'Sorry!',
                        'It looks like you input wrong username or password.',
                        'error'
                    );
            }
        });
}