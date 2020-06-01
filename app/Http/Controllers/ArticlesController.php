<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticlesController extends Controller
{
    //creating public functions on index
  public function index() {
    //shwing ng mga articles in table form
    $articles = Article::paginate(4);
    return view("blog")->with("articles",$articles);

  }

  //function for storing 
  //$request pra sa mga user inputs
  public function store(Request $request) {
    //processing of adding
    // echo $request->input('title');
    //  echo $request->input('content');
    //inserting into database

     $request->validate([
      "title"=> "required|min:5|max:20|unique:articles", 
      "content" => "required|min:5|max:200"
    ]);

    $article = new Article;
    $article->title = $request->input('title');
    $article->content = $request->input('content');
    $article->save();

    //another way of adding data w/ validation
    //min and max characters
    //with unique
   
    session()->flash('add_message', 'Records inserted successfully!');
    return redirect('blog');
  }

  //creating shwing ng add form
  public function create(){
    return view("addform");
  }
   //pang edit 
  public function edit($id){
     $article = Article::find($id);
    return view("editform")->with("article" , $article);
  }

  public function show($id){
    //showing individual article
    $article = Article::find($id);
    return view("show")->with("article" , $article);

  }
  //pang update
  public function update(Request $request, $id){
     $article = Article::find($id);
     $article->title = $request->title;
     $article->content = $request->content;
     $article->created_at = $request->created_at;
     $article->updated_at = $request->updated_at;
     $article->save();

    session()->flash('update_message', 'Records updated succesfully!');
    return redirect('blog');
  }

  //pang destroy sa session
  public function destroy($id){
    Article::destroy($id);
    session()->flash('error_message','Records Deleted!');
    return redirect('blog');
  }
}
