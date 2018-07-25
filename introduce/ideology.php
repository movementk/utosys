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
				<p>
					유토시스는 “Utopia” + ”System”의 합성어로 고객과 구성원들의 가치를 최우선으로 하고, 신소재 및 FPD( flat panel display ) 장비 및<br class="d-none d-xl-block"> 소재분야에서 미래 지향적인 연구개발을 중심으로 고객의 신뢰를 믿음으로 보답하는 젊은 기업입니다. 최고의 기술은 사람의 마음으로부터<br class="d-none d-xl-block"> 시작 된다는 신념 아래 전 임직원이 하나가 되어 고객 만족을 실현 하고자 최선을 다하고 있습니다.  
				</p>
			</div>
			
			<ul class="ideology-list">
				<li>
					<div class="icon"><img src="/assets/images/introduce/icon_list01.jpg" alt="고객중심"></div>
					<h3>고객중심</h3>
					<p>고객만족 실현을 위한 노력</p>
				</li>
				<li>
					<div class="icon"><img src="/assets/images/introduce/icon_list02.jpg" alt="구성원 중심"></div>
					<h3>구성원 중심</h3>
					<p>상호존중, 상생/성장을 위해<br> 소통을 중시 합니다.</p>
				</li>
				<li>
					<div class="icon"><img src="/assets/images/introduce/icon_list03.jpg" alt="과 공유"></div>
					<h3>성과 공유</h3>
					<p>모두와 함께하며 앞으로의<br> 발전을 위해 노력합니다.</p>
				</li>
			</ul>
			<div class="vision-box">
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
			</div>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>