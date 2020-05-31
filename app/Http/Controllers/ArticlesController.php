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
    $article = new Article;
    $article->title = $request->input('title');
    $article->content = $request->input('content');
    $article->save();
    
    session()->flash('message', 'Records inserted successfully!');
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

    session()->flash('message', 'Records updated successfully!');
    return redirect('blog');
     

  }

  //pang destroy sa session
  public function destroy($id){

  }



}
