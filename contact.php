<?php
require_once "header.php";
require_once "navbar.php";
?>

    
       
                      
                         
 

    <div class="page-title" style="background-color:#4CAF70">
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
    </div>
    <section class="bg-light">
        <div class="container-fluid">
        <center>
            <div class="row d-flex justify-content-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="dashboard-wraper">
                            
                            <form method="post" enctype="multipart/form-data">
                                <!-- Basic Information -->
                                <div class="form-submit">
                                    <h2 style="color: #4CAF70;"> Let's Talk</h2>
                                    <div class="submit-section">
                    
                                        <div class="row d-flex justify-content-center">
                                            <center><br>
                                                <button type="button" class="btn btn-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                                                    </svg>
                                                    Whatsapp Us
                                                  </button>
                                            </center>
                                            <center>
                                                <br>

                                                <a href="mailto:cyber.flow911@gmail.com"><p class="" style="color:#4CAF70;font-size: x-large;"><i class="bi bi-envelope"></i> cyber.flow911@gmail.com</p></a>
                                            </center>
                    
                                            <div class="form-group col-md-9">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="mis" value="" required>
                                            </div>
                                            
                                            <div class="form-group col-md-9">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" name="work_heads" value="" required>
                                            </div>
                                            <div class="form-group col-md-9">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="work_heads" value="" required>
                                            </div>
                                            
                                            <div class="form-group col-lg-9 col-md-12">
                                                <button class="btn btn-success btn-block" type="submit" name="edit" width="200" >Submit</button>
                                                <!-- Button trigger modal -->
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
            </div>
        </center>
        </div>
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
