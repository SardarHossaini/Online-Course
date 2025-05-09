<?php 
include __DIR__."/layouts/header.php"; 
require __DIR__."/../config/config.php";
?>

<?php 
if(!empty($_POST)){
    try{
        if(empty($_POST['email'])){
            throw new Exception("email is required");
        }
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            throw new Exception('email is invalid');
        }
        $stsm=$pdo->prepare("SELECT * FROM users WHERE email=? AND role=?");
        $stsm->execute([$_POST['email'],'admin']);
        $totalCount=$stsm->rowCount();
        if(!$totalCount){throw new Exception("email is not found");}
        $success_message='Check your email we send reset password link for you!';
    }catch(Exception $e){
        $error_message=$e->getMessage();
    }
}
?>
<section class="section">
    <div class="container container-login">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary border-box">
                    <div class="card-header card-header-auth">
                        <h4 class="text-center">Forget Password</h4>
                    </div>
                    
                    <div class="card-body card-body-auth">
                        <?php 
                        if(isset($error_message)){
                            echo $error_message;
                        }
                        if(isset($success_message)){
                            ?><script>alert("<?= $success_message; ?>")</script><?php 
                        }
                    ?>
                        <form method="POST" action="forget-password.php">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" value="" autofocus>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg w_100_p">
                                    Submit
                                </button>
                            </div>
                            <div class="form-group">
                                <div>
                                    <a href="login.php">
                                        back to login page
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__."/layouts/footer.php"; ?>
    