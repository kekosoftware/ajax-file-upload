<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>File Upload with Ajax</title>
</head>
<body>
    <h2>Upload Image</h2>
    <form id="uploadForm" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="image" required>
        <button type="submit">Upload</button>
    </form>

    <div id="imagePreview"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/upload.js') }}"></script>
</body>
</html>
