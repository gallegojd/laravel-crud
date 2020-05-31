<!DOCTYPE html>
<html>
<head>
  <title>Blog</title>
   <link rel="stylesheet" type="text/css" href="{{asset("/css/bootstrap.min.css")}}">
   <script src="https://kit.fontawesome.com/0107d72ca9.js" crossorigin="anonymous"></script>
<body>
  <div class="container-fluid">
    
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Created @</th>
        <th scope="col">Updated @</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <h3>Articles for reading</h3>
            <!--  alert message -->
           @if(session()->has('add_message'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                         <strong>Notification: </strong>
                         {{session()->get('add_message')}}
                    </div>
          @elseif(session()->has('update_message'))
                    <div class="alert alert-info">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                         <strong>Notification: </strong>
                         {{session()->get('update_message')}}
                    </div>
          @elseif(session()->has('error_message'))
                    <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                         <strong>Notification: </strong>
                         {{session()->get('error_message')}}
                    </div>
         @endif
      <a href="/blog/create" class="btn btn-primary btn-lg mb-3" role="button">Add new <i class="fas fa-file"></i></a>
      @foreach($articles as $article)
      <tr>
        <th scope="row">{{$article->id}}</th>
        <th scope="row">{{$article->title}}</th>
        <th scope="row">{{$article->content}}</th>
        <th scope="row">{{$article->created_at}}</th>
        <th scope="row">{{$article->update_at}}</th>
        <th scope="row">
          <a href ="/blog/{{$article->id}}"><i class="fas fa-eye"></i></a> |
          <a href ="/blog/{{$article->id}}/edit"><i class="fas fa-edit"></i></a> |
          <form action="blog/{{$article->id}}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
              <button class="btn btn-link" name="submit"><i class="fas fa-trash"></i></button>
          </form>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
  <!-- echo pra sa links per page na e display
  Articles:all() to Articles:paginate(4); -->
<!--   bootstrap pra pogi -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">  
       {{$articles->links()}}
  </ul>
</nav>
<div>
<script type="text/javascript" src="{{asset("/js/bootstrap.min.js")}}"></script>
</body>
</html>