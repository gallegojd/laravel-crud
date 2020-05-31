<!DOCTYPE html>
<html>
<head>
  <title>{{$article->title}}</title>
  <link rel="stylesheet" type="text/css" href="{{asset("/css/bootstrap.min.css")}}">
</head>
</head>
<body>
  <div class="container-fluid">
    <h1>Viewing Article <span class="badge badge-secondary"></span></h1>
      <!-- <div class="card mb-3">
        <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$article->title}}</h5>
            <p class="card-text">{{$article->content}}</p>
            <p class="card-text"><small class="text-muted">Created: {{$article->created_at}}</small></p>
          </div> -->
        <div class="card">
          <h5 class="card-header">{{$article->title}}</h5>
            <div class="card-body">
              <h5 class="card-title">{{$article->title}}</h5>
              <p class="card-text">{{$article->content}}</p>
              <p class="card-text"><small class="text-muted">Created: {{$article->created_at}}</small></p>
              <a href="/blog" class="btn btn-primary">Back</a>
            </div>
        </div>
      </div>
  </div>
<script type="text/javascript" src="{{asset("/js/bootstrap.min.js")}}"></script>
</body>
</html>