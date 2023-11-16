    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->
    <script src="js/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown();
        });
        $('#summernote').summernote({
            callbacks: {
                onImageUpload: function(files) {
                    for(let i=0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                }
            },
            height: 300,
            });
            
            $.upload = function (file) {
            let out = new FormData();
            out.append('file', file, file.name);

            $.ajax({
                method: 'POST',
                url: 'upload.php',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
                success: function(url) {
                    $('#summernote').summernote("insertImage", url, 'filename');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };
    </script>
    

    
</body>

</html>