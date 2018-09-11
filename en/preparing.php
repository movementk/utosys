<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/dochead.php'); ?>
<link rel="stylesheet" href="/en/assets/css/sub.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>회사소개</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								인사말
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item active" href="/en/introduce/greetings.php">CEO 인사말</a>
								<a class="dropdown-item" href="/en/introduce/ideology.php">경영이념</a>
								<a class="dropdown-item" href="/en/introduce/history.php">연혁/사업실적</a>
								<a class="dropdown-item" href="/en/introduce/organization.php">조직도</a>
								<a class="dropdown-item" href="/en/introduce/ci.php">CI</a>
								<a class="dropdown-item" href="/en/introduce/certification.php">인증현황</a>
								<a class="dropdown-item" href="/en/introduce/location.php">오시는길</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="preparing">
    	<div class="container">
			<figure>
				<img src="/en/assets/images/img_preparing.png" class="img-fluid" alt="준비중">
			</figure>
			<h4>페이지 준비중 입니다</h4>
			<p>
				더욱 알차고 다양한 소식으로 찾아뵙겠습니다.<br>
				이용에 불편을 드려 대단히 죄송합니다.
			</p>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/docfoot.php'); ?>
</body>
</html>