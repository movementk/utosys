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
								Organization
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/en/introduce/greetings.php">CEO Message</a>
								<a class="dropdown-item" href="/en/introduce/ideology.php">Philosophy &amp; Vision</a>
								<a class="dropdown-item" href="/en/introduce/history.php">History &amp; Business result</a>
								<a class="dropdown-item active" href="/en/introduce/organization.php">Organization</a>
								<a class="dropdown-item" href="/en/introduce/ci.php">CI</a>
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
    <main id="content" class="organization">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>Organization</h2>
			</div>
			<figure>
				<img src="/en/assets/images/introduce/img_organization_sm.png" class="img-fluid d-sm-block d-md-none" alt="조직도">
				<img src="/en/assets/images/introduce/img_organization_md.png" class="img-fluid d-none d-md-block d-xl-none" alt="조직도">
				<img src="/en/assets/images/introduce/img_organization_xl.png" class="img-fluid d-none d-xl-block" alt="조직도">
			</figure>
		</div>
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/docfoot.php'); ?>
</body>
</html>