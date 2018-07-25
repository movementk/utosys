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
								<a class="dropdown-item" href="#">인증현황</a>
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
		<div class="container">
			<section class="route">
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
								<dd>054-473-8122</dd>
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
			</section>
		</div>
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>