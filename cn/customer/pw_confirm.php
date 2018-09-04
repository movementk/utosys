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
								Q&amp;A
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/cn/customer/notice_list.php">공지사항</a>
								<a class="dropdown-item active" href="/cn/customer/qna_list.php">Q&amp;A</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="pw-confirm">
    	<div class="container">
			<article class="confirm-form">
				<form action="#">
					<figure>
						<img src="/cn/assets/images/customer/img_pw_lock.jpg" alt="">
					</figure>
					<div class="details">
						<h2>비밀번호 확인</h2>
						<p>
							개인정보를 보호하기 위해 비밀번호를 한번 더확인합니다. <br class="d-none d-md-block">
							타인에게 비밀번호가 노출되지 않도록 항상 주의하세요.
						</p>
					</div>
					<div class="form-group">
						<input type="password" id="u-pw" class="form-control">
						<label for="u-pw" class="sr-only">비밀번호 확인</label>
					</div>
					<div class="btn-area">
						<p>
							<a href="#" class="btn btn-white" role="button">취소하기</a>
							<button type="submit" class="btn btn-navy">확인</button>
						</p>
					</div>
				</form>
			</article>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/docfoot.php'); ?>
</body>
</html>