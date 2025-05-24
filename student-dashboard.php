<?php include "header.php"; ?>

<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Dashboard</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content user-panel pt_70 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item active">
                            <a href="student-dashboard.php">Dashboard</a>
                        </li>
                        <li class="list-group-item">
                            <a href="student-enrolled-courses.php">Enrolled Courses</a>
                        </li>
                        <li class="list-group-item">
                            <a href="student-order.php">Orders</a>
                        </li>
                        <li class="list-group-item">
                            <a href="student-wishlist.php">Wishlist</a>
                        </li>
                        <li class="list-group-item">
                            <a href="student-message.php">Message</a>
                        </li>
                        <li class="list-group-item">
                            <a href="student-review.php">Reviews</a>
                        </li>
                        <li class="list-group-item">
                            <a href="student-profile.php">Edit Profile</a>
                        </li>
                        <li class="list-group-item">
                            <a href="login.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <h3 class="mb_20">Hello, Arefin</h3>
                <div class="row box-items">
                    <div class="col-md-4">
                        <div class="box1">
                            <h4>3</h4>
                            <p>Completed Orders</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box2">
                            <h4>2</h4>
                            <p>Pending Orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>