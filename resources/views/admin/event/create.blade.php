@extends('admin.layout')

@section('head')
<title>KidsAdmin| 説明会登録・編集・一覧</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<link href="/admin/css/jquery.tagit.css" rel="stylesheet" type="text/css">
<!-- icomoon styles -->
<link rel="stylesheet" href="/css/icomoon.min.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="/admin/plugins/iCheck/all.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="/admin/plugins/datepicker/datepicker3.css">
<!-- bootstrap timepicker -->
<link rel="stylesheet" href="/admin/plugins/timepicker/bootstrap-timepicker.css">

<!-- FullCalendar style -->
<link rel="stylesheet" href="/admin/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="/admin/plugins/fullcalendar/fullcalendar.print.css" media="print">
<style>
  .fc-title{
    white-space:normal;
  }
  /* 説明会の色を変更*/
    .event_reserved {
      background-color: #FF6600; /* 予約あり：オレンジ*/
      border          : #FF6600;
    }
    .event_closed {
      background-color: #777; /* 非公開：グレー*/
      border          : #777;
    }
    .select-label {
      width: 110px;
    }

</style>

@endsection

@section('content')
<!-- サーバーから取得したグローバル変数を定義 start -->
<?php $i=0; $relational_school = "" ?>
  @if(count($errors) > 0 and empty($errors->first('relational_school')))
    <?php $i=0;
      $relational_school = implode('#,#', old('relational_school'));
      $relational_school = '#'.$relational_school.'#';
    ?>
  @endif
