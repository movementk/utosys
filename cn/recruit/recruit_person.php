<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/dochead.php'); ?>
<link rel="stylesheet" href="/cn/assets/css/sub.css">
<link rel="stylesheet" href="/cn/assets/css/recruit.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>人才录用</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								人才奖
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item active" href=/cn/recruit/recruit_person.php>人才奖</a>
								<a class="dropdown-item" href="/cn/recruit/walfare.php">福利制度</a>
								<a class="dropdown-item" href="/cn/recruit/recruitment.php">招聘信息</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="recruit-person">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>人才奖</h2>
				<p>
					我们相信能够清楚地认识到管理理念和目标，<br>能够同时展示个性和创造力，对新的时代有积极意义，<br>对所有事物充满热情----这就是UTOSYS的人才奖
				</p>
			</div>
			
			<ol>
				<li>
					<div>
						<div class="items">
							<img src="/cn/assets/images/recruit/img_recruit_list01.png" class="img-fluid" alt="Sensitive">
							<strong>S</strong>
						</div>
						<dl>
							<dt>Sensitive</dt>
							<dd>拥有未来志向<br class="d-none d-md-block"> 感的人才</dd>
						</dl>
					</div>
				</li>
				<li>
					<div>
						<div class="items">
							<img src="/cn/assets/images/recruit/img_recruit_list02.png" class="img-fluid" alt="Sensitive">
							<strong>M</strong>
						</div>
						<dl>
							<dt>Member</dt>
							<dd>重视组织和团队<br class="d-none d-md-block">合作的人才</dd>
						</dl>
					</div>
				</li>
				<li>
					<div>
						<div class="items">
							<img src="/cn/assets/images/recruit/img_recruit_list03.png" class="img-fluid" alt="Sensitive">
							<strong>A</strong>
						</div>
						<dl>
							<dt>Attactive </dt>
							<dd>在所有事情上积极主<br class="d-none d-md-block"> 动地工作的人才</dd>
						</dl>
					</div>
				</li>
				<li>
					<div>
						<div class="items">
							<img src="/cn/assets/images/recruit/img_recruit_list04.png" class="img-fluid" alt="Sensitive">
							<strong>R</strong>
						</div>
						<dl>
							<dt>Rule</dt>
							<dd>遵循原则和规则<br class="d-none d-md-block">的人才</dd>
						</dl>
					</div>
				</li>
				<li>
					<div>
						<div class="items">
							<img src="/cn/assets/images/recruit/img_recruit_list05.png" class="img-fluid" alt="Sensitive">
							<strong>T</strong>
						</div>
						<dl>
							<dt>Training </dt>
							<dd>不断研究和努力自我<br class="d-none d-md-block">发展的人才才</dd>
						</dl>
					</div>
				</li>
			</ol>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/docfoot.php'); ?>
</body>
</html>