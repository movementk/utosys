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
								오시는길
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/introduce/greetings.php">CEO 인사말</a>
								<a class="dropdown-item" href="/introduce/ideology.php">경영이념</a>
								<a class="dropdown-item" href="/introduce/history.php">연혁/사업실적</a>
								<a class="dropdown-item" href="/introduce/organization.php">조직도</a>
								<a class="dropdown-item" href="/introduce/ci.php">CI</a>
								<a class="dropdown-item" href="/introduce/certification.php">인증현황</a>
								<a class="dropdown-item active" href="/introduce/location.php">오시는길</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="location">
		<section class="route">
			<div class="container">
				<div class="section-header">
					<div class="page-title">
						<h2>오시는길</h2>
					</div> 
				</div>
				<div class="section-content">
					<h4>본사 (구미사업장)</h4>
					<ul class="details">
						<li>
							<dl>
								<dt>주소</dt>
								<dd>경북 구미시 도신로 162-32</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>대표번호</dt>
								<dd><a href="tel:0544738122">054-473-8122</a></dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>FAX</dt>
								<dd>054-473-8123</dd>
							</dl>
						</li>
					</ul>
					<div class="maps">
						<img src="/assets/images/introduce/img_maps.jpg" class="img-fluid" alt="지도">
					</div>
				</div>
			</div>
		</section>
		<section class="main-office">
			<div class="container">
				<h4>본사현황</h4>
				<ul class="row">
					<li class="col-12 col-md-3">
						 <dl>
						 	<dt>설립일</dt>
						 	<dd>
						 		<div class="items">
						 			<img src="/assets/images/introduce/img_main_office01.png" alt="설립일">
						 		</div>
						 		<p>2007.01.08</p>
						 	</dd>
						 </dl>
					</li>
					<li class="col-12 col-md-3">
						 <dl>
						 	<dt>인력 구성 현황</dt>
						 	<dd>
						 		<div class="items">
						 			<img src="/assets/images/introduce/img_main_office02.png" alt="인력 구성 현황">
						 		</div>
						 		<p>총 30명</p>
						 		<small>
						 			(관리분야 : 10%, 기술지원 분야 7% <br>
									설계/제어분야 : 33%, 생산/CS 분야 
								</small>
						 	</dd>
						 </dl>
					</li>
					<li class="col-12 col-md-3">
						 <dl>
						 	<dt>본사 규모</dt>
						 	<dd>
						 		<div class="items">
						 			<img src="/assets/images/introduce/img_main_office03.png" alt="본사 규모">
						 		</div>
						 		<p>1500평 건평 : 450평</p>
						 		<small>Clean Room : 300평 규모</small>
						 	</dd>
						 </dl>
					</li>
					<li class="col-12 col-md-3">
						 <dl>
						 	<dt>FPD 사업 분야 경력</dt>
						 	<dd>
						 		<div class="items">
						 			<img src="/assets/images/introduce/img_main_office04.png" alt="FPD 사업 분야 경력">
						 		</div>
						 		<p>경력 5년 이상 비율 43 %</p>
						 	</dd>
						 </dl>
					</li>
				</ul>
			</div>
		</section>
		
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>