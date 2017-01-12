<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body class="sub member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!--?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?-->
    <main id="content" class="join-sucess">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li class="active">JOIN</li>
                </ol>
            </div>
            <div class="page-header">
                <h2>JOIN</h2>
                <p>회원가입하시면 폴휴먼의 다양한 혜택을 누리실 수 있습니다.</p>
            </div>
            <ol class="step-list">
                <li>
                    <p><img src="/assets/images/sub/step01_ico.png" alt="회원약관동의"></p>
                    <h3><i>STEP 01</i>회원약관동의</h3>
                </li>
                <li>
                    <p><img src="/assets/images/sub/step02_ico.png" alt="회원약관동의"></p>
                    <h3><i>STEP 02</i>회원정보입력</h3>
                </li>
                <li class="active">
                    <p><img src="/assets/images/sub/step03_ico_active.png" alt="회원약관동의"></p>
                    <h3><i>STEP 03</i>가입완료</h3>
                </li>
            </ol>
            <div class="sucess">
                <h3>환영합니다<br>폴휴먼 회원가입이 완료되었습니다.</h3>
                <p>
                    폴휴먼 회원이 되신 것을 진심으로 환영합니다.<br>
                    폴휴먼의 다양하고 특별한 혜택을 누리실 수 있습니다.
                </p>
                <div class="btn-area">
                    <p>
                        <a href="/" class="btn btn-lg btn-gray" role="button">메인 가기</a>
                    </p>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>