<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


$middlewares = \Config::get('lfm.middlewares');
array_push($middlewares, '\UniSharp\LaravelFilemanager\middleware\MultiUser');

// make sure authenticated
Route::group(array('middleware' => $middlewares, 'prefix' => 'laravel-filemanager'), function ()
{
    // Show LFM
    Route::get('/', '\UniSharp\LaravelFilemanager\controllers\LfmController@show');

    // upload
    Route::any('/upload', '\UniSharp\LaravelFilemanager\controllers\UploadController@upload');

    // list images & files
    Route::get('/jsonitems', '\UniSharp\LaravelFilemanager\controllers\ItemsController@getItems');

    // folders
    Route::get('/newfolder', '\UniSharp\LaravelFilemanager\controllers\FolderController@getAddfolder');
    Route::get('/deletefolder', '\UniSharp\LaravelFilemanager\controllers\FolderController@getDeletefolder');
    Route::get('/folders', '\UniSharp\LaravelFilemanager\controllers\FolderController@getFolders');

    // crop
    Route::get('/crop', '\UniSharp\LaravelFilemanager\controllers\CropController@getCrop');
    Route::get('/cropimage', '\UniSharp\LaravelFilemanager\controllers\CropController@getCropimage');

    // rename
    Route::get('/rename', '\UniSharp\LaravelFilemanager\controllers\RenameController@getRename');

    // scale/resize
    Route::get('/resize', '\UniSharp\LaravelFilemanager\controllers\ResizeController@getResize');
    Route::get('/doresize', '\UniSharp\LaravelFilemanager\controllers\ResizeController@performResize');

    // download
    Route::get('/download', '\UniSharp\LaravelFilemanager\controllers\DownloadController@getDownload');

    // delete
    Route::get('/delete', '\UniSharp\LaravelFilemanager\controllers\DeleteController@getDelete');
});


