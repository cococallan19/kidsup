<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お客様登録ページ | KidsUP登録</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="/admin/css/custom.css" rel="stylesheet">

    <style>
      .input-error {background-color: #ffefef;}
    </style>



</head>
<body style="background:#F7F7F7;">
  <div class="wrapper">
  <div class="container-fluid">
  <div class="row">
    <div class="logo text-center"><img src="/images/logo.png"></div>
    <h1 class="text-center">銀行口座登録画面</h1>
    <hr/>
    <section id="selle-form">
    {!! Form::open(array('url' => 'https://linkpt.cardservice.co.jp/cgi-bin/kfgw/order.cgi', 'class' => 'form-horizontal')) !!}
    {!! Form::hidden('clientip', env('CLIENT_IP')) !!}
    {!! Form::hidden('act', 'order') !!}
    {!! Form::hidden('success_url', env('CHECK_URL')) !!}
    <div class="form-group">
      <div class="col-md-8 col-md-offset-2">
        <span class="label label-required">必須</span> {!! Form::label('sendid', '登録ID') !!} <span id="sendid-tooltip" class="glyphicon glyphicon-question-sign" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="20 から始まる10桁のIDを入力してください"></span>
        <input class="form-control" required="required" placeholder="10桁の登録IDを入力してください" maxlength="10" name="sendid" type="tel" id="sendid">
        <span class="alert-message hidden">20から始まる10桁のIDを入力してください</span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-8 col-md-offset-2">
        <span class="label label-required">必須</span> {!! Form::label('telno', '電話番号（ハイフンなし）') !!} <span class="glyphicon glyphicon-question-sign" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="お客様の電話番号を入力してください"></span>
        <input class="form-control" required="required" placeholder="例)0364597186" maxlength="11" name="telno" type="tel" id="telno">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-8 col-md-offset-2">
        <span class="label label-required">必須</span> {!! Form::label('email', 'メールアドレス') !!} <span class="glyphicon glyphicon-question-sign" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="こちらで入力したメールアドレスに確認のメールが届きます"></span>
        {!! Form::email('email', null, ['class' => 'form-control' , 'required' => 'required' , 'placeholder' => 'hq@kids-up.jp']) !!}
      </div>
    </div>
    @include('settle.term')
    <div class="form-group">
      <div class="col-md-8 col-md-offset-2">
    {!! Form::submit('口座振替へ', ['class' => 'btn btn-warning form-control']) !!}
      </div>
    </div>

      {!! Form::close() !!}
    </section>
      </div>
    </div>
  </div>
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });

  //入力チェック
  $('.form-horizontal').submit(function(){
    var id_val = $('#sendid').val();
    var initial2 = id_val.slice( 0, 2 );
    if(!isFinite(id_val) || id_val.length !== 10 || initial2 !== '20') {
      $('#sendid-tooltip').tooltip('show');
      $('#sendid').addClass('input-error');
      return false;
    }
  });

  </script>
</body>
</html>
