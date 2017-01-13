<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body class="sub member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    <main id="content" class="join-input">
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
                <li class="active">
                    <p><img src="/assets/images/sub/step02_ico_active.png" alt="회원약관동의"></p>
                    <h3><i>STEP 02</i>회원정보입력</h3>
                </li>
                <li>
                    <p><img src="/assets/images/sub/step03_ico.png" alt="회원약관동의"></p>
                    <h3><i>STEP 03</i>가입완료</h3>
                </li>
            </ol>
            <div class="join-input-form">
                <h3>
                    회원정보 입력
                    <small>필수 입력사항입니다</small>
                </h3>
                <form action="#">
                    <div class="input-form">
                        <div class="row">
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="u-id" class="ootc">아이디</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="text" id="u-id" class="form-control">
                                <p class="attention">4자 이상 입력해주세요.</p>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="u-pw" class="ootc">비밀번호</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="password" id="u-pw" class="form-control">
                                <p class="attention">영문, 숫자 조합 8자 이상 입력해 주세요.</p>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="pw-confirm" class="ootc">비밀번호 확인</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="password" id="pw-confirm" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="u-name" class="ootc">이름</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="text" id="u-name" class="form-control u-name">
                                <p class="attention">실명으로 입력해 주세요. (실명인증 이용시 자동입력)</p>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="u-email" class="ootc">이메일</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="email" id="u-email" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="t-num">전화번호</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="text" id="t-num" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="phone" class="ootc">휴대폰</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="text" id="phone" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="addr-1" class="ootc">주소</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <div class="addr">
                                    <input type="text" id="addr-1" class="form-control addr-1">
                                    <p class="btn-addr">
                                        <button type="button" class="btn">우편번호</button>
                                    </p>
                                    <input type="text" id="addr-2" class="form-control">
                                    <input type="text" id="addr-3" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <p class="defines">이메일 수신동의</p>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <div class="form-group">
                                    <label class="check"><input type="checkbox">이메일 수신을 동의합니다</label>
                                </div>
                            </div>
                            
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <p class="defines">SMS 수신동의</p>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <div class="form-group">
                                    <label class="check"><input type="checkbox">SMS수신을 동의합니다</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-white" role="button">회원가입 취소</a>
                            <button type="submit" class="btn btn-sm btn-gray">다음</button>
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