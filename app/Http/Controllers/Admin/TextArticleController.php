<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TextArticleRequest;
use App\Model\TextArticle;
use App\Model\ArticleCategory;
use Flash;

class TextArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = TextArticle::orderby('id', 'DESC')->paginate(25);
        return view('admin.textarticle.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ArticleCategory::where('status', config('global')['STATUS_ACTIVE'])->get();
        return view('admin.textarticle.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TextArticleRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error('Error', 'Can not upload image');
                return redirect(route('textarticle.index'));
            }
            $data['media_id'] = $media['media_id'];
        }
        $category = TextArticle::create($data);
        Flash::success('Success', 'Successfully Created Article');
        return redirect(route('textarticle.index'));
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
        $article = TextArticle::find($id);
        if(empty($article)) {
            Flash::error('Article not found');
            return redirect(route('textarticle.index'));
        }
        $categories = ArticleCategory::where('status', config('global')['STATUS_ACTIVE'])->get();
        return view('admin.textarticle.edit', compact('categories', 'article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TextArticleRequest $request, $id)
    {
        $data = $request->all();
        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE == $media['status']) {
                $data['media_id'] = $media['media_id'];
            }
        }
        TextArticle::find($id)->update($data);
        Flash::success('Success', 'Successfully Updated Text Article');
        return redirect(route('textarticle.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = TextArticle::find($id);
        if(empty($article)) {
            Alert::error('Error', 'Category Not Found');
            return redirect(route('category.index'));
        }
        $article->delete();
        Alert::success('Success', 'Successfully deleted Category');
        return redirect(route('textarticle.index'));
    }
}
