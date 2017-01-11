<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    
    <aside id="aside" class="hidden-lg"></aside>
    
    
    
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
            <div class="join-step">
                <h6 class="sub-title">회원가입 절차</h6>
                <ol>
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
            <div class="glasses-item">
                <h6 class="sub-title">상품 리스트</h6>
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <div class="tab-menu">
                            <h2 class="visible-lg">SHOP</h2>
                            <ul>
                                <li class="active"><a href="#">SUNGLASSES</a></li>
                                <li><a href="#">GLASSES</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <div class="item-list">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="item">
                                        item-1
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="item">
                                        item-2
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="item">
                                        item-3
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="item">
                                        item-4
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="item">
                                        item-5
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="item">
                                        item-6
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
            
            <!-- member-form -->
            <div style="margin: 30px 0;">
               <h6 class="sub-title">회원 및 비회원 아이디 및 비번 찾기 폼</h6>
                <div class="select-form">
                    <div class="select-header">
                        <ul class="select-menu">
                            <li class="active"><a href="#">회원</a></li>
                            <li><a href="#">비회원 (주문 및 주문조회)</a></li>
                        </ul>
                    </div>
                    <div class="select-content">
                        content 내용입력
                    </div>
                </div>
            </div>
            
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>