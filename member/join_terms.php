<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body class="sub member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!--?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?-->
    <main id="content" class="join-terms">
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
                <li class="active">
                    <p><img src="/assets/images/sub/step01_ico_active.png" alt="회원약관동의"></p>
                    <h3><i>STEP 01</i>회원약관동의</h3>
                </li>
                <li>
                    <p><img src="/assets/images/sub/step02_ico.png" alt="회원약관동의"></p>
                    <h3><i>STEP 02</i>회원정보입력</h3>
                </li>
                <li>
                    <p><img src="/assets/images/sub/step03_ico.png" alt="회원약관동의"></p>
                    <h3><i>STEP 03</i>가입완료</h3>
                </li>
            </ol>
            <div class="terms">
                <h3>이용약관</h3>
                <div class="summary service">
                    이용약관 노출영역
                </div>
                <div class="form-group">
                    <label class="check"><input type="checkbox">이용약관에 동의합니다.</label>
                </div>
                <h3>개인정보취급방침</h3>
                <div class="summary privacy">
                    개인정보취급방침 노출영역
                </div>
                <div class="form-group">
                    <label class="check"><input type="checkbox">이용약관에 동의합니다.</label>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-sm btn-white" role="button">회원가입 취소</a>
                        <a href="/member/join_input.php" class="btn btn-sm btn-gray" role="button">다음</a>
                    </p>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>