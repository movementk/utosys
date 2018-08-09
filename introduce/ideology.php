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
			<div class="page-title">
				<h2>경영이념</h2>
			</div>
			<div class="ideology-bg">
				<strong>주식회사 유토시스는</strong>
				<p>
					최고의 기술은 사람의 마음으로 부터<br class="d-sm-block d-md-none"> 시작 된다는 신념으로<br class="d-none d-md-block"> <b>고객과 구성원들의 가치를 최우선으로 실현한다</b>
				</p>
			</div>
		</div>  
		<div class="vision">
			<div class="container">
				<h3>VISION</h3>	
				<figure>
					<img src="/assets/images/introduce/img_vision.png" class="img-fluid" alt="">
					<figcaption>
						<h4>Beyond  Aliveness</h4> 
						<p>기존의 틀을 벗어나 미래지향적인 사고와 행동으로 FPD 장비분야의 위상과 경쟁력을 높이고자 한다 </p>
					</figcaption>
				</figure>
			</div>	
		</div>
		<div class="core-value">
			<div class="container">
				<h3>핵심가치</h3>
				<ul class="ideology-list">
					<li>
						<div class="icon"><img src="/assets/images/introduce/icon_list01.jpg" alt="고객중심"></div>
						<h4>고객중심</h4>
						<p>고객만족 실현을 위한 노력</p>
					</li>
					<li>
						<div class="icon"><img src="/assets/images/introduce/icon_list02.jpg" alt="구성원 중심"></div>
						<h4>구성원 중심</h4>
						<p>상호존중, 상생/성장을 위해<br> 소통을 중시 합니다.</p>
					</li>
					<li>
						<div class="icon"><img src="/assets/images/introduce/icon_list03.jpg" alt="과 공유"></div>
						<h4>성과 공유</h4>
						<p>모두와 함께하며 앞으로의<br> 발전을 위해 노력합니다.</p>
					</li>
				</ul>
				<!--div class="vision-box">
					<figure>
						<img src="/assets/images/introduce/ideology_vision_arrow.png" alt="비전 화살표">
						<figcaption>
							VISION
						</figcaption>
					</figure>
					<div class="details">
						<div class="logo">
							<img src="/assets/images/introduce/ideology_logo.jpg" alt="로고">
						</div>
						<p><i>인간의 풍요롭고 안전한 삶</i>을<br> 위해 노력하는 기업</p>
					</div>
				</div-->
			</div>
		</div>
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>