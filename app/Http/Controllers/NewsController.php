<?php

namespace App\Http\Controllers;
use App\News;
use App\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;

class NewsController extends Controller
{
  public function index()
  {

      //カテゴリを取得
      $categories = Category::orderBy('category_id', 'asc')->get();
      $category_id = $categories->first()->category_id;

      $news = $this->getNewsList(9, $category_id);

      foreach ($news as $value) {
        $value->contents = $this->trimText($value->contents);
      }
      return view('news.index')
           ->with(compact('news'))
           ->with(compact('category_id'))
           ->with(compact('categories'));
  }

  private function trimText($text) {
     $text = strip_tags($text);
     return mb_strimwidth($text, 0, 64, '...');;
  }

  public function getNewsList($length = 9, $category_id = 1, $check_closed = false)
  {
    if($check_closed){
      $now = date('Y-m-d H:i:s');
      //公開期間をチェック
      $news = News::where('status' , 'public')
      ->whereNull('top_only')
      ->where('category_id', $category_id)
      ->where('closed_at','>=', $now)
      ->where('published_at','<=', $now)
      ->orderBy('published_at', 'desc')
      ->with('news_category')
      ->take($length)->paginate($length);
    }else{
      //公開期間をチェックしない
      $news = News::where('status' , 'public')
      ->whereNull('top_only')
      ->where('category_id', $category_id)
      ->orderBy('published_at', 'desc')
      ->with('news_category')
      ->take($length)->paginate($length);
    }
    foreach ($news as $key => $value) {
      // Carbon::createFromFormat('Y-m-d H:i:s', $value->published_at)->toDateTimeString();
      $value->date = date_format(Carbon::createFromFormat('Y-m-d H:i:s', $value->published_at) , 'Y/m/d');
    }
    return $news;
  }

  public function getNewsListAll($length = 9, $check_closed = false)
  {
    if($check_closed){
      $now = date('Y-m-d H:i:s');
      //公開期間をチェック
      $news = News::where('status' , 'public')
      ->whereNull('top_only')
//      ->where('closed_at','>=', $now) // #192 TOPのお知らせ欄4件には、公開終了日が過ぎてもお知らせを出す
      ->where('published_at','<=', $now)
      ->orderBy('published_at', 'desc')
      ->with('news_category')
      ->take($length)->paginate($length);
    }else{
      //公開期間をチェックしない
      $news = News::where('status' , 'public')
      ->whereNull('top_only')
      ->orderBy('published_at', 'desc')
      ->with('news_category')
      ->take($length)->paginate($length);
    }
    foreach ($news as $key => $value) {
      // Carbon::createFromFormat('Y-m-d H:i:s', $value->published_at)->toDateTimeString();
      $value->date = date_format(Carbon::createFromFormat('Y-m-d H:i:s', $value->published_at) , 'Y/m/d');
    }
    return $news;
  }

  public function show($id)
  {
    $news = News::where('status' , 'public')->where('id' , $id)->whereNull('top_only')->with('news_category')->first();
    if(!isset($news)){
      return view('errors.404');
    }
    $news['keywords'] = implode(',',unserialize($news['keywords']));
    $news->date = date_format(Carbon::createFromFormat('Y-m-d H:i:s', $news->published_at) , 'Y/m/d');
    if($id == 113){
      return redirect('/summer');
    }
    if($id == 117){
      return redirect('/halloween2022');
    }
    if($id == 119){
      return redirect('/christmas2022');
    }
    if($id == 120){
      return redirect('/winter2022');
    }
    if($id == 121){
      return redirect('/minigp');
    }
    if($id == 124){
      return redirect('/chocoday');
    }
    if($id == 125){
      return redirect('/spring2023');
    }
    if($id == 126){
      return redirect('/speechcontest2022');
    }
    if($id == 129){
      return redirect('/easter');
    }
    return view('news.detail')->with(compact('news'));
  }

  //カテゴリ指定検索
  public function getSearch($category_id)
  {

      //カテゴリを取得
      $categories = Category::orderBy('category_id', 'asc')->get();
      $news = $this->getNewsList(9, $category_id);

      foreach ($news as $value) {
        $value->contents = $this->trimText($value->contents);
      }
//dd($news);
      return view('news.index')
           ->with(compact('news'))
           ->with(compact('category_id'))
           ->with(compact('categories'));
  }

  public function getTopBanner()
  {
    $now = date('Y-m-d H:i:s');
    $topBanner = News::where('status' , 'public')
    ->whereNotNull('top_only')
    ->where('closed_at','>=', $now)
    ->where('published_at','<=', $now)
    ->orderBy('published_at', 'desc')
    ->with('news_category')
    ->first();
    return $topBanner;
  }


}
