<?php 
include __DIR__."/layouts/header.php";
include __DIR__."/layouts/nav.php";
include __DIR__."/layouts/sidebar.php";
require __DIR__."/../config/config.php";
?>
<?php
if(!empty($_POST)){
    try{
        if(empty($_POST['name'])){
            throw new Exception('full name is required');
        }
        if(empty($_POST['email'])){
            throw new Exception('email is required');
        }
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            throw new Exception('email is not valid');
        }
        
        
        if(!empty($_POST['new_password']) && !empty($_POST['retype_password'])){
            if($_POST['retype_password']!=$_POST['new_password']){
                throw new Exception('retype password is not match to password');
            }else{
                $password=password_hash($_POST['new_password'],PASSWORD_DEFAULT);
                $stsm=$pdo->prepare('UPDATE users SET password=? WHERE id=?');
                $stsm->execute([$password,$_SESSION['admin']['id']]);
            }
        }
        $stsm=$pdo->prepare('UPDATE users SET full_name=?, email=? WHERE id=?');
        $stsm->execute([$_POST['name'],$_POST['email'],$_SESSION['admin']['id']]);
        $success_messsage="Profile data is updated successfuly";
        $_SESSION['admin']['full_name']=$_POST['name'];
        $_SESSION['admin']['email']=$_POST['email'];
        
    }catch(Exception $e){
        $error_message=$e->getMessage();
    }
}

?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Profile</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if(isset($success_messsage)): ?>
                                <p style="color: green;"><?= $success_messsage; ?></p>
                            <?php endif; ?>
                            <form action="profile.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-3">
                                        <?php if(empty($_SESSION['admin']['photo'])): ?>
                                            <img src="../dist-admin/images/default.png" alt="" class="profile-photo w_100_p">
                                        <?php else: ?>
                                            <img src="../dist-admin/images/<?= $_SESSION['admin']['photo'] ?>" alt="" class="profile-photo w_100_p">
                                        <?php endif; ?>
                                        <input type="file" class="mt_10" name="photo">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="mb-4">
                                            <label class="form-label">Name *</label>
                                            <input type="text" class="form-control" name="name" value="<?= $_SESSION['admin']['full_name'] ?>">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Email *</label>
                                            <input type="text" class="form-control" name="email" value="<?= $_SESSION['admin']['email'] ?>">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="new_password">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Retype Password</label>
                                            <input type="password" class="form-control" name="retype_password">
                                        </div>
                                        <?php if(isset($error_message)): ?>
                                <p style="color:red"><?= $error_message ?></p>
                            <?php endif; ?>
                                        <div class="mb-4">
                                            <label class="form-label"></label>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include __DIR__."/layouts/footer.php"; ?>