<!-- サーバーから取得したグローバル変数を定義 end -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      {{-- フラッシュメッセージの表示 --}}
      @if (Session::has('flash_message'))
      <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
      @endif
      <h1>
        説明会登録・編集・一覧
        <small>説明会の場所と日程を入力してください</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/event">説明会管理</a></li>
        <li class="active">説明会登録・編集・一覧</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      {!! Form::open(['id' => 'event-form', 'class' => 'form-horizontal' , 'url' => '/event/create']) !!}
        <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
      <div class="row">

        <div id="affixNav" class="col-md-3" data-spy="affix">

          <div class="box box-primary">
            <div class="box-body box-profile">

              <img id="main_image" src="/admin/images/shop-sample.jpg" style="margin-top:15px;width:100%;">

              <h3 class="profile-username text-center">KidsUP</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <div @if(!empty($errors->first('release_date'))) class="has-error" @endif">
                    <label><b>公開予定日:</b></label>
                    <div name="release_date" class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="release_date" class="form-control pull-right " id="datepicker" value="{{old('release_date')}}">
                      @if(!empty($errors->first('release_date')))<span class="help-block">{{$errors->first('release_date')}}</span>@endif
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <b>公開フラグ:</b>
                  <div class="pull-right">
                    <div class="select-label">
                      <label>
                        <input type="radio" name="status" class="flat-red" value="public"> 公開
                      </label>
                      <label>
                        <input type="radio" name="status" class="flat-red" value="close" checked> 非公開
                      </label>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <b>体験案内:</b>
                  <div class="pull-right">
                    <div class="select-label">
                      <label>
                        <input type="radio" name="taiken" class="flat-red" value="on" checked> ON
                      </label>
                      <label>
                        <input type="radio" name="taiken" class="flat-red" value="off"> OFF
                      </label>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <b>公開範囲:</b>
                  <div class="pull-right">
                    <div class="select-label">
                      <label>
                        <input type="radio" name="restrict" class="flat-red" value="limit">限定
                      </label>
                      <label>
                        <input type="radio" name="restrict" class="flat-red" value="" checked> 全体
                      </label>
                    </div>
                  </div>
                </li>
              </ul>

              <button type="submit" name="action" class="btn btn-primary btn-block" id="btnCreateEvent" value="post">設定する</button>
            </div>
          </div>

        </div>

        <div id="affixContent" class="col-md-9">

         <div class="col-md-12">


          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">基本情報</a></li>
              <!-- <li><a href="#settings" data-toggle="tab">追加情報</a></li> -->
              <!-- <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
            </ul>

            <div class="tab-content">

              <div class="active tab-pane" id="activity">

                  <div class="form-group @if(!empty($errors->first('event_date'))) has-error @endif">
                    <label for="inputName" class="col-sm-2 control-label">日程</label>
                    <div class="col-sm-10">
                      @if(!empty($errors->first('event_date')))<span class="help-block">{{$errors->first('event_date')}}</span>@endif
                      <div id="calendar"></div>
                    </div>
                  </div>

                  <hr>

                  <div class="form-group @if(!empty($errors->first('relational_school'))) has-error @endif">
                    <label for="inputName" class="col-sm-2 control-label">対象スクール</label>
                    <div class="col-sm-10">
                      <!--対象スクール以外でvalidationエラーがあれば、入力中の値を再表示 -->
                      <select name="relational_school[]" class="form-control multiple-select-school" multiple="multiple" data-placeholder="対象スクールを選択" style="width: 100%;">
                          <!-- スクール一覧を表示 -->
                          @foreach($schools as $school)
                          <option value="{{$school->id}}" @if(strpos($relational_school,'#'.$school->id.'#') !== false) selected="" @endif>KidsUP{{$school->school_name}}</option>
                          @endforeach
                          <!-- /ここまで @スクール一覧を表示 -->
                        </select>
                        @if(!empty($errors->first('relational_school')))<span class="help-block">{{$errors->first('relational_school')}}</span>@endif
                    </div>
                  </div>

                  <div class="form-group @if(!empty($errors->first('time'))) has-error @endif">
                    <label for="inputName" class="col-sm-2 control-label">時間帯</label>
                    <div class="col-sm-10">
                      <div class="input-group form-control bootstrap-timepicker">
                        <input  id="time" type="text" name="time" style="border:none;">
                      </div>
                      @if(!empty($errors->first('time')))<span class="help-block">{{$errors->first('time')}}</span>@endif
                    </div>
                  </div>

                  <div class="form-group @if(!empty($errors->first('school'))) has-error @endif">
                    <label  for="inputName" class="col-sm-2 control-label">開催場所</label>
                    <div class="col-sm-10">
                    <select name="school" class="form-control venue-select" data-placeholder="開催場所を選択" style="width: 100%;">
                      <!-- ダミー表示 -->
                      <option data-placeholder="true" value="">開催場所を選択</option>
                      <!-- スクール一覧を表示 -->
                      @foreach($schools as $school)
                      <option value="{{$school-> id}}" @if(old('school') == $school-> id) selected="" @endif>KidsUP{{$school->school_name}}</option>
                      @endforeach
                      <!-- /ここまで @スクール一覧を表示 -->
                    </select>
                    @if(!empty($errors->first('school')))<span class="help-block">{{$errors->first('school')}}</span>@endif
                    </div>
                  </div>
                  <div class="form-group  @if(!empty($errors->first('capacity'))) has-error @endif">
                    <label for="" class="col-sm-2 control-label">定員</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control form-number" name="capacity" value="{{old('capacity')}}">
                        @if(!empty($errors->first('capacity')))<span class="help-block">{{$errors->first('capacity')}}</span>@endif
                    </div>
                  </div>

              </div>
              <!-- /.tab-pane -->
              <input type="hidden" id="event_date" name="event_date" value="{{old('event_date')}}">

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

      </div>
      <!-- ./row -->
      {!! Form::close() !!}
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


  // カレンダー設定
  $(function () {

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
    $('#calendar').fullCalendar({
      header: {
        left: 'today',
        center: 'title',
        right: 'prev,next'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
      buttonIcons: {
        prev: 'icon-caret-left',
        next: 'icon-caret-right',
        // prevYear: 'left-double-arrow',//default
        // nextYear: 'right-double-arrow'//default
      },
      selectable: true,
      selectHelper: true,
      // 日付をクリックしたらクラスを付与
      dayClick: function(date, allDay, isEvent, view){
        $('.selected').removeClass("selected"); //既に選択済ならば、選択を解除
        $(this).toggleClass('selected');
        $('[name="event_date"]').val(date.format());
      },

      // 表示期間を切り替えたらイベントスケジュールを取得
      events: (start, end, timezone, callback) => {
        var getEventdata = getEventSchedule(start.toISOString(),end.toISOString());

        //Ajax戻り値を非同期のままで取得 @result:JSON
        getEventdata.done(function(result) {
          callback(setEventSchedule(result));
          });
      }
    });
  });

  //カレンダーにイベントスケジュールをセット
  function setEventSchedule(result) {
    var events = result;
    $('#calendar').fullCalendar('removeEvents');
    $('#calendar').fullCalendar('addEventSource', events );
  }

  // Initialize Select2
  $(function() {
    //選択日付をハイライト
    var selector    = "td[data-date = '" + $('#event_date').val() + "']";
    $(selector).toggleClass('selected');
    $('.multiple-select-school').select2();

//    $('.multiple-select-timezone').select2({
//      tags: true,
//      createTag: function(obj) {
//        return {
//          id: obj.term,
//          text: obj.term,
//          isNewFlag: true
//        };
//      }
//    }).on('select2:select', function(e){
//      if(e.params.data.isNewFlag) {
//          if(ckTime(e.params.data.id) === false) {
//            alert('00:00のフォーマットで登録してください');
//          }
//          var $select = $(this);
//          var _token = $('#token').val();
//      $.ajaxSetup({
//        headers: { 'X-CSRF-Token' : _token }
//      });
//        $.ajax({
//            type: 'post',
//            url: '/event/time/add',
//            data: {value: e.params.data.id},
//            dataType: 'json'
//        }).done(function(json) {
//            if(json['decision']){
//              $select.find('[value="'+e.params.data.id+'"]')
//              .replaceWith('<option selected value="'+json.id+'">' + e.params.data.text + '</option>');
//            } else {
//              $select.find('[value="'+e.params.data.id+'"]').remove();
//              $('[title='+ json['value'] +']').remove();
//            }

//        }).fail(function(data) {
//            alert('登録できませんでした');
//        });
//      }
//    });

    $('.venue-select').select2();

    // timepicker追加
    $('#time').timepicker({
      template:	'dropdown' ,
      showMeridian: false,
      autoclose:true,
      disableMousewheel:false,
    });
  });

  function ckTime(str) {
    // 正規表現による書式チェック
    if(!str.match(/^\d{2}\:\d{2}$/)){
        return false;
    }
    var vHour = str.substr(0, 2) - 0;
    var vMinutes = str.substr(3, 2) - 0;
    if(vHour >= 0 && vHour <= 24 && vMinutes >= 0 && vMinutes <= 59){
        return true;
    }else{
    }
  }
</script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>-->
<script src="/admin/js/tag-it.min.js" type="text/javascript" charset="utf-8"></script>
<!-- bootstrap datepicker -->
<script src="/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap timepicker -->
<script src="/admin/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- iCheck 1.0.1 -->
<script src="/admin/plugins/iCheck/icheck.min.js"></script>
<!-- Select2 -->
<script src="/admin/plugins/select2/select2.min.js"></script>
<!-- FullCalendar -->
<script src="/admin/plugins/daterangepicker/moment.min.js"></script>
<script src="/admin/plugins/fullcalendar/fullcalendar.js"></script>

<script src="/admin/js/main.js"></script>
@endsection
