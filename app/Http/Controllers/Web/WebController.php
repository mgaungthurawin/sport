<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\MsisdnHelper;
use App\Model\TextArticle;
use App\Model\VideoArticle;
use App\Model\Favourite;
use Session;
use Redirect;

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
            if(empty($article)) {
                return redirect(url('videos'));
            }
            $category_id = $article->category_id;
            return view('web.new_detail', compact('article', 'category_id'));
        }

        if ("video" == $type) {
            $article = VideoArticle::find($article_id);
            if(empty($article)) {
                return redirect(url('videos'));
            }
            $category_id = $article->category_id;
            return view('web.video_detail', compact('article', 'category_id'));
        }

        return redirect(url('videos'));
    }

    public function faq() {
        return view('web.faq');
    }

    public function favorites() {
        $customer_id = Session::get('user_id');
        $texts = Favourite::join('text_articles as t', 't.id', 'favourites.article_id')
                    ->join('media as m', 'm.id', 't.media_id')
                    ->select('favourites.id', 't.id as article_id', 't.title', 'm.file_path', 'm.file_name')
                    ->where('favourites.customer_id', $customer_id)->where('favourites.type', 'text')->get();
        $videos = Favourite::join('video_articles as v', 'v.id', 'favourites.article_id')
                    ->join('media as m', 'm.id', 'v.media_id')
                    ->select('favourites.id', 'v.id as article_id', 'v.title', 'm.file_path', 'm.file_name')
                    ->where('favourites.customer_id', $customer_id)->where('favourites.type', 'video')->get();
        return view('web.favorites', compact('videos', 'texts'));
    }

    public function postFavourite($type, $article_id) {
        $customer_id = Session::get('user_id');
        $favourite = Favourite::where('customer_id', $customer_id)->where('article_id', $article_id)->first();
        if(empty($favourite)) {
            $fav = new Favourite;
            $fav->customer_id=$customer_id;
            $fav->article_id=$article_id;
            $fav->type=$type;
            $fav->save();
        }

        $response = [];
        $response['status'] = TRUE;
        return $response;
    }

    public function removeFavourite($id) {
        $favourite = Favourite::find($id);
        $favourite->delete();
        return redirect(url('favorites'));
    }

    public function unsubscribe() {
        $response = [];
        $customer_id = Session::get('user_id');
        $url = 'http://mymportals.com/unsubscribe?customer_id='.$customer_id.'&service_id=9510&service_type=MMSPORT';
        Session::forget('user_id');
        return Redirect::away($url);
    }
}
