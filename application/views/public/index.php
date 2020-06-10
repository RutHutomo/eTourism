
<!DOCTYPE html>
<html lang="en">
<head>
<title>E-Tourism Pengaduan</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Pengaduan Pariwisata">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=base_url('templates/public/styles/bootstrap4/bootstrap.min.css')?>">
<link href="<?=base_url('templates/public/plugins/font-awesome-4.7.0/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url('templates/public/plugins/OwlCarousel2-2.2.1/owl.carousel.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('templates/public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('templates/public/plugins/OwlCarousel2-2.2.1/animate.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('templates/public/styles/main_styles.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('templates/public/styles/responsive.css')?>">


    <!-- Sweetalert Css -->
    <link href="<?=base_url('templates/stakeholder/plugins/sweetalert/sweetalert.css')?>" rel="stylesheet" />
</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	<?php
			$id = $this->uri->segment(3);
			if ($id) 
			{
				$data = $this->m_pariwisata->get_where($id)->result();
				if (count($data) > 0) 
				{
					foreach ($data as $row) 
					{
						if ($row->gambar2 != "") 
						{
							$Slider = $row->gambar2;
							$title = $row->nama_pariwisata;
						}
						else
						{
							$Slider = 'home_slider.jpg';
							$title = '';
						}
					}
				}
			}else
			{
				$Slider = 'home_slider.jpg';
				$title = '';
			}
		?>

	<header class="header">

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="<?=base_url('templates/public/images/logo.png')?>" alt="">complaint <small><?=$title;?></small></a><div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								
							</ul>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="offers.html">offers</a></li>
				<li class="menu_item"><a href="blog.html">news</a></li>
				<li class="menu_item"><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(<?=base_url('templates/public/images/'.$Slider.'')?>)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<?php $this->load->view($content);?>
						</div>
					</div>
				</div>


			</div>
			
			<!-- Home Slider Nav - Prev -->
			<?php if($nav!="false"){?>
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>
			<?php }?>

			
		</div>

	</div>

</div>

<script src="<?=base_url('templates/public/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?=base_url('templates/public/styles/bootstrap4/popper.js')?>"></script>
<script src="<?=base_url('templates/public/styles/bootstrap4/bootstrap.min.js')?>"></script>
<script src="<?=base_url('templates/public/plugins/OwlCarousel2-2.2.1/owl.carousel.js')?>"></script>
<script src="<?=base_url('templates/public/plugins/easing/easing.js')?>"></script>
<script src="<?=base_url('templates/public/js/custom.js')?>"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="<?=base_url('templates/stakeholder/plugins/sweetalert/sweetalert.min.js')?>"></script>

    <script type="text/javascript">
    	$(document).on('click','#form_submit_button', function()
    	{
    		var id = $('#id').val();
    		var fullname = $('#contact_form_name').val();
    		var data = $('#form_pengaduan').serialize();
    		console.log(fullname);
    		$.ajax({
    			url: "http://localhost/e-tourism/simpan_complaint",
    			data:data,
    			type:'post',
    			success: function(res)
    			{
    				if (res == "Berhasil") 
    				{
    					swal("Your complaint was sended!");
    					//location.reload();
    				}
    			}
    		})
    	})
    </script>
</body>

</html>