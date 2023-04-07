@extends('admin.layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        カテゴリ登録
        <small>カテゴリを登録します</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">カテゴリ登録</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">



      <!-- Main row -->
      <div class="row">
        <div id="affixNav" class="col-md-3" data-spy="affix">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">お知らせ検索</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::open() !!}
              <div class="box-body">
                <div class="form-group @if(!empty($errors->first('category'))) has-error @endif">
                  <label for="exampleInputEmail1">カテゴリ追加</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="category" value="{{old('category')}}" placeholder="カテゴリ名を追加">
                  @if(!empty($errors->first('category')))<span class="help-block">{{$errors->first('category')}}</span>@endif
                </div>

                <div class="form-group @if(!empty($errors->first('slag'))) has-error @endif">
                  <label for="exampleInputEmail1">英字</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="slag" value="{{old('slag')}}" placeholder="英語表記">
                  @if(!empty($errors->first('slag')))<span class="help-block">{{$errors->first('slag')}}</span>@endif
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">追加</button>
              </div>
            {!! Form::close() !!}
          </div>
        </div>

        <div id="affixContent" class="col-md-9">
          <!-- Info Boxes Style 2 -->

          <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">お知らせ一覧</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if($categories)
              <ul class="products-list product-list-in-box">
                @foreach($categories as $value)
                <li class="item">
                  <div class="product-info">
                    {{$value->name}}（{{$value->slag}}）
                  </div>
                </li>
                @endforeach
              </ul>
              {!! $categories->render() !!}
              @endif
            </div>

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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


@endsection
