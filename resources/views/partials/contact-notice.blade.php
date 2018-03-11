<section class="contact-notice">
  <div class="container contact-notice-container">
    <div class="row">
      <div class="col-md-6 notice">
        <h2>
          Notices
          @auth
          <a style="text-transform:capitalize;letter-spacing:0px;" class="btn btn-outline-primary btn-sm pull-right" href="{{ route('notices.create') }}">
            <i class="fa fa-plus" aria-hidden="true"></i> Add Notice
          </a>
          @endauth
        </h2>
        <div class="list-group notice-list">
          @foreach ($notices as $notice)
            <a href="{{ route('notices.show', $notice->id) }}" class="list-group-item list-group-item-action flex-column align-items-start notice-link">
              <div class="d-flex w-100 justify-content-between">
                <p class="mb-1">{{ $notice->title }}</p>
              </div>
              <p>
                @php
                  $time = strtotime($notice->updated_at)
                @endphp
                <small><strong>{{ date('d F, Y',$time) }}</strong></small>
                @auth
                <span class="pull-right">
                  <button class="btn btn-outline-warning btn-sm" onclick="window.location.href='{{ route('notices.edit', [$notice->id]) }}'"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                  <button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                </span>
                @endauth
              </p>
            </a>
          @endforeach
        </div>
      </div>
      <div class="col-md-6 contact">
        <h2>
          Contact US
          @auth
          <button class="btn btn-sm btn-outline-primary pull-right" type="button" data-toggle="modal" data-target="#editContactModal"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
          @endauth
        </h2>
        <div>
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Mirpur Cantonment, Dhaka</strong></p>
          <p><strong><i class="fa fa-phone"></i> +880 1730-683164</strong></p>
          <p><strong><i class="fa fa-envelope" aria-hidden="true"></i> lccmist@gmail.com</strong></p>
        </div>
        <form>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="col">
              <input type="email" class="form-control" placeholder="Your Email">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <textarea class="form-control" name="name" rows="5" cols="80" placeholder="Your Queries"></textarea>
            </div>
          </div><br>
          <div class="row text-center">
            <div class="col">
              <input style="width:200px;" class="btn btn-outline-primary" type="submit" name="" value="Submit">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Edit Contact Modal -->
<div class="modal fade" id="editContactModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="font-weight:bold;">Edit contact information</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form class="" method="post">
            <div class="form-group">
              <label for=""><strong>Address</strong></label>
              <input type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
              <label for=""><strong>Phone</strong></label>
              <input type="text" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group">
              <label for=""><strong>Email</strong></label>
              <input type="email" class="form-control" placeholder="">
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" name="button" class="btn btn-outline-primary">Save Changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
      </div>
    </div>
  </div>
</div>
</div>
