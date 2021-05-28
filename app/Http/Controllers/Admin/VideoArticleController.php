<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VideoArticleRequest;
use App\Model\VideoArticle;
use App\Model\ArticleCategory;
use Flash;

class VideoArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = VideoArticle::orderby('id', 'DESC')->paginate(25);
        return view('admin.videoarticle.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ArticleCategory::all();
        return view('admin.videoarticle.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('video_media')) {
            $media = saveSingleMedia($request, 'video');
            if (TRUE != $media['status']) {
                Flash::error('Error', 'Can not upload video');
                return redirect(route('videoarticle.index'));
            }
            $data['video_media_id'] = $media['media_id'];
        }

        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error('Error', 'Can not upload video');
                return redirect(route('videoarticle.index'));
            }
            $data['media_id'] = $media['media_id'];
        }


        VideoArticle::create($data);
        Flash::success('Success', 'Successfully Created Article');
        return redirect(route('videoarticle.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = VideoArticle::find($id);
        if(empty($article)) {
            Flash::error('article not found');
            return redirect(route('videoarticle.index'));
        }
        return view('admin.videoarticle.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = VideoArticle::find($id);
        if(empty($article)) {
            Flash::error('Article not found');
            return redirect(route('videoarticle.index'));
        }
        $categories = ArticleCategory::all();
        return view('admin.videoarticle.edit', compact('categories', 'article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VideoArticleRequest $request, $id)
    {
        $data = $request->all();
        if ($request->hasFile('video_media')) {
            $media = saveSingleMedia($request, 'video');
            if (TRUE != $media['status']) {
                Flash::error('Error', 'Can not upload video');
                return redirect(route('videoarticle.index'));
            }
            $data['video_media_id'] = $media['media_id'];
        }

        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error('Error', 'Can not upload video');
                return redirect(route('videoarticle.index'));
            }
            $data['media_id'] = $media['media_id'];
        }
        VideoArticle::find($id)->update($data);
        Flash::success('Success', 'Successfully Updated Text Article');
        return redirect(route('videoarticle.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = VideoArticle::find($id);
        if(empty($article)) {
            Alert::error('Error', 'Category Not Found');
            return redirect(route('category.index'));
        }
        $article->delete();
        Flash::success('Success', 'Successfully deleted Category');
        return redirect(route('videoarticle.index'));
    }
}
