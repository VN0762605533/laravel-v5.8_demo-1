<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<textarea id="editor" name="content" class="form-control"></textarea>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
  CKEDITOR.replace('editor', options);
</script>
