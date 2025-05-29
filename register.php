<?php 
include __DIR__."/header.php";
include __DIR__."/config/config.php";
?>

<?php

if(!empty($_POST)){
    try{
        if(empty($_POST['name'])){
            throw new Exception("name is required");
        }
        if(empty($_POST['email'])){
            throw new Exception("email is required");
        }
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            throw new Exception('email is invalid');
        }
        if(empty($_POST['password']) || empty($_POST['confirm_password'])){
            throw new Exception('password is required');
        }
        if($_POST['password'] != $_POST['confirm_password']){
            throw new Exception('password does not match');
        }
        $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $token=time();
        $stsm=$pdo->prepare('INSERT INTO students(name,email,password,token,status) VALUE (?,?,?,?,?)');
        $stsm->execute([$_POST['name'],$_POST['email'],$password,$token],0);
    }catch(Exception $e){
        $error_message=$e->getMessage();
        $_SESSION['error_message']=$error_message;
        // header('location:login.php');
        exit;
    }
}

?>

<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Create Account</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Create Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content pt_70 pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">

                <ul class="nav nav-pills mb-3 nav-login-register" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="student-tab" data-bs-toggle="pill" data-bs-target="#student" type="button" role="tab" aria-controls="student" aria-selected="true">Student</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="instructor-tab" data-bs-toggle="pill" data-bs-target="#instructor" type="button" role="tab" aria-controls="instructor" aria-selected="false">Instructor</button>
                    </li>
                </ul>
                <div class="tab-content tab-login-register" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab" tabindex="0">
                        <!-- form content -->
                        <form action="register.php" method="post">
                            <div class="login-form">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name *</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password *</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label">Confirm Password *</label>
                                    <input type="password" class="form-control" name="confirm_password">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary bg-website" name="form-student">
                                        Create Account
                                    </button>
                                </div>
                                <div class="mb-3">
                                    <a href="login.php" class="primary-color">Existing User? Login Now</a>
                                </div>
                            </div>
                        </form>
                        <!-- // form content -->
                    </div>
                    <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab" tabindex="0">
                        <!-- form content -->
                        <div class="login-form">
                            <div class="mb-3">
                                <label for="" class="form-label">Name *</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Designation *</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email Address *</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password *</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Confirm Password *</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary bg-website">
                                    Create Account
                                </button>
                            </div>
                            <div class="mb-3">
                                <a href="login.php" class="primary-color">Existing User? Login Now</a>
                            </div>
                        </div>
                        <!-- // form content -->
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>