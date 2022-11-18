<?php
    include('../assets/database/database.php');
    
    // include("../php-scripts/scripts.php");
    include("../components/header.php");
    include("../components/navbar.php");

?>

<header class="mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="header-img">
                            <img src="../assets/images/undraw_virtual_reality_re_yg8i.svg" alt="header image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="registration-form">
                            <form action="../php-scripts/scripts.php" method="POST" id="demo-form" data-parsley-validate data-parsley-trigger="keyup">
                                <img src="../assets/images/youcode-logo-transparent.png" alt="">

                                <div class="form-group mt-3">
                                    <input type="text" name="email" data-parsley-type="email" class="form-control item" id="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" data-parsley-pattern="/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/"  class="form-control item" id="password" placeholder="Password" required>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" name="login" class="btn btn-block create-account">Sign In</button>
                                    <button type="submit" name="new-account" class="btn btn-block create-account already-account">
                                        <a href="../View/sign-up.php">Sign Up</a>
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