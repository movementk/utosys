<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/dochead.php'); ?>
<link rel="stylesheet" href="/cn/assets/css/sub.css">
<link rel="stylesheet" href="/cn/assets/css/introduce.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>关于我们</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								组织图
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/cn/introduce/greetings.php">CEO问候</a>
								<a class="dropdown-item" href="/cn/introduce/ideology.php">经营理念</a>
								<a class="dropdown-item" href="/cn/introduce/history.php">历史/业务绩效</a>
								<a class="dropdown-item  active" href="/cn/introduce/organization.php">组织图</a>
								<a class="dropdown-item" href="/cn/introduce/ci.php">CI</a>
								<a class="dropdown-item" href="/cn/introduce/certification.php">认证现状</a>
								<a class="dropdown-item" href="/cn/introduce/location.php">路线</a>
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
				<h2>组织图</h2>
			</div>
			<figure>
				<img src="/cn/assets/images/introduce/img_organization_sm.png" class="img-fluid d-sm-block d-md-none" alt="조직도">
				<img src="/cn/assets/images/introduce/img_organization_md.png" class="img-fluid d-none d-md-block d-xl-none" alt="조직도">
				<img src="/cn/assets/images/introduce/img_organization_xl.png" class="img-fluid d-none d-xl-block" alt="조직도">
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
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/docfoot.php'); ?>
</body>
</html>