<!DOCTYPE html>
<html>
<head>
  <title>Edit Form Form</title>
    <link rel="stylesheet" type="text/css" href="{{asset("/css/bootstrap.min.css")}}">
</head>
<body>
  <div class="container-fluid">
 <!--  from bootstrap -->
 <form action="/blog/{{$article->id}}" method="POST">
  @csrf
  @method('PUT')
  <h1>Article <span class="badge badge-secondary">Edit</span></h1>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Title</label>
      <input type="text" class="form-control" id="validationTooltip01" name="title" placeholder="Article Title" value="{{$article->title}}" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Content</label>
      <input type="text" class="form-control" id="validationTooltip02" name="content" placeholder="Article Content" value="{{$article->content}}" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Created at</label>
      <input type="text" class="form-control" id="validationTooltip02" name="created_at" placeholder="Article Content" value="{{$article->created_at}}" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Updated at</label>
      <input type="text" class="form-control" id="validationTooltip02" name="updated_at" placeholder="Article Content" value="{{$article->updated_at}}" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    </div>
  </div>
  </div>
  <button class="btn btn-primary" name="submit">Update Article</button>
</form>
</div>
<script type="text/javascript" src="{{asset("/js/bootstrap.min.js")}}"></script>
</body>
</html>