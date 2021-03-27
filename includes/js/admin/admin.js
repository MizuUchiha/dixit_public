$(document).ready(function () {
    let categories_table = $('#categories_table').DataTable({
        "ajax": '../ajax/food?get_category',
        "pageLength": 25,
        "columns": [
            {"data": "id"},
            {"data": "name"},
            {"data": null}
        ],
        "columnDefs": [{
            "targets": -1,
            "data": null,
            className: "text-right",
            "defaultContent": '<button class="btn btn-warning btn-sm mr-1 edit_cat"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-sm delete_cat"><i class="fa fa-trash"></i></button>'
        }],
        "fnRowCallback": function (nRow, data) {
            console.log(data);
            $(nRow).attr("data-info_id", data.id);
            return nRow;
        }
    });

    $('#btn_cat').on('click', function () {
        Swal.fire({
            title: 'Add new category.',
            input: 'text',
            inputAttributes: {
                autocapitalize: 'off'
            },
            inputValidator: (value) => {
                if (!value) {
                    return 'You need to write something!'
                }
            },
            showCancelButton: true,
            confirmButtonText: 'Add'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: '../ajax/food?add_category',
                    data: {name: result.value},
                    type: 'POST',
                    success: function () {
                        categories_table.ajax.reload();
                    }
                })
            }
        })
    });
    $('#categories_table').on('click', '.edit_cat', function () {
        let row = $(this).parents('tr');
        Swal.fire({
            title: 'Edit category.',
            input: 'text',
            inputValue: row.find('td:nth-child(2)').text(),
            inputAttributes: {
                autocapitalize: 'off'
            },
            showCancelButton: true,
            inputValidator: (value) => {
                if (!value) {
                    return 'You need to write something!'
                }
            },
            confirmButtonColor: '#00695c',
            confirmButtonText: 'Edit'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: '../ajax/food?update_category',
                    data: {name: result.value, id: row.data('info_id')},
                    type: 'POST',
                    success: function () {
                        categories_table.ajax.reload();
                    }
                })
            }
        })
    });
    $('#categories_table').on('click', '.delete_cat', function () {
        let id = $(this).parents('tr').data('info_id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#00695c',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: '../ajax/food?remove_category',
                    data: {id: id},
                    type: 'POST',
                    success: function () {
                        categories_table.ajax.reload();
                    }
                });
            }
        })
    });
});