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
								路线
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/cn/introduce/greetings.php">CEO问候</a>
								<a class="dropdown-item" href="/cn/introduce/ideology.php">经营理念</a>
								<a class="dropdown-item" href="/cn/introduce/history.php">历史/业务绩效</a>
								<a class="dropdown-item" href="/cn/introduce/organization.php">组织图</a>
								<a class="dropdown-item" href="/cn/introduce/ci.php">CI</a>
								<a class="dropdown-item" href="/cn/introduce/certification.php">认证现状</a>
								<a class="dropdown-item active" href="/cn/introduce/location.php">路线</a>
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
						<h2>路线</h2>
					</div> 
				</div>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">总部（龟尾营业场所）</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="paju-tab" data-toggle="tab" href="#paju" role="tab" aria-controls="profile" aria-selected="false">坡州办事处</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="section-content">
							<h4>总部（龟尾营业场所）</h4>
							<ul class="details">
								<li>
									<dl>
										<dt>地址</dt>
										<dd>庆尚北道龟尾市海平面道新路162-32</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt>电话</dt>
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
								<img src="/cn/assets/images/introduce/img_maps.jpg" class="img-fluid" alt="지도">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="paju" role="tabpanel" aria-labelledby="paju-tab">
						<div class="section-content">
							<h4>坡州办事处</h4>
							<ul class="details">
								<li>
									<dl>
										<dt>地址</dt>
										<dd>京畿道坡州市月笼面德隐里1248-2</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt>电话</dt>
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
								<img src="/cn/assets/images/introduce/img_maps.jpg" class="img-fluid" alt="지도">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--section class="main-office">
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
		</section-->
		
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/docfoot.php'); ?>
</body>
</html>