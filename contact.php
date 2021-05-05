<?php
require_once "header.php";
require_once "navbar.php";
?>

    
       
                      
                         
 

    <!-- <div class="page-title" style="background-color:#4CAF8A">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <center>
                        <h2 class="ipt-title d-flex justify-content-center" style="font-size: 20px;font-family: 'Poppins', sans-serif;font-weight: 400">Contact Us</h2>
                        <span class="ipn-subtitle" style="color:white;font-size: 20px;font-family: 'Poppins', sans-serif;font-weight: 200">We’re here to assist and answer any queries you might</span>
                        <br>
                        <span class="ipn-subtitle" style="color: white;font-size: 20px;font-family: 'Poppins', sans-serif;font-weight: 200">have with regards !</span>
                    </center>
                </div>
            </div>
        </div>
    </div> -->
    <section class="dashboard-wraper" >
        
        <section>

	<div class="container">

		<!-- row Start -->
		<div class="row">
            <div class="col-lg-5 col-md-5">
				<div class="contact-info" >
                    <img src="assets/img/bg3.jpg" class="img-fluid" style="margin-top:20px"  alt="">
				</div>
			</div>
            <div class="col-lg-6 col-md-6" style="margin-right:20px" id="contactCol">
				<form method="post">
					<div class="row">
                        
					<h2 style="margin-bottom:10px">Let's Talk!</h2>
                    <h4 class="cn-info-title" id="talk" style="margin-bottom:20px;font-size:2.5vh;color:#888888">
                        To request a quote or want to meet up for coffee,contact us directly or fill out the form and we will get back to you promptly!
                    </h4>
                   

					

				
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label style="font-size:2.5;color:#4CAF70">Name</label>
								<input type="text" name="name" class="form-control simple">
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label style="font-size:2.5;color:#4CAF70">Email</label>
								<input type="email" name="email" class="form-control simple">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label style="font-size:2.5;color:#4CAF70">Subject</label>
						<input type="text" name="subject" class="form-control simple">
					</div>

					<div class="form-group">
						<label style="font-size:2.5;color:#4CAF70">Message</label>
						<textarea name="message" class="form-control simple"></textarea>
					</div>

					<div class="form-group">
						<button class="btn search-btn success" id="submitContact" type="button" style="background-color:#4CAF70;font-size:1.20rem;">Submit</button>
					</div>
			    </form>
            </div>
			

			

		</div>
		<!-- /row -->
                    <div class="row" style="margin-left:30px" id="icons">
                        <div class="col-lg-4">
                            <div class="cn-info-detail">
                                <div class="cn-info-icon" >
                                    <i class="ti-home" style="color:#4CAF70"></i>
                                </div>
                                <div class="cn-info-content">
                                    <h4 class="cn-info-title" style="color:#4CAF70">Reach Us</h4>
                                    Collins Street West,<br>Victoria 8007,Mumbai,<br>249407				</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cn-info-detail">
                                <div class="cn-info-icon" style="margin-right:5px">
                                    <i class="ti-email" style="color:#4CAF70"></i>
                                </div>
                                <div class="cn-info-content">
                                    <h4 class="cn-info-title" style="color:#4CAF70">Drop A Mail</h4>
                                    <a href="mailto:cyber.flow911@gmail.com" style="color:black" id="email">cyber.flow911@gmail.com</a>					</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cn-info-detail">
                                <div class="cn-info-icon">
                                    <i class="ti-mobile" style="color:#4CAF70"></i>
                                </div>
                                <div class="cn-info-content">
                                    <h4 class="cn-info-title" style="color:#4CAF70">Call Us</h4>
                                    9988997722						</div>
                            </div>
                        </div>
                    </div>
                   
	</div>

</section>
    </section>

    <?php
require_once "footer.php";
require_once "js_links.php";

    ?>
    </body>
    <script>
        $(".navbars").removeClass("active");
        $("#contact").addClass("active");
    </script>
</html>

