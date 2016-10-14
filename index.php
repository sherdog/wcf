<html>
<head>
	<title>WCF</title>
	<link rel="stylesheet" type="text/css" href="public/css/bulma.css">
	<link rel="stylesheet" type="text/css" href="public/css/default.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
</head>
<body>
<?php include('nav.php'); ?>
<div class="hero-body" style="background-color:#D0D0D0; height:250px; background-position: -300px 1300px; background-image:url(http://pictures.dealer.com/m/modernautosales/1456/d452d5176eed467617ff6aae54b024fdx.jpg);">

	<div class="columns ">
		<div class="column is-half is-fluid" id="hero-search-box" style="background-image:url(http://www.dominionbooks.org/rw_common/themes/dominion_books_theme/images/tint70.png);">
			<div class="container has-text-centered">
				<h2>Search the inventory</h2>
			</div>
			<form>

					<div class="columns row"> <!-- Start Row -->
						<div class="column is-half">
							 <div class="control">
							 	<div class="select is-fullwidth">
							      <select class="select is-medium">
							        <option>Any Make</option>
							      </select>
							    </div>
							 </div>
						</div>
						<div class="column is-half">
							 <div class="control">
							 	<div class="select is-fullwidth">
							      <select class="select is-medium">
							        <option>Any Model</option>
							      </select>
							    </div>
							 </div>
						</div>
					</div> <!-- End Row -->

					<div class="columns row"> <!-- Start Row -->
						<div class="column is-half">
							 <div class="control">
							 	<div class="select is-fullwidth">
							      <select class="select is-medium">
							        <option>Any Price</option>
							      </select>
							    </div>
							 </div>
						</div>
						<div class="column is-half">
							 <div class="control">
							 	<button class="button is-white is-outlined is-medium is-fullwidth">Submit</button>
							 </div>
						</div>
					</div> <!-- End Row -->

			</form>	
		</div>
	</div>
</div>
</body>
</html>