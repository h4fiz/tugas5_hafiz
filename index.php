<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FOTO ARTIS INDONESIA</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<svg viewBox="0 0 1100 300">
			    <symbol id="s-text">
					<text text-anchor="middle" x="50%" y="80%">Artis Indonesia</text>
				</symbol>
				<g class = "g-ants">
					<use xlink:href="#s-text" class="text-copy"></use>
					<use xlink:href="#s-text" class="text-copy"></use>
					<use xlink:href="#s-text" class="text-copy"></use>
					<use xlink:href="#s-text" class="text-copy"></use>
					<use xlink:href="#s-text" class="text-copy"></use>
				</g>
			</svg>
		</div>
	</div>
	<section>
		<?php $data = array(
						array(
							'id' => 1,
							'name'=> 'Vino G Bastian',
							'ttl'=> '24 Maret 1982',
							'img'=> 'photo-1.jpg'
						),
						array(
							'id' => 2,
							'name'=> 'Roger Danuarta',
							'ttl'=> '20 Mei 1982',
							'img'=> 'photo-2.jpg'
						),
						array(
							'id' => 3,
							'name'=> 'Citra Kirana',
							'ttl'=> '23 April 1994',
							'img'=> 'photo-3.jpg'
						),
						array(
							'id' => 4,
							'name'=> 'Nabila Ratna Ayu Azalia',
							'ttl'=> '11 November 1999',
							'img'=> 'photo-4.jpg'
						),
						array(
							'id' => 5,
							'name'=> 'Rizky Febian',
							'ttl'=> '25 Februari 1998',
							'img'=> 'photo-5.jpg'
						),
						array(
							'id' => 6,
							'name'=> 'Glenn Alinskie',
							'ttl'=> '19 Oktober 1988',
							'img'=> 'photo-6.jpg'
						),
						array(
							'id' => 7,
							'name'=> 'Chelsea Olivia',
							'ttl'=> '29 Juli 1992',
							'img'=> 'photo-7.jpg'
						),
						array(
							'id' => 8,
							'name'=> 'Reza Rahadian',
							'ttl'=> '5 Maret 1987',
							'img'=> 'photo-8.jpg'
						),
						array(
							'id' => 9,
							'name'=> 'Ariel Tatum',
							'ttl'=> '8 November 1996',
							'img'=> 'photo-9.jpg'
						),
						array(
							'id' => 10,
							'name'=> 'Yuki Kato',
							'ttl'=> '2 April 1995',
							'img'=> 'photo-10.jpg'
						)
					); ?>
	  <div class="container gal-container">

	  	<?php 

	  		foreach ($data as $d) {
	  	 ?>
	    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
	      <div class="box">
	        <a href="#" data-toggle="modal" data-target="#<?php echo $d['id'];?>">
	          <img src="assets/img/<?php echo $d['img'];?>">
	        </a>
	        <div class="modal fade" id="<?php echo $d['id'];?>" tabindex="-1" role="dialog">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <div class="modal-body">
	                <img src="assets/img/<?php echo $d['img'];?>">
	              </div>
	                <div class="col-md-12 description">
	                  <h4><?php echo $d['name']?>, <?php echo $d['ttl']?></h4>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
		<?php }
		 ?>
	    
	  </div>
	</section>
	
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>