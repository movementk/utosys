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
								연혁/사업실적
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/introduce/greetings.php">CEO 인사말</a>
								<a class="dropdown-item" href="/introduce/ideology.php">경영이념</a>
								<a class="dropdown-item active" href="/introduce/history.php">연혁/사업실적</a>
								<a class="dropdown-item" href="#">조직도</a>
								<a class="dropdown-item" href="#">CI</a>
								<a class="dropdown-item" href="#">인증현황</a>
								<a class="dropdown-item" href="#">오시는길</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="history">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>연혁/사업실적</h2>
				<p>
					<i>(주)유토시스</i>가 걸어온 발자취를 소개합니다<br>
					늘 한곳만을 바라보면 열심히 전진 합니다
				</p>
			</div>
			<ol class="history-list">
				<li>
					<div class="row">
						<div class="col-12 col-md-7 col-xl-5 offset-xl-1">
							<div class="info">
								<div class="year year-15">
									2015
								</div>
								<ol class="details">
									<li>
										<dl>
											<dt>2015. 12</dt>
											<dd>부설 연구소 설립</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt>2015. 04</dt>
											<dd>회사 신축 이전</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt>2015. 03</dt>
											<dd>사명 변경 (디에스엔티 → 유토시스)</dd>
										</dl>
									</li>
								</ol>
							</div>
						</div>
						<div class="col-12 col-md-5 col-xl-5 offset-xl-1">
							<div class="history-img">
								<img src="/assets/images/introduce/img_history01.jpg" class="img-fluid" alt="2015">
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-12 col-md-7 col-xl-5 offset-xl-1">
							<div class="info">
								<div class="year year-12">
									2012 
								</div>
								<ol class="details space">
									<li>
										<dl>
											<dt>2012. 03</dt>
											<dd>LGD 1차 협력 업체 등록</dd>
										</dl>
									</li>
								</ol>
							</div>
						</div>
						<div class="col-12 col-md-5 col-xl-5 offset-xl-1">
							<div class="history-img">
								<img src="/assets/images/introduce/img_history02.jpg" class="img-fluid" alt="2012">
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-12 col-md-7 col-xl-5 offset-xl-1">
							<div class="info">
								<div class="year year-11">
									2011
								</div>
								<ol class="details space">
									<li>
										<dl>
											<dt>2011. 08</dt>
											<dd>
												벤처 기업 인증
												ISO 9001/14001 인증
											</dd>
										</dl>
									</li>
								</ol>
							</div>
						</div>
						<div class="col-12 col-md-5 col-xl-5 offset-xl-1">
							<div class="history-img">
								<img src="/assets/images/introduce/img_history03.jpg" class="img-fluid" alt="2011">
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-12 col-md-7 col-xl-5 offset-xl-1">
							<div class="info">
								<div class="year year-09">
									2009
								</div>
								<ol class="details space">
									<li>
										<dl>
											<dt>2009. 06</dt>
											<dd>사명 변경 (다스나노텍 → 디엔스엔티)</dd>
										</dl>
									</li>
								</ol>
							</div>
						</div>
						<div class="col-12 col-md-5 col-xl-5 offset-xl-1">
							<div class="history-img">
								<img src="/assets/images/introduce/img_history04.jpg" class="img-fluid" alt="2009">
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-12 col-md-7 col-xl-5 offset-xl-1">
							<div class="info">
								<div class="year year-07">
									2007
								</div>
								<ol class="details space">
									<li>
										<dl>
											<dt>2007. 01</dt>
											<dd>다스나노텍 설립</dd>
										</dl>
									</li>
								</ol>
							</div>
						</div>
						<div class="col-12 col-md-5 col-xl-5 offset-xl-1">
							<div class="history-img">
								<img src="/assets/images/introduce/img_history05.jpg" class="img-fluid" alt="2007">
							</div>
						</div>
					</div>
				</li>
			</ol>
		</div>
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>