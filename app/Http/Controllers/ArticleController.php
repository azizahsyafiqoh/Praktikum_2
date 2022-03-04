<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'title'=>'Article List',
            'articles'=> Article::all(),
            // 'route'=>route('article.create'),

        ];
        return view('admin.article.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'form_title'=>'Add New Article',
            'method'=>'POST',
            // 'route'=>route('article.store')
        ];
        return view('admin.article.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title'=> 'required',
            'slug'=> 'required',
            'description'=> 'required',
            'body'=> 'required',
            'picture'=> 'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $picture = $request->file('picture');
        $name = uniqid().'.'.$picture->getClientOriginalExtension();
        $picture->move('assets/article/',$name);
        $validate['image'] = $name;
        Article::create($validate);
        return redirect('/list-article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'form_title' => 'Edit Article',
            'method' => 'PUT',
            'route' => route('article-update', $id),
            'article' => Article::where('id',$id)->first(),
        ];
        return view('admin.article.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $article=Article::find($id);
        $article->title=$request->title;
        $article->slug=$request->slug;
        $article->description=$request->description;
        $article->body=$request->body;
        $article->image= $request->image;
        $article->update();
        return redirect('/list-article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy =Article::where('id', $id);
        $destroy->delete();
        return redirect('/list-article');
    }
}
