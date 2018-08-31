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
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								인사말
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item active" href="/introduce/greetings.php">CEO 인사말</a>
								<a class="dropdown-item" href="/introduce/ideology.php">경영이념</a>
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
    <main id="content" class="greetings">
    	<div class="container">
			<div class="page-title">
				<h2>CEO 인사말</h2>
			</div>
			<article>
				<figure>
					<img src="/assets/images/introduce/img_greetings.jpg" class="img-fluid" alt="인사말배경">
				</figure>
				<div class="row">
					<div class="col-12 col-xl-5">
						<div class="greeting-card">
							<p>
								안녕하십니까? <br>
								저희 홈페이지를 방문해 주신 것을<br class="d-none d-md-block">
								환영합니다.
							</p>
						</div>
					</div>
					<div class="col-12 col-xl-7">
						<div class="details">
							<b>사람이 <i>建康</i>하고, <i>會社</i>가 <i>建康</i>한, <i>百年</i> 가치의 기업</b> 
							<p>
								Utosys는 고객이 원하는 최대가치를 추구하기 위해 
								전 구성원이 최선의 노력을 다함과 동시에,구성원들의 절대
								행복을 추구하고자 개개인의 사소한 의견에도 귀 기울이는
								소통을 이념으로 하는 회사입니다.
								<br>
								<br>
								Utosys는 LCD/OLED 분야에서 물류 System 영역을 시작으로,
								검사장비 System 영역까지 기술력을 확대하였습니다. 
								이렇게 LCD,  OLED 산업에서 인정 받은 기술력을 기반으로, 
								국내시장은 물론 글로벌 시장으로 사업영역을 확장하고 있습니다.
								<br>
								<br>
								급변하는 시장 상황 속에서  항상 고객을 최우선으로 생각하고,  
								고객의 요구에 부합 할 수 있는 기술 개발과 사고로 항상 최선을
								다하는 기업, 백년 이상의 가치를 추구하는 기업, 전임직원이 
								행복한 기업으로 성장해 나갈 수 있도록 최선을 다하겠습니다.
								<br>
								<br>
								앞으로도 Utosys에 대한 많은 관심과 격려를 부탁드립니다.
								<br>
								<br>
								감사합니다.
								<br>
								<br>
								㈜유토시스 임직원 일동
							</p>
						</div>
					</div>
				</div>
			</article>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>