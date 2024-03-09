$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function () {
    // Listen for changes on checkboxes with class 'role-checkbox'
    $('.role-checkbox').on('change', function () {
        var userId = $(this).data('user-id');
        var roleId = $(this).val(); // Changed from roleName to roleId
        var isChecked = $(this).is(':checked');

        // Send AJAX request to the server
        $.ajax({
            type: 'POST',
            url: '/add-remove-role', // The URL to the Laravel route
            data: {
                user_id: userId,
                role_id: roleId, // Changed to role_id to match your backend expectation
                checked: isChecked
            },
            success: function (response) {
                console.log(response);
                alert('Role updated successfully'); // Alert or handle success
            },
            error: function (xhr, status, error) {
                console.error('Error:', error); // Console log or handle error
            }
        });
    });
});

