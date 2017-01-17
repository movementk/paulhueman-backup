<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body class="sub member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    <main id="content" class="login nonmember">
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
                    <li><a href="/member/login.php">회원</a></li>
                    <li class="active"><a href="#">비회원 (주문 및 주문조회)</a></li>
                </ul>
                <div class="tab-content">
                    <form action="#">
                        <div class="form-group">
                            <label for="u-name" class="sr-only">주문자명</label>
                            <input type="text" class="form-control" id="u-name" placeholder="주문자명">
                        </div>
                        <div class="form-group">
                            <label for="o-number" class="sr-only">주문번호</label>
                            <input type="text" class="form-control" id="o-number" placeholder="주문번호">
                        </div>
                        <div class="form-group">
                            <label for="u-phone" class="sr-only">휴대폰번호</label>
                            <input type="text" class="form-control" id="u-phone" placeholder="휴대폰번호">
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-success">로그인</button>
                            </p>
                        </div>
                    </form>
                    <div class="id-find-join">
                        <p class="attention">
                            주문 시 설정한 비밀번호가 생각나지 않으신다면 고객센터 <a href="tel:0800804937">080-080-4937</a>로 문의하시기 바랍니다.
                        </p>
                    </div>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>