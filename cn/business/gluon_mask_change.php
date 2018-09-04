<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/dochead.php'); ?>
<link rel="stylesheet" href="/cn/assets/css/sub.css">
<link rel="stylesheet" href="/cn/assets/css/business.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>사업영역</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								FPD Transfer System
							</button>
							 <div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item active" href="#">FPD Transfer System</a>
								<a class="dropdown-item" href="#">FPD Inspection System</a>
							</div>
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="panel-reversal fpd-system">
		<div class="container">
			<div class="page-title">
				<h2>FPD Transfer System (물류설비)</h2>
			</div> 
			<nav class="tab-list">
				<ul>
					<li>
						<a href="#" >Loader/Unloader</a> 
					</li>
					<li><a href="#">Panel Reversal<br class="d-sm-block d-md-none">System</a></li>
					<li class="active"><a href="#">Gluon Mask Change<br class="d-sm-block d-md-none"> System</a></li>
					<li><a href="#">Mask Loader</a></li>
					<li><a href="#">Packing &amp; Unpacking<br class="d-sm-block d-md-none"> System</a></li>
				</ul>
			</nav>
			<div class="row">
				<div class="col-12 col-xl-6">
					<figure>
						<img src="/cn/assets/images/business/img_loader_sm.jpg" class="img-fluid d-md-none" alt="">
						<img src="/cn/assets/images/business/img_loader_md.jpg" class="img-fluid d-sm-none d-md-block d-xl-none" alt="">
						<img src="/cn/assets/images/business/img_loader_xl.jpg" class="img-fluid d-sm-none d-md-none d-xl-block"alt="">
					</figure>
				</div> 
				<div class="col-12 col-xl-6">
					<div class="table-wrap">
						<table class="table">
							<thead>
								<tr>
									<th>Items</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="items">Function</td>
									<td class="details">
										<ul>
											<li>LCD Panel Reversal System </li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="items">Application</td>
									<td class="details">
										<ul>
											<li>In-Line Type &amp;  Stand Alone Type</li>
											<li>Multi Stairs (2 Stairs / 3 Stairs)</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="items">Feature</td>
									<td class="details">
										<ul>
											<li>Know-How through a variety of experiences </li>
											<li>User-friendliness, maintainability reflect</li>
											<li>PLC S/W</li>
											<li>Align Function Included</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="items">Basic Specification</td>
									<td class="details">
										<ul>
											<li>Application Size :  Panel 32” ~ 65”</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/docfoot.php'); ?>
</body>
</html>