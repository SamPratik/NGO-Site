@extends('pages.main')
@section('meta-ajax')
	<meta name="_token" content="{{ csrf_token() }}" />
@endsection

@push('styles')
  <style media="screen">
    .add-work-container {
      position: relative;
      padding: 100px 0px 50px 0px;
    }

		.error-message {
			font-weight: bold;
			color: red;
			font-size: 20px;
		}
  </style>
@endpush

@section('content')
  @parent
  <div class="add-work-container">
    <div class="container">
      <h2 class="text-center" style="font-weight:bold;">Add Work</h2>
      <form id="addWorkForm" method="POST" enctype="multipart/form-data" onsubmit="addWork(event)">
        <div class="form-group">
          <label for=""><strong>Title</strong>:</label>
          <input id="title" type="text" name="title" class="form-control">
					<p class="error-message"></p>
        </div>
				<div class="form-group">
				  <label for=""><strong>Display image</strong></label>
				  <label class="btn btn-success" style="width:200px;margin-left:30px;">Choose File<input style="display:none;" type="file" name="workImage" id="workImage"></label>
					<p class="error-message"></p>
				</div>
        <div class="form-group">
          <label for=""><strong>Description</strong></label>
          <textarea id="description" class="form-control" name="name" rows="25" cols="80"></textarea>
					<p class="error-message"></p>
        </div>
        <div class="form-group text-center">
          <input type="submit" class="btn btn-outline-primary" style="width:200px;" value="Add Work">
        </div>
      </form>
    </div>
  </div>
@endsection

{{-- storing work in database --}}
@push('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		function addWork(e) {
			e.preventDefault();
			// use this when you are using ajax call to send tinymce content
			// to the laravel controller...
			tinyMCE.triggerSave();
			// getting the extension of the uploaded file...
			var extension = $("#workImage").val().split('.').pop().toLowerCase();
			console.log(extension);

				console.log('everything is ok!!');
				var file_data = $("#workImage").prop('files')[0];
				var title = $("#title").val();
				var description = $("#description").val();
				console.log(file_data);

				// creating form data object of the form...
				var fd = new FormData();
				// appendin the image to the form data...
				fd.append('workImage', file_data);
				fd.append('title', title);
				fd.append('description', description);
				$.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name=_token]').attr('content')
            }
        });
				$.ajax({
					url: '{{ route('works.store') }}',
					data: fd,
					type: 'POST',
					contentType: false,
					processData: false,
					success: function(data) {
						// showing the response came from the laravel controller...
						console.log(data);
						var em = document.getElementsByClassName("error-message");

						// after returning from the controller we are clearing the
						// previous error messages...
						for(i=0; i<em.length; i++) {
							em[i].innerHTML = '';
						}

						// Showing error messages in the HTML...
						if(typeof data.error != 'undefined') {
							if(typeof data.title != 'undefined') {
								em[0].innerHTML = data.title[0];
							}
							if(typeof data.workImage != 'undefined') {
								em[1].innerHTML = data.workImage[0];
							}
							if(typeof data.description != 'undefined') {
								em[2].innerHTML = data.description[0];
							}
						}
					}
				});

		}
	</script>
@endpush

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
