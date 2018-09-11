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
								Employee Benefits Package
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/en/recruit/recruit_person.php">The Right People for UTOSYS</a>
								<a class="dropdown-item active" href="/en/recruit/walfare.php">Employee Benefits Package</a>
								<a class="dropdown-item" href="/en/recruit/recruitment.php">Employment Information</a> 
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
				<h2>Employee Benefits Package</h2>
			</div>
			<article class="health">
				<div class="info">
					<h5>Support for a healthy life</h5>
					<ol>
						<li>
							<dl>
								<dt>
									<span>1</span>Vacation
								</dt>
								<dd>
									Support the Work&amp;Life balance of the employees through public holidays, paid vacation, and re-fresh vacation
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span>2</span>Health examinations of employees </dt>
								<dd>
									Keep health of employees through Periodic health examinations .
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span>3</span>Club activities</dt>
								<dd>
									Support various club activities such as bowling, table tennis, and soccer.
								</dd>
							</dl>
						</li>
					</ol>
				</div>
			</article>
			
			<article class="happy">
				<div class="info">
					<h5>Support for a happy life</h5>
					<ol>
						<li>
							<span>1</span>
							<p>birthday and wedding anniversary gifts</p>
						</li>
						<li>
							<span>2</span>
							<p>gifts and fare for returning home on national holidays</p>
						</li>
						<li>
							<span>3</span>
							<p>restaurant in company </p>
						</li>
					</ol>
				</div>
			</article>
			
			<article class="stable">
				<div class="info">
					<h5>Support for a stable life</h5>
					<ol>
						<li>
							<dl>
								<dt>
									<span>1</span>family affairs
								</dt>
								<dd>
									The employee is given a congratulatory money,<br>
									a condolence money, and paid vacation according to the office regulation.
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span>2</span> Dormitory</dt>
								<dd>
									For employees living in other area
								</dd>
							</dl>
						</li>
						<li>
							<span>3</span>
							<p> award to a long-term employed person </p>
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