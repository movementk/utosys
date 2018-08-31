<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduce.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
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
								CI
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/introduce/greetings.php">CEO 인사말</a>
								<a class="dropdown-item" href="/introduce/ideology.php">경영이념</a>
								<a class="dropdown-item" href="/introduce/history.php">연혁/사업실적</a>
								<a class="dropdown-item" href="/introduce/organization.php">조직도</a>
								<a class="dropdown-item active" href="/introduce/ci.php">CI</a>
								<a class="dropdown-item" href="/introduce/certification.php">인증현황</a>
								<a class="dropdown-item" href="/introduce/location.php">오시는길</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="ci">
		<section class="ci-info">
			<div class="container">
				<div class="section-header">
					<div class="page-title">
						<h2>CI</h2>
						<p>
							고대 유럽인들의 주술문자를 결합시킨 바인드룬 문자 기호 접목 적용 기호는 <strong>"꿈을 실현시켜 준다"</strong>라는 의미의 문자 기호입니다.<br class="d-none d-lg-block"> 고객/구성원/주주/사회 모두의 꿈을 실현시켜 주는 이상적인 회사를 추구 하는 의미로 유토시스의 <strong>헌신과 도전정신</strong>을 담아내고 있습니다.
						</p>
					</div>
				</div>
				<div class="section-content">
					<div class="bg-square">
						<img src="/assets/images/introduce/img_ci_logo.png" alt="로고">
					</div>
				</div>
			</div>
		</section>
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>