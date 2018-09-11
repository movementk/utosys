<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/dochead.php'); ?>
<link rel="stylesheet" href="/en/assets/css/sub.css">
<link rel="stylesheet" href="/en/assets/css/recruit.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>Recruiting</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Employment Information
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/en/recruit/recruit_person.php">The Right People for UTOSYS</a>
								<a class="dropdown-item" href="/en/recruit/walfare.php">Employee Benefits Package</a>
								<a class="dropdown-item active" href="/en/recruit/recruitment.php">Employment Information</a> 
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="recruitment">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>Recruitment process </h2>
			</div>
			<article class="process">
			    <div class="article-header">
			        <ol>
			            <li>
			                <figure>
			                    <img src="/en/assets/images/recruit/img_recruitment01.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 01</small>
			                        <p>Accepting an application</p>
			                    </figcaption>
			                </figure>
			            </li>
			            <li>
			                <figure>
			                    <img src="/en/assets/images/recruit/img_recruitment02.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 02</small>
			                        <p>Examing documents</p>
			                    </figcaption>
			                </figure>
			            </li>
			            <li>
			                <figure>
		                    	<img src="/en/assets/images/recruit/img_recruitment04.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 04</small>
			                        <p>First interview <br class="d-md-none">(team leader)</p>
			                    </figcaption>
			                </figure>
			            </li>
			            <li>
			                <figure>
			                    <img src="/en/assets/images/recruit/img_recruitment03.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 03</small>
			                        <p>Second interview <br class="d-md-none">(management)</p>
			                    </figcaption>
			                </figure>
			            </li>
			            <li>
			                <figure>
			                    <img src="/en/assets/images/recruit/img_recruitment05.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 05</small>
			                        <p>Final acceptance </p>
			                    </figcaption>
			                </figure>
			            </li>
			        </ol>
			    </div>
			    <div class="article-content">
                    <ol>
                        <li>
                            <div class="row">
                                <div class="col-12">
                                    <strong>STEP 01</strong>
                                    <h4>Accepting an application</h4>
                                </div>
                            </div>                            
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-12">
                                    <strong>STEP 02</strong>
                                    <h4>Examing documents</h4>
                                </div>
                            </div>                            
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-12">
                                    <strong>STEP 03</strong>
                                    <h4>Interview (team leader/management)</h4>
                                </div>
                            </div>                            
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-12">
                                    <strong>STEP 04</strong>
                                    <h4>Final acceptance </h4>
                                </div>
                            </div>                            
                        </li>
                    </ol>
			    </div>
			</article>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/docfoot.php'); ?>
</body>
</html>