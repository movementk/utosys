<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/dochead.php'); ?>
<link rel="stylesheet" href="/cn/assets/css/sub.css">
<link rel="stylesheet" href="/cn/assets/css/customer.css">
</head>
<body class="customer">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>고객센터</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								공지사항
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item active" href="/cn/customer/notice_list.php">공지사항</a>
								<a class="dropdown-item" href="/cn/customer/qna_list.php">Q&amp;A</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="notice-view">
    	<div class="container">
			<div class="page-title">
				<h2>공지사항</h2>
			</div>
			<div class="board-view">
				<div class="view-header">
					<h3 class="board-title">임의에 내용을 노출합니다.</h3>
					<div class="borad-info">
						<ul>
							<li>
								<dl>
									<dt>등록일</dt>
									<dd>2018.07.04</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt>조회수</dt>
									<dd>201</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt>작성자</dt>
									<dd>유토시스</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
				<div class="view-body">
					임의의 내용을 노출합니다.<br>
					감사합니다.
				</div>
				<dl class="attach">
					<dt>첨부파일</dt>
					<dd>
						<a href="#">회사소개서.pdf</a>
						<a href="#">첨부파일1.jpg</a>
					</dd>
				</dl>
			</div>
			<ul class="page-link1">
				<li class="prev-link">
					<dl>
						<dt>이전글</dt>
						<dd>
							<a href="#">이전글 제목이 노출되는 영역입니다.</a>
						</dd>
					</dl>
				</li>
				<li class="next-link">
					<dl>
						<dt>다음글</dt>
						<dd>
							<a href="#">다음글 제목이 노출되는 영역입니다.</a>
						</dd>
					</dl>
				</li>
			</ul>
			<div class="btn-area">
				<p>
					<a href="#" class="btn btn-black btn-left" role="button">삭제하기</a>
					<a href="#" class="btn btn-black btn-left" role="button">수정하기</a>
					<a href="/cn/customer/notice_list.php" class="btn btn-navy btn-right" role="button">목록보기</a>
				</p>
			</div>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/docfoot.php'); ?>
</body>
</html>