@extends('admin.layout')

@section('head')
<title>KidsAdmin| 教室登録</title>
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
        教室登録
        <small>新しく開校する予定の教室を登録してください</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/school">教室管理</a></li>
        <li class="active">教室登録</li>
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

              <img id="main_image" src="{{$school['main_image']}}" style="margin-top:15px;width:100%;">
              <!-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> -->

              <h3 class="profile-username text-center">KidsUP{{$school['school_name']}}</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <div>
                  <label><b>開校日:</b></label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="published_at" class="form-control pull-right" id="datepicker" value="{{$school['published_at']}}">
                  </div>
                  <!-- /.input group -->
                </div>
                </li>
                <li class="list-group-item">
                  <b>公開フラグ:</b>
                  <div class="pull-right">
                    <div>
                      <label>
                        <input type="radio" name="status" class="flat-red" value="public" @if($school['status'] == 'public') checked @endif> 公開
                      </label>
                      <label>
                        <input type="radio" name="status" class="flat-red" value="close" @if($school['status'] == 'close') checked @endif> 非公開
                      </label>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <b>更新日時:</b> <a class="pull-right">{{$school['updated_at']}}</a>
                </li>
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>
        <div id="affixContent" class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">基本情報</a></li>
              <li><a href="#settings" data-toggle="tab">追加情報</a></li>
              <!-- <li><a href="#timeline" data-toggle="tab">Timeline</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">教室画像</label>
                    <div class="col-sm-10">
                      <ul id="imageList">
                        <li class="row">
                        <div class="col-sm-5">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm" data-input="main-thumb" data-preview="main_image" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> 写真を選択
                            </a>
                          </span>
                          <input id="main-thumb" class="form-control @if(!empty($errors->first('main_image'))) has-error @endif" type="text" name="main_image" value="{{$school['main_image']}}">
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
                          <input id="sub-thumb_0" class="form-control" type="text" name="sub_image[]" value="{{$school['sub_image'][0]}}">
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
                          <input id="sub-thumb_1" class="form-control" type="text" name="sub_image[]" value="{{$school['sub_image'][1]}}">
                        </div>
                        </div>
                        <div class="col-sm-5">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm-sub_2" data-input="sub-thumb_2" data-preview="sub_image_2" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> 写真を選択
                            </a>
                          </span>
                          <input id="sub-thumb_2" class="form-control" type="text" name="sub_image[]" value="{{$school['sub_image'][2]}}">
                        </div>
                        </div>
                        </li>
                        <li class="row">
                        <div class="col-sm-5">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm-sub_3" data-input="sub-thumb_3" data-preview="sub_image_3" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> 写真を選択
                            </a>
                          </span>
                          <input id="sub-thumb_3" class="form-control" type="text" name="sub_image[]" value="{{$school['sub_image'][3]}}">
                        </div>
                        </div>
                        <div class="col-sm-5">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm-sub_4" data-input="sub-thumb_4" data-preview="sub_image_4" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> 写真を選択
                            </a>
                          </span>
                          <input id="sub-thumb_4" class="form-control" type="text" name="sub_image[]" value="{{$school['sub_image'][4]}}">
                        </div>
                        </div>
                        </li>
                        <li class="row">
                        <div class="col-sm-5">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm-sub_5" data-input="sub-thumb_5" data-preview="sub_image_5" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> 写真を選択
                            </a>
                          </span>
                          <input id="sub-thumb_5" class="form-control" type="text" name="sub_image[]" value="{{$school['sub_image'][5]}}">
                        </div>
                        </div>
                        <div class="col-sm-5">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm-sub_6" data-input="sub-thumb_6" data-preview="sub_image_6" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> 写真を選択
                            </a>
                          </span>
                          <input id="sub-thumb_6" class="form-control" type="text" name="sub_image[]" value="{{$school['sub_image'][6]}}">
                        </div>
                        </div>
                        </li>
                      </ul>
                    </div>

                  </div>
                  <div class="form-group @if(!empty($errors->first('school_name'))) has-error @endif">
                    <label for="inputName" class="col-sm-2 control-label">教室名</label>
                    <div class="col-sm-10">
                      {!! Form::text('school_name', $school['school_name'], ['class' => 'form-control' , 'id' => 'inputName' , 'placeholder' => '教室名']) !!}
                      @if(!empty($errors->first('school_name')))<span class="help-block">{{$errors->first('school_name')}}</span>@endif
                    </div>
                  </div>
                  <div class="form-group @if(!empty($errors->first('number'))) has-error @endif">
                    <label for="inputNumber" class="col-sm-2 control-label">電話番号</label>
                    <div class="col-sm-6">
                      {!! Form::text('number', $school['number'], ['class' => 'form-control' , 'id' => 'inputNumber' , 'placeholder' => '電話番号']) !!}
                      @if(!empty($errors->first('number')))<span class="help-block">{{$errors->first('number')}}</span>@endif
                    </div>
                  </div>
                  <div class="form-group @if(!empty($errors->first('direct_number'))) has-error @endif">
                    <label for="inputDirect" class="col-sm-2 control-label">スクール直通電話番号</label>
                    <div class="col-sm-6">
                      {!! Form::text('direct_number', $school['direct_number'], ['class' => 'form-control' , 'id' => 'inputDirect' , 'placeholder' => 'スクール直通電話番号']) !!}
                      @if(!empty($errors->first('direct_number')))<span class="help-block">「スクール直通電話番号」は必須です</span>@endif
                    </div>
                  </div>
                  <div class="form-group @if(!empty($errors->first('email'))) has-error @endif">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-6">
                      {!! Form::email('email', $school['email'], ['class' => 'form-control' , 'id' => 'inputEmail' , 'placeholder' => 'Email']) !!}
                      @if(!empty($errors->first('email')))<span class="help-block">{{$errors->first('email')}}</span>@endif
                    </div>
                  </div>
                  <hr />
                  <div class="form-group @if(!empty($errors->first('zip'))) has-error @endif">
                    <label for="inputZip" class="col-sm-2 control-label">郵便番号</label>
                    <div class="col-xs-3">
                      {!! Form::text('zip', $school['zip'], ['class' => 'form-control' , 'id' => 'inputZip' , 'placeholder' => '郵便番号' , 'maxlength' => '7' , 'onKeyUp' => 'AjaxZip3.zip2addr(this,"","pref","addr01");']) !!}
                      @if(!empty($errors->first('zip')))<span class="help-block">{{$errors->first('zip')}}</span>@endif
                    </div>
                  </div>

                  <div class="form-group @if(!empty($errors->first('pref'))) has-error @endif">
                    <label for="inputAddress" class="col-sm-2 control-label">都道府県</label>
                    <div class="col-sm-6">
                      {!! Form::text('pref', $school['pref'], ['class' => 'form-control' , 'id' => 'inputName' , 'placeholder' => '東京都']) !!}
                      @if(!empty($errors->first('pref')))<span class="help-block">{{$errors->first('pref')}}</span>@endif
                    </div>
                  </div>

                  <div class="form-group @if(!empty($errors->first('addr01')) or !empty($errors->first('addr02'))) has-error @endif">
                    <label for="inputAddress" class="col-sm-2 control-label">住所</label>
                    <div class="col-sm-10">
                      {!! Form::text('addr01', $school['addr01'], ['class' => 'form-control' , 'id' => 'inputName' , 'placeholder' => '足立区千住']) !!}<br />
                      @if(!empty($errors->first('addr01')))<span class="help-block">{{$errors->first('addr01')}}</span>@endif
                      {!! Form::text('addr02', $school['addr02'], ['class' => 'form-control' , 'id' => 'inputName' , 'placeholder' => '1-4-1']) !!}<br />
                      @if(!empty($errors->first('addr02')))<span class="help-block">{{$errors->first('addr02')}}</span>@endif
                      {!! Form::text('addr03', $school['addr03'], ['class' => 'form-control' , 'id' => 'inputName' , 'placeholder' => '東京芸術センター11F']) !!}
                    </div>
                  </div>

                  <div class="form-group @if(!empty($errors->first('lat')) or !empty($errors->first('lng'))) has-error @endif">
                    <label for="inputAddress" class="col-sm-2 control-label">緯度・経度</label>
                    <div class="col-sm-3">
                      {!! Form::text('lat', $school['lat'], ['class' => 'form-control' , 'id' => 'inputName' , 'placeholder' => '35.746978']) !!}
                      @if(!empty($errors->first('lat')))<span class="help-block">{{$errors->first('lat')}}</span>@endif
                    </div>
                    <div class="col-sm-3">
                      {!! Form::text('lng', $school['lng'], ['class' => 'form-control' , 'id' => 'inputName' , 'placeholder' => '139.800504']) !!}
                      @if(!empty($errors->first('lng')))<span class="help-block">{{$errors->first('lng')}}</span>@endif
                    </div>
                  </div>
                  <div class="form-group @if(!empty($errors->first('business_start')) or !empty($errors->first('business_end'))) has-error @endif">
                    <label for="inputAddress" class="col-sm-2 control-label">営業時間</label>
                    <div class="col-sm-2">
                      {!! Form::text('business_start', $school['business_start'], ['class' => 'form-control' , 'placeholder' => '10:00']) !!}
                      @if(!empty($errors->first('business_start')))<span class="help-block">{{$errors->first('business_start')}}</span>@endif
                    </div>
                    <div class="col-sm-1" style="width:20px; padding:5px 0;">
                      ～
                    </div>
                    <div class="col-sm-2">
                      {!! Form::text('business_end', $school['business_end'], ['class' => 'form-control' , 'placeholder' => '20:00']) !!}
                      @if(!empty($errors->first('business_end')))<span class="help-block">{{$errors->first('business_end')}}</span>@endif
                    </div>
                  </div>

                  <hr />
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">キーワード</label>

                    <div class="col-sm-10">
                      <ul id="inputKeyword">
                        @if($school['keywords'])
                          @foreach($school['keywords'] as $keyword)
                            <li>{{$keyword}}</li>
                          @endforeach
                        @endif
                      </ul>

                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">紹介</label>
                    <div class="col-sm-10">
                    <textarea id="editor1" name="contents" rows="10" cols="80">
                      {{$school['contents']}}
                    </textarea>
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
                      <button type="submit" class="btn btn-danger">update</button>
                    </div>
                  </div>


              </div>
              <!-- /.tab-pane -->


              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputAccess" class="col-sm-2 control-label">交通アクセス</label>
                    <div class="col-sm-10">
                      {!! Form::text('access', $school['access'], ['class' => 'form-control' , 'id' => 'inputAccess' , 'placeholder' => '交通アクセス']) !!}
                      @if(!empty($errors->first('access')))<span class="help-block">{{$errors->first('access')}}</span>@endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputTrafic" class="col-sm-2 control-label">アクセス情報詳細</label>
                    <div class="col-sm-10">
                      {!! Form::text('trafic', $school['trafic'], ['class' => 'form-control' , 'id' => 'inputTrafic' , 'placeholder' => 'アクセス情報詳細']) !!}
                      @if(!empty($errors->first('acctraficess')))<span class="help-block">{{$errors->first('trafic')}}</span>@endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputArea" class="col-sm-2 control-label">送迎対応エリア</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="area" id="inputArea"  rows="10" cols="80">
                        {{$school['area']}}
                      </textarea>
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
<!--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>-->

<script src="/admin/js/tag-it.min.js" type="text/javascript" charset="utf-8"></script>
<!-- bootstrap datepicker -->
<script src="/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- iCheck 1.0.1 -->
<script src="/admin/plugins/iCheck/icheck.min.js"></script>
<script src="/admin/js/main.js"></script>
@endsection
