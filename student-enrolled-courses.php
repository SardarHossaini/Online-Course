<?php include "header.php"; ?>

<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Enrolled Courses</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Enrolled Courses</li>
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
                <div class="row course">
                    <div class="col-lg-4 col-md-6">
                        <div class="item pb_25">
                            <div class="photo">
                                <a href="course.php"><img src="uploads/course-1.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="course.php">WordPress Theme Development</a>
                                </h2>
                                <div class="category">
                                    <span class="badge bg-primary"><a href="">Web Development</a></span>
                                </div>
                                <div class="rating">
                                    <div class="left">
                                        <i class="fas fa-star"></i> 0.0 (0 Ratings)
                                    </div>
                                    <div class="student">
                                        <i class="fas fa-user"></i> 12 Persons
                                    </div>
                                </div>
                                <div class="ins">
                                    By: <a href="">Steve Robinson</a>
                                </div>
                                <div class="bottom">
                                    <div class="price">
                                        $49
                                    </div>
                                    <div class="cart-add">
                                        <a href="" class="btn btn-primary btn-sm">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item pb_25">
                            <div class="photo">
                                <a href="course.php"><img src="uploads/course-2.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="course.php">Laravel Framework Full Course</a>
                                </h2>
                                <div class="category">
                                    <span class="badge bg-primary"><a href="">Web Development</a></span>
                                </div>
                                <div class="rating">
                                    <div class="left">
                                        <i class="fas fa-star"></i> 0.0 (0 Ratings)
                                    </div>
                                    <div class="student">
                                        <i class="fas fa-user"></i> 12 Persons
                                    </div>
                                </div>
                                <div class="ins">
                                    By: <a href="">Steve Robinson</a>
                                </div>
                                <div class="bottom">
                                    <div class="price">
                                        $29
                                    </div>
                                    <div class="cart-add">
                                        <a href="" class="btn btn-primary btn-sm">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>