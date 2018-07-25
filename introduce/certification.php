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
								인증현황
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/introduce/greetings.php">CEO 인사말</a>
								<a class="dropdown-item" href="/introduce/ideology.php">경영이념</a>
								<a class="dropdown-item" href="/introduce/history.php">연혁/사업실적</a>
								<a class="dropdown-item" href="/introduce/organization.php">조직도</a>
								<a class="dropdown-item" href="/introduce/ci.php">CI</a>
								<a class="dropdown-item active" href="/introduce/certification.php">인증현황</a>
								<a class="dropdown-item" href="/introduce/location.php">오시는길</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="certification">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>인증현황</h2>
			</div>
			<ul class="row">
				<li class="col-6 col-md-4 col-xl-3">
					<a href="#">
						<div class="items">
							<img src="/assets/images/introduce/img_certify01.jpg" class="img-fluid" alt="">
						</div>
						<p>특허 제 10-0963955호</p>
					</a>
				</li>
				<li class="col-6 col-md-4 col-xl-3">
					<a href="#">
						<div class="items">
							<img src="/assets/images/introduce/img_certify02.jpg" class="img-fluid" alt="">
						</div>
						<p>특허 제 10-0963955호</p>
					</a>
				</li>
				<li class="col-6 col-md-4 col-xl-3">
					<a href="#">
						<div class="items">
							<img src="/assets/images/introduce/img_certify03.jpg" class="img-fluid" alt="">
						</div>
						<p>특허 제 10-0963955호</p>
					</a>
				</li>
				<li class="col-6 col-md-4 col-xl-3">
					<a href="#">
						<div class="items">
							<img src="/assets/images/introduce/img_certify04.jpg" class="img-fluid" alt="">
						</div>
						<p>특허 제 10-0963955호</p>
					</a>
				</li>
			</ul>
		</div>
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>