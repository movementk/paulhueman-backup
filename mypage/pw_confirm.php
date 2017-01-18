<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    <main id="content" class="pw-confirm">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li class="active"><a href="/mypage/my_page.php">MYPAGE</a></li>
                </ol>
            </div>
            <div class="page-header">
                <h2>PASSWORD</h2>
                <p>
                    회원님의 소중한 개인정보를 안전하게 보호하고 개인정보 도용으로 인한 피해를 <br class="hidden-xs">
                    예방하기 위하여 비밀번호를 확인합니다. 비밀번호는 타인에게 노출되지 않도록 주의해 주세요.
                </p>
            </div>
            <div class="pw-form">
                <form action="#">
                    <div class="form-group">
                        <p class="user-name">TEST</p>
                        <label for="u-pw" class="sr-only">비빌번호</label>
                        <input type="password" id="u-pw" class="form-control" placeholder="비밀번호">
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-default btn-gray">비밀번호 확인</button>
                        </p>
                    </div>
                </form>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>