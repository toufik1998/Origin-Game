<?php 
    // include("../php-scripts/scripts.php");
    include("../components/header.php");
?>

<header>

        <?php 
            include("../components/navbar.php");
        ?>

        <div class="container-fluid mt-lg-4 header-content" >
            <div class="row">
                <div class="col-md-6">
                    <div class="header-img">
                        <img src="../assets/images/undraw_virtual_reality_re_yg8i.svg" alt="header image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="registration-form">
                        <form action="../php-scripts/scripts.php" method="POST" id="demo-form" data-parsley-validate="" data-parsley-trigger="keyup" enctype="multipart/form-data">
                            <img src="assets/images/youcode-logo-transparent.png" class="mb-3" alt="">
                            <div class="form-group">
                                <input type="text" name="first-name"  class="form-control item" id="first-name" placeholder="First Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="last-name"  class="form-control item" id="last-name" placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" data-parsley-type="email" class="form-control item" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" data-parsley-pattern="/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/" class="form-control item" id="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <p>Choice an image:</p>
                                <input type="file" name="uploadfile" class="form-control" id="admin-image" />
                            </div>
                            
                            <div class="form-group">
                                <button id="disable-btn" type="submit"   name="save" class="btn btn-block create-account">Create Account</button>
                                <button type="submit" name="already" class="btn btn-block create-account already-account ">                                
                                   <a href="../View/sign-in.php"> Sign In </a>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</header>

<?php 
    include("../components/footer.php");
?>