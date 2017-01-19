<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    <main id="content" class="secede-sucess">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li class="active">MEMBERSHIP</li>
                </ol>
            </div>
            <div class="sucess">
                <h2>회원탈퇴가 완료되었습니다.</h2>
                <p>
                    그동안 폴휴먼을 이용해주셔서 감사합니다<br> 
                    보다 나은 서비스로 다시 찾아 뵙겠습니다.
                </p>
                <div class="btn-area">
                    <p>
                        <a href="/" class="btn btn-default btn-gray" role="button">메인가기</a>
                    </p>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>