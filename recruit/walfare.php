<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/recruit.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>인재채용</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								인재상
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/recruit/recruit_person.php">인재상</a>
								<a class="dropdown-item active" href="/recruit/walfare.php">복지제도</a>
								<a class="dropdown-item" href="#">채용안내</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="walfare">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>복지제도</h2>
			</div>
			<article class="health">
				<div class="info">
					<h5>건강한 생활 지원</h5>
					<ol>
						<li>
							<dl>
								<dt>
									<span>1</span>휴가
								</dt>
								<dd>
									법정공휴일, 유급하계휴가, Re-Fresh 
									휴가 등을 통하여 임직원들의 워라벨
									(Work&amp;Life Balance)을 지원합니다.
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span>2</span>임직원 건강검진</dt>
								<dd>
									정기적인 건강진단으로 임직원의 건강을 유지하고 있습니다.
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span>3</span>동호회 활동</dt>
								<dd>
									볼링, 탁구, 축구 등 다양한 동호회 활동을 지원하여 직원들의 건강과 조직 유대감 형성에 기여하고 있습니다. 
								</dd>
							</dl>
						</li>
					</ol>
				</div>
			</article>
			
			<article class="happy">
				<div class="info">
					<h5>행복한 생활지원</h5>
					<ol>
						<li>
							<span>1</span>
							<p>생일 및 결혼기념일 선물 지급</p>
						</li>
						<li>
							<span>2</span>
							<p>명절선물 및 귀향비 지원</p>
						</li>
						<li>
							<span>3</span>
							<p>사내식당 운영</p>
						</li>
					</ol>
				</div>
			</article>
			
			<article class="stable">
				<div class="info">
					<h5>안정적인 생활지원</h5>
					<ol>
						<li>
							<dl>
								<dt>
									<span>1</span>경조사지원
								</dt>
								<dd>
									임직원의 경조사 발생에 따른 축하금/ 조의금 및 경조사 유급휴가를부여합니다.
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span>2</span>기숙사지원</dt>
								<dd>
									타 지역 거주 임직원을 위한 기숙사 지원
								</dd>
							</dl>
						</li>
						<li>
							<span>3</span>
							<p>장기근속 포상</p>
						</li>
					</ol>
				</div>
			</article>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>