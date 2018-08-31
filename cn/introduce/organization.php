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
								조직도
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/introduce/greetings.php">CEO 인사말</a>
								<a class="dropdown-item" href="/introduce/ideology.php">경영이념</a>
								<a class="dropdown-item" href="/introduce/history.php">연혁/사업실적</a>
								<a class="dropdown-item active" href="/introduce/organization.php">조직도</a>
								<a class="dropdown-item" href="/introduce/ci.php">CI</a>
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
    <main id="content" class="organization">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>조직도</h2>
			</div>
			<figure>
				<img src="/assets/images/introduce/img_organization_sm.png" class="img-fluid d-sm-block d-md-none" alt="조직도">
				<img src="/assets/images/introduce/img_organization_md.png" class="img-fluid d-none d-md-block d-xl-none" alt="조직도">
				<img src="/assets/images/introduce/img_organization_xl.png" class="img-fluid d-none d-xl-block" alt="조직도">
			</figure>
			<ul class="sr-only">
				<li><h1>CEO</h1></li>
				<li>
					경영혁신팀
					<ul>
						<li>
							시스템 사업부
							<ul>
								<li>시스템 사업부</li>
								<li>제어전장팀</li>
								<li>구매팀</li>
								<li>영업팀</li>
							</ul>
						</li>
						<li>
							생산관리부
							<ul>
								<li>MC1 팀</li>
								<li>MC2 팀</li>
								<li>해외CS팀</li>
							</ul>
						</li>
						<li>
							기술연구소
							<ul>
								<li>기구팀</li>
								<li>제어팀</li>
								<li>VISION 팀</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>