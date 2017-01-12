<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!--?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?-->
    <main id="content">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li><a href="#">SHOP</a></li>
                    <li class="active">SUNGLASSES</li>
                </ol>
            </div>
            
            <!-- join step -->
            <div style="margin: 30px 0;">
                <h6 class="sub-title">회원가입 절차</h6>
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
            </div>
            
            <!-- button list -->
            <div style="margin: 30px 0;">
                <h6 class="sub-title">버튼</h6>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-lg btn-white" role="button">제품더보기</a>
                    </p>
                    <span style="margin-top: 10px; display: block;"></span>
                    <p>
                        <a href="#" class="btn btn-lg btn-gray" role="button">메인 가기</a>
                    </p>
                    <span style="margin-top: 10px; display: block;"></span>
                    <p>
                        <a href="#" class="btn btn-sm btn-white" role="button">회원가입 취소</a>
                        <button type="submit" class="btn btn-sm btn-gray">다음</button>
                    </p>
                </div>
            </div>
            
            <!-- product list -->
            <div style="margin: 30px 0;">
                <h6 class="sub-title">상품 리스트</h6>
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <div class="lnb">
                            <h2 class="visible-lg">SHOP</h2>
                            <ul>
                                <li class="active"><a href="#">SUNGLASSES</a></li>
                                <li><a href="#">GLASSES</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <div class="glasses-list">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="glasses-item">
                                        glasses-1
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="glasses-item">
                                        glasses-2
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="glasses-item">
                                        glasses-3
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="glasses-item">
                                        glasses-4
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="glasses-item">
                                        glasses-5
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="glasses-item">
                                        glasses-6
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- terms -->
            <div>
                <h6 class="sub-title">이용약관 및 개인정보</h6>
                <div class="terms">
                    <h3>이용약관</h3>
                    <div class="summary service">
                        이용약관 노출영역
                    </div>
                    <div class="form-group">
                        <label class="check"><input type="checkbox">이용약관에 동의합니다.</label>
                    </div>
                </div>
            </div>
            
            <!-- nav-tabs -->
            <div style="margin: 30px 0;">
                <h6 class="sub-title">회원 및 비회원 아이디 및 비번 찾기 폼</h6>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">회원</a></li>
                    <li><a href="#">비회원 (주문 및 주문조회)</a></li>
                </ul>
                <div class="tab-content">
                    content 내용입력
                </div>
            </div>
            
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>