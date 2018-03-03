@extends('pages.main')

@push('styles')
	<style media="screen">
		.add-achievements-form-container {
			padding: 70px 0px 50px 0px;
		}
	</style>
@endpush

@section('content')
  @parent
  <div class="add-achievements-form-container">
    <div class="container">
      <h2 class="text-center">Add Achievement</h2>
      <form class="" action="index.html" method="post">
        <div class="form-group">
          <label for=""><strong>Title</strong></label>
          <input type="text" class="form-control" placeholder="max 30 characters...">
        </div>
				<div class="form-group">
					<label for=""><strong>Display image</strong></label>
					<label class="btn btn-outline-success" style="width:200px;cursor:pointer;margin-left:10px;margin-top:5px;"><input style="display:none;" type="file" />Choose File</label>
				</div>
        <div class="form-group">
          <label for=""><strong>Description</strong></label>
          <textarea name="name" class="form-control" rows="25" cols="80"></textarea>
        </div>
				<div class="form-group text-center">
				  <input type="submit" value="Add Achievement" class="btn btn-outline-primary" style="width:200px;">
					<p style="clear:both;"></p>
				</div>
      </form>
    </div>
  </div>
@endsection

@push('scripts')
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
	  var editor_config = {
	    path_absolute : "{{ URL::to('/') }}/",
	    selector: "textarea",
	    plugins: [
	      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
	      "searchreplace wordcount visualblocks visualchars code fullscreen",
	      "insertdatetime media nonbreaking save table contextmenu directionality",
	      "emoticons template paste textcolor colorpicker textpattern"
	    ],
	    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
	    relative_urls: false,
	    file_browser_callback : function(field_name, url, type, win) {
	      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
	      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

	      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
	      if (type == 'image') {
	        cmsURL = cmsURL + "&type=Images";
	      } else {
	        cmsURL = cmsURL + "&type=Files";
	      }

	      tinyMCE.activeEditor.windowManager.open({
	        file : cmsURL,
	        title : 'Filemanager',
	        width : x * 0.8,
	        height : y * 0.8,
	        resizable : "yes",
	        close_previous : "no"
	      });
	    }
	  };

	  tinymce.init(editor_config);
	</script>
@endpush
