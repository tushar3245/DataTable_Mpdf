<form id="uploadForm" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="imageInput">
    <button type="submit">Upload</button>
</form>

<div id="previewContainer"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#uploadForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('upload') }}",
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success) {
                        var imageElement = $('<img>').attr('src', '/uploads/' + response.image);
                        $('#previewContainer').html(imageElement);
                    } else {
                        console.log('Image upload failed.');
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
