<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\MsisdnHelper;
use App\Model\TextArticle;
use App\Model\VideoArticle;

class WebController extends Controller
{
    public function index() {
        return view('web.index');
    }

    public function news() {
        $articles = TextArticle::where('status', TRUE)->orderBy('created_at', 'desc')->get();
        return view('web.news', compact('articles'));
    }

    public function videos() {
        $articles = VideoArticle::where('status', TRUE)->orderBy('created_at', 'desc')->get();
        return view('web.videos', compact('articles'));
    }

    public function categoryNews($category_id) {
        $articles = TextArticle::where('status', TRUE)->where('category_id', $category_id)->orderBy('created_at', 'desc')->get();
        return view('web.category_news', compact('articles', 'category_id'));
    }

    public function categoryVideos($category_id) {
        $articles = VideoArticle::where('status', TRUE)->where('category_id', $category_id)->orderBy('created_at', 'desc')->get();
        return view('web.category_videos', compact('articles', 'category_id'));
    }

    public function articleDetail($article_id, $type) {
        if("text" == $type) {
            $article = TextArticle::find($article_id);
            $category_id = $article->category_id;
            return view('web.new_detail', compact('article', 'category_id'));
        }

        if ("video" == $type) {
            $article = VideoArticle::find($article_id);
            $category_id = $article->category_id;
            return view('web.video_detail', compact('article', 'category_id'));
        }
    }

    public function faq() {
        return view('web.faq');
    }

    public function favorites() {
        return view('web.favorites');
    }
}
