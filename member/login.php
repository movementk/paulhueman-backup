<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body class="sub member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!--?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?-->
    <main id="content" class="login">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li class="active">LOGIN</li>
                </ol>
            </div>
            <div class="page-header">
                <h2>LOGIN</h2>
                <p>로그인하시면 폴 휴먼의 다양한 혜택을 누리실 수 있습니다.</p>
            </div>
            <div class="login-form">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">회원</a></li>
                    <li><a href="#">비회원 (주문 및 주문조회)</a></li>
                </ul>
                <div class="tab-content">
                    <form action="#">
                        <div class="form-group">
                            <label class="check"><input type="checkbox">자동 로그인</label>
                            <label class="check"><input type="checkbox">아이디 저장</label>
                        </div>
                        <div class="form-group">
                            <label for="u-id" class="sr-only">아이디</label>
                            <input type="text" class="form-control" id="u-id" placeholder="아이디">
                        </div>
                        <div class="form-group">
                            <label for="u-pw" class="sr-only">비밀번호</label>
                            <input type="password" class="form-control" id="u-pw" placeholder="비밀번호">
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-success">로그인</button>
                            </p>
                        </div>
                    </form>
                    <div class="id-find-join">
                        <ul class="dot-list">
                            <li>
                                <dl>
                                    <dt>아이디 또는 비밀번호를 잊어버리셨나요?</dt>
                                    <dd><a href="/member/id_find.php">아이디 / 비밀번호 찾기</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>아직 회원가입이 되어있지 않으신가요?</dt>
                                    <dd><a href="/member/join_terms.php">회원가입하기</a></dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>