<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body class="sub">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>회사소개</h2>
        </div>
    </div>
    
    <!-- page-path -->
	<div class="page-path">
		<div class="container">
			<ol class="breadcrumb">
				<li></li>
				<li>
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							인사말
						</button>
						<div class="dropdown-menu" aria-labelledby="depth-list">
							<a class="dropdown-item" href="#">인사말</a>
							<a class="dropdown-item" href="#">경영이념</a>
							<a class="dropdown-item" href="#">연혁/사업실적</a>
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
	
	
	<!-- Content -->
    <main id="content" class="">
    	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script src="/assets/js/common.js"></script>
</body>
</html>