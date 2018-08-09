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
							고대 유럽인들의 주술문자를 결합시킨 바인드룬 문자 기호 접목 적용 기호는 “꿈을 실현시켜 준다”라는 의미의 문자 기호입니다.<br class="d-none d-lg-block"> 고객/구성원/주주/사회 모두의 꿈을 실현시켜 주는 이상적인 회사를 추구 하는 의미로 유토시스의 헌신과 도전정신을 담아내고 있습니다.
						</p>
					</div>
				</div>
				<div class="section-content">
					<div class="bg-square">
						<img src="/assets/images/introduce/img_ci_logo.png" alt="로고">
					</div>
					<!--div class="btn-area">
						<p>
							<a href="#" class="btn btn-white" role="button">AI 파일 다운로드</a>
							<a href="#" class="btn btn-navy" role="button">PDF 파일 다운로드</a>
						</p>
					</div>
					<p>로고타입은 절대로 임의로 타이핑하여 사용, 색상 임의 조절, 로고 일부만 사용하는 등의 변형을 할 수 없습니다.</p-->
				</div>
			</div>
		</section>
		<!--section class="ci-color">
			<div class="container">
				<div class="section-header">
					<div class="page-title">
						<h2>Color System</h2>
						<p>
							유토시스 핵심 컬러는 Blue Navy color와 
							Navy  color를 기본으로 합니다.
						</p>
					</div>
				</div>
				<div class="section-content">
					<ul class="row">
						<li class="col-12 col-md-4">
							<div class="color">
								<div class="color-show symbol">Symbol Color</div>
								<div class="details">
									<p>
										 C 75 / M 26 / Y 0 / K 0<br>
										 R 0 / G 160 / B 233
									</p>
								</div>
							</div>
						</li>
						<li class="col-12 col-md-4">
							<div class="color">
								<div class="color-show primtary">Primary Color</div>
								<div class="details">
									<p>
										 C 100 / M 93 / Y 38 / K 1<br>
										 R 0 / G 48 / B 122
									</p>
								</div>
							</div>
						</li>
						<li class="col-12 col-md-4">
							<div class="color">
								<div class="color-show secondary">Secondary Color</div>
								<div class="details">
									<p>
										 C 8 / M 95 / Y 81 / K 0<br>
										 R 234 / G 33 / B 47
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section-->
		
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>