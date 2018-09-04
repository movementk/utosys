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
								CI
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/cn/introduce/greetings.php">CEO问候</a>
								<a class="dropdown-item" href="/cn/introduce/ideology.php">经营理念</a>
								<a class="dropdown-item" href="/cn/introduce/history.php">历史/业务绩效</a>
								<a class="dropdown-item" href="/cn/introduce/organization.php">组织图</a>
								<a class="dropdown-item active" href="/cn/introduce/ci.php">CI</a>
								<a class="dropdown-item" href="/cn/introduce/certification.php">认证现状</a>
								<a class="dropdown-item" href="/cn/introduce/location.php">路线</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="ci">
		<section class="ci-info">
			<div class="container">
				<div class="section-header">
					<div class="page-title">
						<h2>CI</h2>
						<p>
							结合古代欧洲人魔法字母的Bindrune 文字，字母符号意思是<strong>"让梦想成真"</strong><br class="d-none d-lg-block">
							我们正在接收UTOSYS的奉献和挑战精神，追求实现顾客/员工/股东/社会梦想的理想公司。
						</p>
					</div>
				</div>
				<div class="section-content">
					<div class="bg-square">
						<img src="/cn/assets/images/introduce/img_ci_logo.png" alt="로고">
					</div>
				</div>
			</div>
		</section>
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/docfoot.php'); ?>
</body>
</html>