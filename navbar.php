 
			<div class="header header-light  " style="background-color:#E9F3F0">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                            <ul class="nav-menu">
                                <li>
                                    <br>       
                                        <img src="assets/img/1.png" width="50px" height="50px" style="border-radius:50%" /> 
                                </li>
                                <li>
                                    <br>
                                    <b><h2 class="display-6" style="font-size:5vh">Cyber Flow</h2></b>
                                </li>
                            </ul>
                            <div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu" >
							
								<li class="active whyus" id="home" onclick="active('home')" ><a href="#">Why Us</a></li>
                                <li class="" id="properties" onclick="active('properties')"><a href="#">Features</a></li>
								<li class="" id="about" onclick="active('about')"><a href="#">About Us</a></li>
								<li class="" id="contact" onclick="active('contact')"><a href="#">Contact Us</a></li>
								<li class="log" ><button class="btn btn-light prevAndnext explore login"  type="button" style="border:0;font-size:1rem">
								<h5 class="white"><i class="bi bi-box-arrow-right"></i> Login</h5></button></li>
                                
                            </ul>
								 
							<ul class="nav-menu nav-menu-social align-to-right">
								 
								 
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>

<script>
	function active(id)
	{
		$("#home").attr('class','');
		$("#properties").attr('class','');
		$("#about").attr('class','');
		$("#contact").attr('class','');
		$("#"+id).attr('class','active');
	}
</script>
		 