Route::get('/_debugbar/assets/stylesheets', [
    'as' => 'debugbar-css',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@css'
]);
Route::get('/_debugbar/assets/javascript', [
    'as' => 'debugbar-js',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@js'
]);
Route::get('/_debugbar/open', [
    'as' => 'debugbar-open',
    'uses' => '\Barryvdh\Debugbar\Controllers\OpenController@handler'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web'],'domain' => env('CHECK_URL')], function()
{
    Route::controller('/','SettleController');
});

Route::group(['middleware' => ['web'],'domain' => env('ADMIN_URL')], function()
{
  // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    // Registration routes...

    // EventCreate
    Route::post('/event/create', 'Admin\EventController@postCreate');         //#21 導線見直しで追加
    Route::post('/event/create/search', 'Admin\EventController@eventSearch'); //#21 導線見直しで追加

    Route::group(['middleware' => 'auth'], function() {

      Route::controller('/event','Admin\EventController');
      Route::controller('/school','Admin\SchoolController');
      Route::controller('/news','Admin\NewsController');
      Route::controller('/','AdminController');



    });
});

Route::group(['middleware' => ['web']], function () {

  Route::get('/aboutus',function(){
   return View::make('aboutus');
  });
  Route::get('/faq',function(){
   return View::make('faq');
  });
  Route::get('/schedule',function(){
   return View::make('schedule');
  });
  Route::get('/profile',function(){
    return View::make('profile');
  });
  Route::get('/philosophy',function(){
    return View::make('philosophy');
   });
  // Route::get('/model','HomeController@getModel');
  Route::get('/online',function(){
      return View::make('online');
   });


  Route::get('/news/category/{category_id}','NewsController@getSearch');
  Route::resource('/news', 'NewsController');
  Route::get('/v1/getprefcity' ,'SchoolController@getPrefCity');
  Route::get('/v1/getschooljson' ,'SchoolController@getSchoolJson');
  Route::resource('/school', 'SchoolController');
  Route::resource('/event/setting', 'EventController'); //#21 導線見直しで追加

  Route::get('/course/preschool',function(){
    return View::make('course.preschool');
   });
  Route::get('/course/elementary',function(){
    return View::make('course.elementary');
  });
  Route::get('/course/specialist',function(){
    return View::make('course.specialist');
  });

  Route::get('/course/online',function(){
    return View::make('course.online');
   });

   //learnathome  @issue:
   Route::get('/learnathome', function () {
     return View::make('homelearning.learnathome');
   });
   Route::get('/photobook', function () {
     return View::make('gas.photobook');
   });
   Route::get('/comeback', function () {
     return View::make('splashpage.comeback');
   });

  Route::resource('/vote', 'VoteController');

  Route::resource('/model', 'ModelController');

  Route::get('/privacy', function(){
    return View::make('privacy');
  });

  // recruit
   Route::get('/recruit', 'RecruitController@getMain');
   Route::get('/recruit/bilingual', 'RecruitController@getBilingual');
   Route::get('/recruit/busdriver', 'RecruitController@getBusDriver');
   Route::get('/recruit/busstaff', 'RecruitController@getBusStaff');
   Route::get('/recruit/native', 'RecruitController@getNative');
   Route::get('/recruit/schoolmanager', 'RecruitController@getSchoolManager');

  // event
  Route::get('/event', 'EventController@getIndex');
  Route::post('/event/confirm', 'EventController@postConfirm');
  Route::post('/event/complete', 'EventController@postComplete');
  Route::get('/event/complete', 'EventController@getComplete');
  Route::post('/event/search', 'EventController@eventSearch');  //#21 導線見直しで追加
  Route::post('/event/searchExists', 'EventController@eventSearchExists');  //#21 導線見直しで追加
  Route::post('/event/getSchedule', 'EventController@getSchedule');  //#21 導線見直しで追加
  Route::get('/event/entry', 'EventController@getEntry');  //#146 説明会申込の導線改修で追加
  Route::get('/event/getReply/{hash_id}', 'EventController@getReply');  //#146 説明会申込の導線改修で追加
  Route::post('/event/reply', 'EventController@postReply');  //#146 説明会申込の導線改修で追加

  //inquiry
  Route::get('/inquiry', 'InquiryController@getIndex');
  Route::post('/inquiry', 'InquiryController@postIndex');
  Route::post('/inquiry/post', 'InquiryController@getIndexDefaultValue');
  Route::post('/inquiry/complete', 'InquiryController@postComplete');
  Route::get('/inquiry/complete', 'InquiryController@getComplete');


  //festivities
  //summer
  Route::get('/summer', 'FesController@summerIndex');
  //Halloween
  Route::get('/halloween2022', 'FesController@halloweenIndex');
  Route::get('/halloween2022/online-event', 'FesController@halloweenEvent');
  //Christmas
  Route::get('/christmas2022', 'FesController@christmasIndex');
  Route::get('/christmas2022/christmas-online', 'FesController@christmasEvent');
  //WinterSchool
  Route::get('/winter2022', 'FesController@winterschoolIndex');
  //SpringSchool
  Route::get('/spring2023', 'FesController@springschoolIndex');
  //minigp
  Route::get('/minigp', 'FesController@minigpIndex');
  //setsumeikai
  Route::get('/lp/dec/setsumeikai', 'FesController@setsumeikaiIndex');
  //chocolateday
  Route::get('/chocoday', 'FesController@chocodayIndex');
  Route::get('/chocoday/online', 'FesController@chocodayOnline');
  //SpeechContest
  Route::get('/speechcontest2022', 'FesController@speechcontestIndex');
  //easter
  Route::get('/easter', 'FesController@easterIndex');
  Route::get('/easter/online', 'FesController@easterOnline');


  //request
  // Route::get('/request', 'RequestController@getIndex');
  // Route::post('/request', 'RequestController@postIndex');

  //photo
  Route::get('/photo', 'PhotoController@getIndex');
  Route::post('/photo', 'PhotoController@postIndex');
  Route::get('/photo/view', 'PhotoController@getView');
  Route::get('/photo/view/logout', 'PhotoController@getViewLogout');

  //Api
  Route::post('/v1/get/customer','Api\ApiController@getCustomerData');
  Route::post('/v1/get/getReservationMeta','Api\ApiController@getReservationMeta');
  Route::get('/v1/get/school'   ,'Api\ApiController@getSchool');
  Route::post('v1/update'       ,'Api\ApiController@updateFlg');
  Route::post('v1/update/sub'   ,'Api\ApiController@updateFlgSub');

  // Route::get('/model/complete','HomeController@getComplete');
  Route::controller('/','HomeController');

});
