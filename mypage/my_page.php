<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    <main id="content" class="my-page">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li class="active">MYPAGE</li>
                </ol>
            </div>
            <div class="my-page-info">
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <div class="lnb">
                            <h2 class="visible-lg">MY PAGE</h2>
                            <ul>
                                <li><a href="#">ORDERS</a></li>
                                <li><a href="#">CART</a></li>
                                <li><a href="#">PROFILE</a></li>
                                <li><a href="#">POINT</a></li>
                                <li><a href="#">COUPON</a></li>
                                <li><a href="#">Q&amp;A</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <div class="mypage-list">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <a href="#">
                                        <dl class="order">
                                            <dt>
                                                <img src="/assets/images/mypage/mypage_icon01.gif" class="img-responsive" alt="주문내역 조회">
                                            </dt>
                                            <dd>01 / ORDER CHECK</dd>
                                        </dl>
                                        <h3>주문내역 조회</h3>
                                        <p class="summary">
                                            고객님께서 주문하신 상품의 주문내역을 확인하실 수 있습니다.<br>
                                            비회원의 경우 이름과 주문번호로 주문조회가 가능합니다.
                                        </p>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <a href="#">
                                        <dl class="profile">
                                            <dt>
                                                <img src="/assets/images/mypage/mypage_icon02.gif" class="img-responsive" alt="회원정보수정">
                                            </dt>
                                            <dd>02 / PROFILE</dd>
                                        </dl>
                                        <h3>회원정보 수정</h3>
                                        <p class="summary">
                                            회원이신 고객님의 개인정보를 관리하는 공간입니다.<br>
                                            개인정보를 최신정보로 유지하시면 간편히<br class="hidden-md hidden-lg">
                                            쇼핑을 즐기실 수 있습니다.
                                        </p>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <a href="#">
                                        <dl class="point">
                                            <dt>
                                                <img src="/assets/images/mypage/mypage_icon03.gif" class="img-responsive" alt="적립금조회">
                                            </dt>
                                            <dd>03 / POINT</dd>
                                        </dl>
                                        <h3>적립금 조회</h3>
                                        <p class="summary">
                                            적립금은 상품 구매시 간편하게사용하실 수 있습니다.<br>
                                            적립된 금액은 현금으로 환불되지 않습니다.
                                        </p>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <a href="#">
                                        <dl class="coupon">
                                            <dt>
                                                <img src="/assets/images/mypage/mypage_icon04.gif" class="img-responsive" alt="쿠폰조회">
                                            </dt>
                                            <dd>04 / COUPON</dd>
                                        </dl>
                                        <h3>쿠폰 조회</h3>
                                        <p class="summary">
                                            쿠폰조회 페이지를 통해 시리얼쿠폰을 등록하실 수 있습니다.<br>
                                            다운받은 쿠폰은 상품 구매시 사용사실 수 있습니다.
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>