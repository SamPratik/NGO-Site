@extends('pages.main')
@section('meta-ajax')
	<meta name="_token" content="{{ csrf_token() }}" />
@endsection

@push('styles')
  <style media="screen">
    .add-work-container {
      position: relative;
      /* top: 40px; */
      padding: 100px 0px 50px 0px;
    }
		.error-message {
			font-weight: bold;
			color: red;
			font-size: 20px;
		}
  </style>
	{{ Html::style('css/toast.css') }}
@endpush

@section('content')
  @parent
  <div class="add-work-container">
    <div class="container">
      <h2 class="text-center" style="font-weight:bold;">Edit Work</h2>
      <form class="" enctype="multipart/form-data" onsubmit="updateWork(event)">
				{{-- @method('PUT') --}}
				<div class="form-group">
          <label for=""><strong>Title</strong>:</label>
          <input name="title" id="title" type="text" class="form-control" value="{{ $work->title }}">
					<p class="error-message"></p>
        </div>
				<div class="form-group">
				  <label for=""><strong>Display image</strong></label>
				  <label class="btn btn-success" style="width:200px;margin-left:30px;">Choose File<input style="display:none;" type="file" name="workImage" id="workImage"></label>
					<span style="margin-left:20px;">[upload 640X400 image for better quality]</span>
					<p class="error-message"></p>
				</div>
        <div class="form-group">
          <label for=""><strong>Description</strong></label>
          <textarea id="description" class="form-control" name="description" rows="25" cols="80">{{ $work->description }}</textarea>
					<p class="error-message"></p>
        </div>
        <div class="form-group text-center">
          <input type="submit"class="btn btn-outline-primary" value="Update Work" style="width:200px;">
        </div>
      </form>
    </div>
  </div>
@endsection

@component('components.success-alert')
	Work updated successfully!
@endcomponent

@push('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		function updateWork(e) {
			e.preventDefault();
			// use this when you are using ajax call to send tinymce content
			// to the laravel controller...
			tinyMCE.triggerSave();
			var file_data = $("#workImage").prop('files')[0];
			var title = $("#title").val();
			var description = $("#description").val();

			// console.log(file_data + '\n' + title + '\n' + description);

			// creating formdata...
			var fd = new FormData();
			// appending image, title, description to formdata...
			fd.append('title', title);
			fd.append('description', description);
			fd.append('workImage', file_data);
			console.log(fd);
			$.ajaxSetup({
					headers: {
						'X-CSRF-Token': $('meta[name=_token]').attr('content')
					}
			});
			$.ajax({
				url: '{{ route('works.update', $work->id) }}',
				data: fd,
				type: 'POST',
				contentType: false,
				processData: false,
				success: function(data) {
					console.log(data);
					var em = document.getElementsByClassName("error-message");

					// after returning from the controller we are clearing the
					// previous error messages...
					for(i=0; i<em.length; i++) {
						em[i].innerHTML = '';
					}

					// if work is stored in database successfully, then show the
					// success toast...
					if(data === "success") {
						document.getElementById("addWorkForm").reset();
						var x = document.getElementById("snackbar");
						x.className = "show";
						setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
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
