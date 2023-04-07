@extends('admin.layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        お知らせ
        <small>お知らせ一覧</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">お知らせ一覧</li>
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
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">フリーワード検索</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="keyword" value="{{\Input::get('keyword')}}" placeholder="お知らせを検索します">
                </div>


                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="published" value="active" @if(\Input::get('published') === 'active') checked="" @endif> 公開のみ
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">検索</button>
              </div>
            </form>
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
              @if($news)
              <ul class="products-list product-list-in-box">
                @foreach($news as $value)
                <li class="item">
                  <div class="product-img">
                    <img src="{{$value->main_image}}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <span class="product-description">
                          {{str_replace('00:00:00' , '' ,$value->published_at)}}
                    </span>
                    <a href="/news/edit/{{$value->id}}" class="product-title">{{$value->title}}
                      @if($value->status == 'public')
                      <span class="label label-success pull-right">公開中</span>
                      @else
                      <span class="label label-warning pull-right">非公開</span>
                      @endif
                    </a>

                  </div>
                </li>
                @endforeach
              </ul>
              {!! $news->render() !!}
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
