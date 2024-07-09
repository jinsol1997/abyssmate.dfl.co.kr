<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta property="og:type" content="website">
    <meta name="robots" content="ALL">

    <title>어비스메이트</title>

    <script type="text/javascript" src="/public/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/public/js/jquery-migrate-3.1.0.js"></script>
    <script type="text/javascript" src="/public/js/jquery.ba-throttle-debounce.min.js"></script>
    <script type="text/javascript" src="/public/js/icheck.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/js/icheck.css">
    <script type="text/javascript" src="/public/js/icheck.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/js/slick.css">
    <script type="text/javascript" src="/public/js/slick.js"></script>
    <script type="text/javascript" src="/public/js/fullpage.js"></script>

    <script type="text/javascript" src="/public/js/main.pc.js"></script>

    <link rel="stylesheet" type="text/css" href="/public/css/font.css">
    <link rel="stylesheet" type="text/css" href="/public/css/fullpage.css">
    <link rel="stylesheet" type="text/css" href="/public/css/main.pc.css">

    <script type="text/javascript" src="/public/js/process.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L126DW549F"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-L126DW549F');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NNQ6RBH9');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNQ6RBH9"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="mbti_question">
    <label style="color: #fff;" for="q_1_e">
        <input type="radio" id="q_1_e" onchange="test(this);" value="e" > A. 래버넌트 따라가기
    </label>
    <label style="color: #fff;" for="q_1_i">
        <input type="radio" id="q_1_i" onchange="test(this);" value="i" > A. 래버넌트 이야기만 들어보기
    </label>
</div>

<div class="mbti_question">
    <label style="color: #fff;" for="q_2_e">
        <input type="radio" id="q_2_e" name="q2" onchange="test(this);" value="e" > A. 래버넌트 따라가기
    </label>
    <label style="color: #fff;" for="q_2_i">
        <input type="radio" id="q_2_i" name="q2" onchange="test(this);" value="i" > A. 래버넌트 이야기만 들어보기
    </label>
</div>


<script>
    var mbti    = [];
    function test(e){
        var index   = $(e).parent().parent(".mbti_question").index() - 1;
        mbti[index] = e.value;
        console.log(mbti);
    }
</script>

<input type="text" id="q1" value="i"/>
<input type="text" id="q2" value="e"/>
<input type="text" id="q3" value="i"/>
<input type="text" id="q4" value="n"/>
<input type="text" id="q5" value="s"/>
<input type="text" id="q6" value="s"/>
<input type="text" id="q7" value="t"/>
<input type="text" id="q8" value="f"/>
<input type="text" id="q9" value="t"/>
<input type="text" id="q10" value="p"/>
<input type="text" id="q11" value="p"/>
<input type="text" id="q12" value="p"/>

<button onclick="mbtiRegister()" id="testBtn">test</button>

</body>


</html>