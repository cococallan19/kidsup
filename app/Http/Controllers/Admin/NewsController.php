<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\News;
use App\Category;
use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Validator;

class NewsController extends Controller
{

  protected function validator(array $data)
     {
       $validation = array(
           'published_at' => 'required',
           'status' => 'required',
           'main_image' => 'required',
           'title' => 'required|max:255',
           'category_id' => 'required',
           'contents' => 'required',
           'closed_at' => 'required',
       );
       $data['mobile_image'] = $data['mobile_image'][0]; //存在チェック

       //カテゴリ：短期講習・イベントならばmobile_imageを必須
       if($data['category_id'] != '1'){
         $validation['mobile_image'] = 'required';
       }
         return Validator::make($data,$validation);
     }

  public function getIndex()
  {
    $published = \Input::get('published');
    $keyword = \Input::get('keyword');

    if(!empty($published) or !empty($keyword)) {

      //どちらか入ってる
      if($published == 'active'){
        $news = News::where('status','public')
                  ->where('title' , 'like' , '%'.$keyword.'%')
                  ->orderBy('published_at', 'desc')->paginate(10);

      } else {
        $news = News::where('title' , 'like' , '%'.$keyword.'%')
                  ->orderBy('published_at', 'desc')->paginate(10);
      }
    } else {
      $news = News::orderBy('published_at', 'desc')->paginate(10);
    }



    return view('admin.news.index')->with('news',$news);
  }

  public function getCreate()
  {
    $time = new Carbon(Carbon::now());
    $date = date_format($time , 'Y-m-d');
    $categories = Category::all();
    $category = array();
    foreach ($categories as $key => $value) {
      $category[$value->category_id] = $value->name;
    }

    return view('admin.news.create')->with('date', $date)->with(compact('category'));
  }

  public function postCreate(Request $request)
  {
    $validator = $this->validator($request->all());

    if ($validator->fails()) {
          $this->throwValidationException(
              $request, $validator
          );
    }
    $data = $request->all();
    $id = null;
    $news = $this->createNews($data,$id);
    return redirect('/news/edit/' . $news->id);

  }



  public function getEdit($id)
  {
    $time = new Carbon(Carbon::now());
    $date = date_format($time , 'Y-m-d');
    $news = News::where('id', $id)->first();
    if(!is_null($news)){
      $news['sub_image'] = unserialize($news['sub_image']);
      $news['mobile_image'] = unserialize($news['mobile_image']);
      $news['keywords'] = unserialize($news['keywords']);

      $categories = Category::all();
      $category = array();
      foreach ($categories as $key => $value) {
        $category[$value->category_id] = $value->name;
      }
      return view('admin.news.create')->with('date', $date)->with('news',$news)->with(compact('category'));
    } else {
      return redirect('/404');
    }


  }

  public function postEdit(Request $request,$id)
  {
    $validator = $this->validator($request->all());
    if ($validator->fails()) {
          $this->throwValidationException(
              $request, $validator
          );
    }

    $data = $request->all();
    $this->createNews($data,$id);


    return redirect('/news/edit/'.$id);
  }

  private function createNews($data,$id)
  {
    if( $id == null ){
      $news = new News;
    } else {
      $news = News::where('id',$id)->first();
    }
    $news->status = $data['status'];
    $news->main_image = $data['main_image'];
    $news->sub_image = serialize($data['sub_image']);
    $news->mobile_image = serialize($data['mobile_image']);
    $news->title = $data['title'];
    $news->category_id = $data['category_id'];
    $news->keywords = serialize($data['keywords']);
    $news->contents = $data['contents'];
    $news->published_at = $data['published_at'];
    $news->closed_at = $data['closed_at'];
    if( isset($data['top_only']) ){
      $news->top_only = $data['top_only'];
    }else{
      $news->top_only = null;
    }
    $news->save();
    return $news;
  }

  public function getCategory()
  {
    $categories = Category::paginate(10);
    return view('admin.news.category')->with('categories',$categories);
  }

  public function postCategory(CategoryRequest $request)
  {

    $data = $request->all();
    $category = new Category;
    $category->name = $data['category'];
    $category->slag = $data['slag'];
    $category->save();

    return redirect('/news/category');
  }
}
