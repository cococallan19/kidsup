@extends('admin.layout')

<style>
    .select-label {
      width: 110px;
    }
</style>


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      {{-- フラッシュメッセージの表示 --}}
      @if (Session::has('flash_message'))
      <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
      @endif
      <h1>
        説明会管理
        <small>説明会一覧</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">説明会一覧</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form class="form-horizontal" method="POST">
        <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

        {!! Form::open(['id' => 'contact-form' , 'url' => '/event/confirm']) !!}
        <!-- Main row -->
        <div class="row">
          <div id="affixNav" class="col-md-3" data-spy="affix">

            <div class="box box-primary">
              <div class="box-body box-profile">

                <img id="main_image" src="/admin/images/shop-sample.jpg" style="margin-top:15px;width:100%;">

                <h3 class="profile-username text-center">KidsUP</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <div>
                    <label><b>公開予定日:</b></label>
                    <div name="" class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="release_date" class="form-control pull-right" id="datepicker" @if(!empty($errors->first('release_date'))) value="" @else value="{{$event[0]->release_date}}" @endif>
                      @if(!empty($errors->first('release_date')))<span class="help-block">{{$errors->first('release_date')}}</span>@endif
                    </div>
                  </div>
                  </li>
                  <li class="list-group-item">
                    <b>公開フラグ:</b>
                    <div class="pull-right">
                      <div class="select-label">
                        <label>
                          <input type="radio" name="status" class="flat-red" value="public" @if($event[0]->status == 'public') checked @endif> 公開
                        </label>
                        <label>
                          <input type="radio" name="status" class="flat-red" value="close"  @if($event[0]->status == 'close') checked @endif> 非公開
                        </label>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <b>体験案内:</b>
                    <div class="pull-right">
                      <div class="select-label">
                        <label>
                          <input type="radio" name="taiken" class="flat-red" value="on" @if($event[0]->taiken == 'on') checked @endif> ON
                        </label>
                        <label>
                          <input type="radio" name="taiken" class="flat-red" value="off"  @if($event[0]->taiken == 'off') checked @endif> OFF
                        </label>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <b>公開範囲:</b>
                    <div class="pull-right">
                      <div class="select-label">
                        <label>
                            <input type="radio" name="restrict" class="flat-red" value="limit" @if($event[0]->restrict == 'limit') checked @endif> 限定
                        </label>
                        <label>
                          <input type="radio" name="restrict" class="flat-red" value=""  @if($event[0]->restrict !== 'limit') checked @endif> 全体
                        </label>
                      </div>
                    </div>
                  </li>
                </ul>

                <button type="submit" class="btn btn-primary btn-block"><b>設定する</b></button>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>


          <div id="affixContent" class="col-md-9">

            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">説明会情報</a></li>
                <!-- <li><a href="#settings" data-toggle="tab">追加情報</a></li> -->
                <!-- <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="activity">

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">日程</label>
                    <div class="col-sm-10">
                        {{$event[0]->date}}
                        {{Form::hidden('event_date', $event[0]->date)}}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">時間帯</label>
                    <div class="col-sm-10">
                        {{$event[0]->time}}
                        {{Form::hidden('time', $event[0]->time)}}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">開催場所</label>
                    <div class="col-sm-10">
                      KidsUP {{$event[0]->school_name}}
                      {{Form::hidden('school', $event[0]->school_id)}}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">対象スクール</label>
                    <div class="col-sm-10">
                      <!--教室名は複数選択 @relational_school[] -->
                      <select name="relational_school[]" class="form-control multiple-select-school" multiple="multiple" data-placeholder="対象スクールを選択" style="width: 100%;">

                          <!-- スクール一覧を表示 -->
                          @foreach($schools as $school)
                          <option value="{{$school->id}}" @if(strpos($event[0]->relational_school ,'#'.$school->id.'#') !== false) selected="" @endif>KidsUP{{$school->school_name}}</option>
                          @endforeach
                          <!-- /ここまで @スクール一覧を表示 -->
                        </select>
                        @if(!empty($errors->first('relational_school')))<span class="help-block">{{$errors->first('relational_school')}}</span>@endif
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">定員</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control form-number" name="capacity" value="{{$event[0]->capacity}}">
                        @if(!empty($errors->first('capacity')))<span class="help-block">{{$errors->first('capacity')}}</span>@endif
                    </div>
                  </div>
                  <hr>

                  <div class="booking-list-content">
                    <h4>予約一覧</h4>
                    <table class="table booking-list">
                      <tr>
                        <th>お名前</th>
                        <th>電話番号</th>
                        <th>Email</th>
                        <th>お子様の年齢・学年</th>
                        <th>申込先スクール</th>
                        <th>内容</th>
                      </tr>
                      <?php $i=0; ?>
                      @foreach($reservation as $reservation)
                        <?php $i++; ?>
                      <tr>
                        <td>{{$reservation->name}}</td>
                        <td>{{$reservation->tel}}</td>
                        <td>{{$reservation->email}}</td>
                        <td>{{$reservation->age}}</td>
                        <td>{{$reservation->school_name}}</td>
                        <td class="message">@if(!empty($reservation->body))<a href="modal-content" class="btn-xs btn-block btn-warning modal-btn" data-toggle="modal">有り</a>@else 無し@endif</td>
                        {{Form::hidden('body_hidden', $reservation->body , ['id' => 'body_hidden_'.$i])}}
                      </tr>
                      @endforeach
                    </table>
                  </div>


                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>


          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        {!! Form::close() !!}

        <!-- モーダルウィンドウ -->
        <div class="modal fade" id="modal-content" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body" id="modal-body">
              </div>
            </div>
          </div>
        </div>
        <!-- /モーダルウィンドウ -->

      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection

@section('script')
<script src="/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="/admin/plugins/chartjs/Chart.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- bootstrap datepicker -->
<script src="/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Select2 -->
<script src="/admin/plugins/select2/select2.min.js"></script>
<script src="/admin/js/main.js"></script>
<script>

// onload
$(function () {
  $('.multiple-select-school').select2();

});
  $('a.modal-btn').on('click', function() {
    console.log($('#modal-body').html);
    //内容の隠しテキストをモーダル領域へ上書き
    var body_hidden = $(this).parent().parent().children()[6].value;
    $('#modal-body').html(body_hidden);
    console.log($('#modal-body').html);

    // modalResize();
    $('#modal-content').modal();
  });

  // ウィンドウ幅によって縦横位置を自動で付与
  /*
  $(window).resize(modalResize);
    function modalResize(){

        var w = $(window).width();
        var h = $(window).height();

        var mw = $("#modal-0001").outerWidth();
        var mh = $("#modal-0001").outerHeight();


        $("#modal-0001").css({
            "left": ((w - mw)/2) + "px",
            "top": ((h - mh)/2) + "px"
        });
    }
    */

</script>

@endsection
