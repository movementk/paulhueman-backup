<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    <main id="content" class="secede">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li class="active">MEMBERSHIP</li>
                </ol>
            </div>
            <div class="page-header">
                <h2>회원탈퇴</h2>
                <p>고객님을 위해 더욱 노력하는 폴휴먼이 되겠습니다</p>
            </div>
            <div class="notandum">
                <h3>유의사항</h3>
                <ul class="dot-list">
                    <li>
                        <h4>즉시 재가입 가능</h4>
                        <p>회원탈퇴를 신청하면, 해당 아이디는 즉시탈퇴 처리되며, 이후 바로 같은<br class="visible-lg"> 아이디로 가입 할 수 없게 됩니다.</p>
                    </li>
                    <li>
                        <h4>회원 탈퇴에 따른 이용내역 삭제</h4>
                        <p>회원탈퇴를 신청하면, 모든 이용내역이 삭제되어 복구가 불가능 하게 됩니다.</p>
                    </li>
                    <li>
                        <h4>회원정보 및 서비스 정보 삭제</h4>
                        <p>회원탈퇴 즉시 회원정보는 즉시삭제되며 아래 회원제 서비스의 정보도 삭제 됩니다.</p>
                        <ul>
                            <li>기본 회원정보 : DB에 저장되어있는 기본 회원정보 (이름/주소/전화번호등)가 삭제 됩니다.</li>
                            <li>결제내역 삭제 : 기존에 결제한 서비스가 모두 삭제 됩니다.</li>
                            <li>게시물 및 등록 자료 삭제 : 등록한 게시판의 게시물 및 덧글등이 삭제 됩니다.</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="secede-form">
                <form action="#">
                    <div class="form-group">
                        <label for="u-id" class="sr-only">아이디</label>
                        <input type="text" id="u-id" class="form-control" placeholder="아이디">
                    </div>
                    <div class="form-gorup">
                        <label for="u-pw" class="sr-only">비밀번호</label>
                        <input type="password" id="u-pw" class="form-control" placeholder="비밀번호">
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-default btn-gray">회원탈퇴</button>
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