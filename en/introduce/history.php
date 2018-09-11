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
								History &amp; Business result
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/en/introduce/greetings.php">CEO Message</a>
								<a class="dropdown-item" href="/en/introduce/ideology.php">Philosophy &amp; Vision</a>
								<a class="dropdown-item active" href="/en/introduce/history.php">History &amp; Business result</a>
								<a class="dropdown-item" href="/en/introduce/organization.php">Organization</a>
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
    <main id="content" class="history">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>History &amp; Business result</h2>
			</div>
			<ol class="history-list">
			    <li>
			        <h3 class="year year-15">2015</h3>
			        <ol>
			            <li>
			                <dl>
			                    <dt>2015. 12</dt>
			                    <dd>R&amp;D department established</dd>
			                </dl>
			            </li>
			            <li>
			                <dl>
			                    <dt>2015. 04</dt>
			                    <dd>Transferred company to New Factory</dd>
			                </dl>
			            </li>
			            <li>
			                <dl>
			                    <dt>2015. 03</dt>
			                    <dd>Company name changed as “UTOSYS”</dd>
			                </dl>
			            </li>
			        </ol>
			    </li>
			    <li>
			        <h3 class="year year-12">2012</h3>
			        <ol>
			            <li>
			                <dl>
			                    <dt>2012. 03</dt>
			                    <dd>Registeration of LG Display as primary partner  </dd>
			                </dl>
			            </li>
			        </ol>
			    </li>
			    <li>
			        <h3 class="year year-11">2011</h3>
			        <ol>
			            <li>
			                <dl>
			                    <dt>2011. 08</dt>
			                    <dd>Venture Company certificate obtained <br>ISO 9001 / 14001 certificate obtained</dd>
			                </dl>
			            </li>
			        </ol>
			    </li>
			    <li>
			        <h3 class="year year-09">2009</h3>
			        <ol>
			            <li>
			                <dl>
			                    <dt>2009. 06</dt>
			                    <dd>Company name changed as “DSNT” </dd>
			                </dl>
			            </li>
			        </ol>
			    </li>
			    <li>
			        <h3 class="year year-07">2007</h3>
			        <ol>
			            <li>
			                <dl>
			                    <dt>200. 01</dt>
			                    <dd>Company Foundation as “Das Nano Tech” </dd>
			                </dl>
			            </li>
			        </ol>
			    </li>
			</ol>
		</div>
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/docfoot.php'); ?>
</body>
</html>