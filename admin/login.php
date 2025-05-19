<?php 
include __DIR__."/layouts/header.php"; 
require __DIR__."/../config/config.php";
?>

<?php 
if(isset($_SESSION['admin'])){
    header('location:dashboard.php');
}
if(!empty($_POST)){
    try{
        if(empty($_POST['email'])){
            throw new Exception("email is required");
        }
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            throw new Exception('email is invalid');
        }
        if(empty($_POST['password'])){
            throw new Exception('password is required');
        }
        $stsm=$pdo->prepare("SELECT * FROM admins WHERE email=? AND role=?");
        $stsm->execute([$_POST['email'],'admin']);
        $totalCount=$stsm->rowCount();
        if(!$totalCount){throw new Exception("email is not found");}
        else{
            $result=$stsm->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $row){
                $password=$row['password'];
                if(!password_verify($_POST['password'],$password)){throw new Exception("password does not match");}
            }
        }
        $_SESSION['admin']=$row;
        header('location:dashboard.php');
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
                        <h4 class="text-center">Admin Panel Login</h4>
                    </div>
                    
                    <div class="card-body card-body-auth">
                        
                    <?php if(isset($error_message)): ?>
                        <div class="alert alert-danger" id="alert" role="alert">
                            <?= $error_message; ?>
                        </div>
                    <?php endif; ?>
                        <form method="POST" action="login.php">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" value="" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password"  placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg w_100_p">
                                    Login
                                </button>
                            </div>
                            <div class="form-group">
                                <div>
                                    <a href="forget-password.php">
                                        Forget Password?
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
    