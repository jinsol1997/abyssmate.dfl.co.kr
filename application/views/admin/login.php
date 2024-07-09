<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>어비스메이트 관리자</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/public/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/public/admin/dist/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/public/admin/dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/public/admin/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/public/admin/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <b>어비스메이트</b>  관리자
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <form>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="ID" id="id" value="">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" id="password" autocomplete="off">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4" style="float:right;">
                    <a href="javascript:loginCheck();" class="btn btn-primary btn-block btn-flat">로그인</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- jQuery 3 -->
<script src="/public/admin/dist/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/public/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/public/admin/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });

        $("#password").keydown(function(event){

            if( event.keyCode == 13 ){
                loginCheck();
            }
        });
    });

    function loginCheck(){
        var id          = $("#id").val();
        var password    = $("#password").val();

        if( id == "" ){
            alert('아이디를 입력해주세요.');
            $("#id").focus();
            return;
        }
        if( password == "" ) {
            alert('비밀번호를 입력해주세요.');
            $("#password").focus();
            return;
        }
        else{
            $.ajax({
                url         : "/admin/Auth/login",
                type        : "POST",
                dataType    : "JSON",
                data        : {"id" : id, "pw" : password},
                success     : function(data){
                    if(data.status == "success"){
                        alert('로그인 되었습니다.');
                        location.href = '/admin/Main';
                    }else{
                        alert('로그인 실패 : 아이디와 패스워드 다시 확인 해주세요.');
                        $("#id").focus();
                    }
                    return;
                }
            });
        }
    }

</script>
</body>
</html>