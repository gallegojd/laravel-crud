<!DOCTYPE html>
<html>
<head>
  <title>Add Form</title>
    <link rel="stylesheet" type="text/css" href="{{asset("/css/bootstrap.min.css")}}">
</head>
<body>
  <div class="container-fluid">
 <!--  from bootstrap -->
 <form action="/blog" method="POST">
  @csrf
  <h1>Article <span class="badge badge-secondary">New</span></h1>

  @if($errors->any())
      <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
          <ul class="nav flex-column">
            <strong>Notification: </strong>
              @foreach($errors->all() as $error)
                <li>
                  {{$error}}
                </li>
              @endforeach
          </ul>
      </div>
  @endif
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Title</label>
      <input type="text" class="form-control" id="validationTooltip01" name="title" placeholder="Article Title" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Content</label>
      <input type="text" class="form-control" id="validationTooltip02" name="content" placeholder="Article Content" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    </div>
  </div>
  </div>
  <button class="btn btn-primary" name="submit">Submit Article</button>
</form>
</div>
<script type="text/javascript" src="{{asset("/js/bootstrap.min.js")}}"></script>
</body>
</html>