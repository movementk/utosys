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
								경영이념
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/introduce/greetings.php">CEO 인사말</a>
								<a class="dropdown-item  active" href="/introduce/ideology.php">경영이념</a>
								<a class="dropdown-item" href="/introduce/history.php">연혁/사업실적</a>
								<a class="dropdown-item" href="/introduce/organization.php">조직도</a>
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
    <main id="content" class="ideology">
    	<div class="container">
			<!-- page-title -->
			<article class="management">
				<h3>경영이념</h3>
				<p>최고의 기술은 사람의 마음으로 부터<br class="d-sm-block d-md-none"> 시작 된다는 신념으로<br class="d-none d-md-block"><b> 고객과 구성원들의<br class="d-sm-block d-md-none">  가치를 최우선으로 실현한다</b></p>
			</article>
			<article class="vision">
				<h3>VISION</h3>
				<strong>Beyond <i>Aliveness</i></strong>
				<p>
					기존의 틀을 벗어나 미래지향적인 사고와<br class="d-sm-block d-md-none"> 행동으로 FPD <br class="d-none d-md-block">
					장비분야의 위상과 경쟁력을<br class="d-sm-block d-md-none"> 높이고자 한다 
				</p>
				<div class="vision-list">
					<figure>
						<img src="/assets/images/introduce/img_vision_list_sm.png" class="d-sm-block d-md-none d-xl-none" alt=""> 
						<img src="/assets/images/introduce/img_vision_list_md.png" class="d-none d-md-block d-xl-none" alt=""> 
						<img src="/assets/images/introduce/img_vision_list_xl.png" class="d-none d-md-none d-xl-block" alt="">
						<figcaption class="sr-only">
							<ul>
								<li>
									<h4>구성원 중심</h4>
									<p>상호존중, 상생/성장을 위해 소통을 중시 합니다.</p>
								</li>
								<li>
									<h4>고객중심</h4>
									<p>고객만족 실현을 위한 노력</p>
								</li>
								<li>
									<h4>성과 공유</h4>
									<p>모두와 함께하며 앞으로의 발전을 위해 노력합니다.</p>
								</li>
							</ul>
						</figcaption>
					</figure>
				</div>
			</article>
		</div>  
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>