<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/dochead.php'); ?>
<link rel="stylesheet" href="/en/assets/css/sub.css">
<link rel="stylesheet" href="/en/assets/css/introduce.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>About Us</h2>
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
								<a class="dropdown-item" href="/en/introduce/greetings.php">CEO Message</a>
								<a class="dropdown-item" href="/en/introduce/ideology.php">Philosophy &amp; Vision</a>
								<a class="dropdown-item" href="/en/introduce/history.php">History &amp; Business result</a>
								<a class="dropdown-item" href="/en/introduce/organization.php">Organization</a>
								<a class="dropdown-item active" href="/en/introduce/ci.php">CI</a>
								<a class="dropdown-item" href="/en/introduce/certification.php">Certification status</a>
								<a class="dropdown-item" href="/en/introduce/location.php">Maps</a>
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
							The combined symbol of the Binedrune alphabet is meant to <strong>realize one’s dream.</strong><br class="d-none d-lg-block">
							It is meant to pursue an ideal company to realize the dreams of customers, members, shareholders and society.<br class="d-none d-lg-block">
							It contains the devotion and challenge spirit of UTOSYS.
						</p>
					</div>
				</div>
				<div class="section-content">
					<div class="bg-square">
						<img src="/en/assets/images/introduce/img_ci_logo.png" alt="로고">
					</div>
				</div>
			</div>
		</section>
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/docfoot.php'); ?>
</body>
</html>