$(document).ready(function() {
    // Get token CSRF
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $('#uploadForm').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        
        // Add the token CSRF
        formData.append('_token', csrfToken);

        $.ajax({
            type: 'POST',
            url: '/upload',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#imagePreview').html('<img src="' + response.url + '" alt="Uploaded Image">');
            },
            error: function(xhr, status, error) {
                alert('Error al cargar: ' + xhr.responseText);
            }
        });
    });
});

