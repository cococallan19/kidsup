@extends('admin.layout')

@section('head')
<title>KidsAdmin| お知らせ登録</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<link href="/admin/css/jquery.tagit.css" rel="stylesheet" type="text/css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="/admin/plugins/iCheck/all.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="/admin/plugins/datepicker/datepicker3.css">
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        お知らせ登録
        <small>お知らせの編集を行います</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <form class="form-horizontal" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div id="affixNav" class="col-md-3" data-spy="affix">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              @if(isset($news['main_image']))
              <img id="main_image" src="{{$news['main_image']}}" style="margin-top:15px;width:100%;">
              @else
              <img id="main_image" src="/admin/images/shop-sample.jpg" style="margin-top:15px;width:100%;">
              @endif
              <!-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> -->

              <h3 class="profile-username text-center">KidsUP</h3>


              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <div>
                  <label><b>公開予定日:</b></label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    @if(isset($news['published_at']))
                    <input type="text" name="published_at" class="form-control pull-right" id="datepicker" value="{{$news['published_at']}}">
                    @else
                    <input type="text" name="published_at" class="form-control pull-right" id="datepicker" value="{{$date}}">
                    @endif
                  </div>
                  <label><b>公開終了日:</b></label>
                  <div class="input-group date  @if(!empty($errors->first('closed_at'))) has-error @endif">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    @if(isset($news['closed_at']))
                    <input type="text" name="closed_at" class="form-control pull-right" id="datepicker2" value="{{$news['closed_at']}}">
                    @else
                    <input type="text" name="closed_at" class="form-control pull-right" id="datepicker2" value="{{$date}}">
                    @endif
                    @if(!empty($errors->first('closed_at')))<span class="help-block">「公開終了日」は必須です</span>@endif
                  </div>
                  <!-- /.input group -->
                </div>
                </li>
                <li class="list-group-item">
                  <b>公開フラグ:</b>
                  <div class="pull-right">
                    <div>
                      <label>
                        <input type="radio" name="status" class="flat-red" value="public" @if(isset($news['status'])) @if($news['status'] === 'public') checked @endif @endif> 公開
                      </label>
                      <label>
                        <input type="radio" name="status" class="flat-red" value="close" @if(isset($news['status'])) @if($news['status'] !== 'public') checked @endif @else checked @endif> 非公開
                      </label>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <b>TOPのみ表示:</b>
                  <div class="pull-right">
                    <div>
                      <label>
                        <input type="checkbox" name="top_only" class="flat-red" value="true" @if(isset($news['top_only'])) @if($news['top_only']) checked @endif  @endif> 適用
                      </label>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  @if(isset($news['updated_at']))
                  <b>更新日時:</b> <a class="pull-right">{{$news['updated_at']}}</a>
                  @else
                  <b>更新日時:</b> <a class="pull-right">-</a>
                  @endif
                </li>
              </ul>

              <button type="submit" class="btn btn-primary btn-block">設定する</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>
        <div id="affixContent" class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">基本情報</a></li>
              <!-- <li><a href="#settings" data-toggle="tab">追加情報</a></li> -->
              <!-- <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">イメージ</label>
                    <div class="col-sm-10">
                      <ul id="imageList">
                        <li class="row">
                          <div class="col-sm-5 @if(!empty($errors->first('main_image'))) has-error @endif">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <a id="lfm" data-input="main-thumb" data-preview="main_image" class="btn btn-primary">
                                  <i class="fa fa-picture-o"></i> 写真を選択
                                </a>
                              </span>
                              @if(isset($news['main_image']))
                              <input id="main-thumb" class="form-control @if(!empty($errors->first('main_image'))) has-error @endif" type="text" name="main_image" value="{{ $news['main_image'] }}">
                              @else
                              <input id="main-thumb" class="form-control @if(!empty($errors->first('main_image'))) has-error @endif" type="text" name="main_image" value="{{ old('main_image') }}">
                              @endif

                            </div>
                            @if(!empty($errors->first('main_image')))<span class="help-block">{{$errors->first('main_image')}}</span>@endif
                          </div>
                          <div class="col-sm-5">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <a id="lfm-sub_0" data-input="sub-thumb_0" data-preview="sub_image_0" class="btn btn-primary">
                                  <i class="fa fa-picture-o"></i> 写真を選択
                                </a>
                              </span>
                              @if(isset($news['sub_image']))
                              <input id="sub-thumb_0" class="form-control" type="text" name="sub_image[]" value="{{$news['sub_image'][0]}}">
                              @else
                              <input id="sub-thumb_0" class="form-control" type="text" name="sub_image[]" value="{{old('sub_image[0]')}}">
                              @endif
                            </div>
                          </div>
                        </li>
                        <li class="row">
                        <div class="col-sm-5">
                          <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm-sub_1" data-input="sub-thumb_1" data-preview="sub_image_1" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> 写真を選択
                              </a>
                            </span>
                            @if(isset($news['sub_image']))
                            <input id="sub-thumb_1" class="form-control" type="text" name="sub_image[]" value="{{$news['sub_image'][1]}}">
                            @else
                            <input id="sub-thumb_1" class="form-control" type="text" name="sub_image[]" value="{{old('sub_image[1]')}}">
                            @endif
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm-sub_2" data-input="sub-thumb_2" data-preview="sub_image_2" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> 写真を選択
                              </a>
                            </span>
                            @if(isset($news['sub_image']))
                            <input id="sub-thumb_2" class="form-control" type="text" name="sub_image[]" value="{{$news['sub_image'][2]}}">
                            @else
                            <input id="sub-thumb_2" class="form-control" type="text" name="sub_image[]" value="{{old('sub_image[2]')}}">
                            @endif

                          </div>
                        </div>
                        </li>

                      </ul>
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">モバイルイメージ</label>
                    <div class="col-sm-10 @if(!empty($errors->first('mobile_image'))) has-error @endif">
                      <ul id="imageList">
                        <li class="row">
                          <div class="col-sm-5">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <a id="lfm-sub_3" data-input="mobile-thumb_0" data-preview="mobile_image_0" class="btn btn-primary">
                                  <i class="fa fa-picture-o"></i> 写真を選択
                                </a>
                              </span>
                              @if(isset($news['mobile_image']))
                              <input id="mobile-thumb_0" class="form-control" type="text" name="mobile_image[]" value="{{$news['mobile_image'][0]}}">
                              @else
                              <input id="mobile-thumb_0" class="form-control" type="text" name="mobile_image[]" value="{{old('mobile_image[0]')}}">
                              @endif

                            </div>
                            @if(!empty($errors->first('mobile_image[]')))<span class="help-block">{{$errors->first('mobile_image[]')}}</span>@endif
                          </div>
                          <div class="col-sm-5">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <a id="lfm-sub_4" data-input="mobile-thumb_1" data-preview="mobile_image_1" class="btn btn-primary">
                                  <i class="fa fa-picture-o"></i> 写真を選択
                                </a>
                              </span>
                              @if(isset($news['mobile_image']))
                              <input id="mobile-thumb_1" class="form-control" type="text" name="mobile_image[]" value="{{$news['mobile_image'][1]}}">
                              @else
                              <input id="mobile-thumb_1" class="form-control" type="text" name="mobile_image[]" value="{{old('mobile_image[1]')}}">
                              @endif
                            </div>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col-sm-5">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <a id="lfm-sub_5" data-input="mobile-thumb_2" data-preview="mobile_image_2" class="btn btn-primary">
                                  <i class="fa fa-picture-o"></i> 写真を選択
                                </a>
                              </span>
                              @if(isset($news['mobile_image']))
                              <input id="mobile-thumb_2" class="form-control" type="text" name="mobile_image[]" value="{{$news['mobile_image'][2]}}">
                              @else
                              <input id="mobile-thumb_2" class="form-control" type="text" name="mobile_image[]" value="{{old('mobile_image[2]')}}">
                              @endif
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <a id="lfm-sub_6" data-input="mobile-thumb_3" data-preview="mobile_image_3" class="btn btn-primary">
                                  <i class="fa fa-picture-o"></i> 写真を選択
                                </a>
                              </span>
                              @if(isset($news['mobile_image']))
                              <input id="mobile-thumb_3" class="form-control" type="text" name="mobile_image[]" value="{{$news['mobile_image'][3]}}">
                              @else
                              <input id="mobile-thumb_3" class="form-control" type="text" name="mobile_image[]" value="{{old('mobile_image[3]')}}">
                              @endif

                            </div>
                          </div>
                        </li>
                      </ul>
                      @if(!empty($errors->first('mobile_image')))<span class="help-block">「モバイルイメージ」は必須です。</span>@endif
                    </div>

                  </div>

                  <div class="form-group @if(!empty($errors->first('title'))) has-error @endif">
                    <label for="inputName" class="col-sm-2 control-label">タイトル</label>
                    <div class="col-sm-10">
                      @if(isset($news['title']))
                      {!! Form::text('title', $news['title'], ['class' => 'form-control' , 'id' => 'inputName' , 'placeholder' => 'タイトルを入力']) !!}
                      @else
                      {!! Form::text('title', old('title'), ['class' => 'form-control' , 'id' => 'inputName' , 'placeholder' => 'タイトルを入力']) !!}
                      @endif
                      @if(!empty($errors->first('title')))<span class="help-block">{{$errors->first('title')}}</span>@endif
                    </div>
                  </div>
                  <div class="form-group @if(!empty($errors->first('pref'))) has-error @endif">
                    <label for="inputCategory" class="col-sm-2 control-label">カテゴリ</label>
                    <div class="col-sm-6">
                      @if(isset($news['category_id']))
                      {!! Form::select('category_id', $category, $news['category_id'] ,['class' => 'form-control' , 'id' => 'inputCategory' ]) !!}
                      @else
                      {!! Form::select('category_id', $category, null ,['class' => 'form-control' , 'id' => 'inputCategory' ]) !!}
                      @endif
                      @if(!empty($errors->first('category_id')))<span class="help-block">{{$errors->first('category_id')}}</span>@endif
                    </div>
                  </div>
                  <hr />
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">キーワード</label>

                    <div class="col-sm-10">
                      <ul id="inputKeyword">
                        @if(isset($news['keywords']))
                          @foreach($news['keywords'] as $value)
                          <li>{{$value}}</li>
                          @endforeach
                        @else
                        <li>英語</li>
                        <li>キッズアップ</li>
                        <li>学童</li>
                        @endif

                      </ul>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">紹介</label>
                    <div class="col-sm-10">
                    <textarea id="editor1" name="contents" rows="10" cols="80">
                      @if(isset($news['contents']))
                      {{$news['contents']}}
                      @else
                      {{old('contents')}}
                      @endif
                    </textarea>
                    </div>
                  </div>

                  <!--
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                  -->


              </div>
              <!-- /.tab-pane -->




              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

      </div>
      <!-- ./row -->
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection

@section('script')
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script src="/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="//ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>

<script>
var editor_config = {
    path_absolute : "/",
    selector: "textarea",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);




</script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>{{-- datepicker が下記jqueryでズレるため、その代用 --}}
<!--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script></script>-->
<script src="/admin/js/tag-it.min.js" type="text/javascript" charset="utf-8"></script>
<!-- bootstrap datepicker -->
<script src="/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- iCheck 1.0.1 -->
<script src="/admin/plugins/iCheck/icheck.min.js"></script>
<script src="/admin/js/main.js"></script>
@endsection
