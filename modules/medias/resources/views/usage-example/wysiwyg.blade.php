<!doctype html>
<html>
    <head>
        <title>Media Library - popup in WYSIWYG</title>
    </head>
    <body>

        <textarea>Lorem ipsum</textarea>

        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=jv18ld1zfu6vffpxf0ofb72orrp8ulyveyyepintrvlwdarp"></script>
        <script>
            tinymce.init({
                selector:'textarea',
                toolbar:
                        'undo redo | styleselect | bold italic |' + 
                        'alignleft aligncenter alignright alignjustify |' + 
                        'bullist numlist outdent indent | link image |' +
                        'mediaLibraryButton',
                setup: function (editor) {
                    editor.ui.registry.addButton('mediaLibraryButton', {
                        text: 'Media Library',
                        onAction: function (_) {
                            editor.insertContent('&nbsp;<strong>It\'s my button!</strong>&nbsp;');
                        }
                    });
                }
            })
        </script>
    </body>
</html>