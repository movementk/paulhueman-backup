<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body class="sub member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!--?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?-->
    <main id="content" class="find pw-find">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li class="active">LOGIN</li>
                </ol>
            </div>
            <div class="page-header">
                <h2>ID / PASSWORD SEARCH</h2>
                <p>비밀번호가 기억나지 않으세요? 원하시는 방법을 선택해 비밀번호를 확인하실 수 있습니다</p>
            </div>
            <div class="find-form">
                <ul class="nav nav-tabs">
                    <li><a href="/member/id_find.php">아이디 찾기</a></li>
                    <li class="active"><a href="/member/pw_find.php">비밀번호 찾기</a></li>
                </ul>
                <div class="tab-content">
                    <form action="#">
                        <p class="attention">
                            회원님이 가입 시 입력한 아이디와 회원정보 (휴대폰번호 혹은 이메일)를 이용하거나,<br class="hidden-xs"> 
                            본인인증을 통해 원하는 비밀번호로 변경하실 수 있습니다.
                        </p>
                        <div class="form-group">
                            <label class="radio-area"><input type="radio">휴대폰번호</label>
                            <label class="radio-area"><input type="radio">이메일</label>
                            <label class="radio-area"><input type="radio">아이핀(i-PIN) 본인인증</label>
                        </div>
                        <div class="form-group">
                            <label for="u-id" class="sr-only">아이디</label>
                            <input type="text" class="form-control" id="u-id" placeholder="아이디">
                        </div>
                        <div class="form-group">
                            <label for="u-email" class="sr-only">이메일</label>
                            <input type="email" class="form-control" id="u-email" placeholder="이메일">
                        </div>
                        <div class="form-group">
                            <label for="u-pw" class="sr-only">비밀번호</label>
                            <input type="password" class="form-control" id="u-pw" placeholder="비밀번호">
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-success">확인</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>