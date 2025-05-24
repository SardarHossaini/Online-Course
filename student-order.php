<?php include "header.php"; ?>

<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Orders</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Orders</li>
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
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Course</th>
                                <th>Paid Amount</th>
                                <th>Payment Method</th>
                                <th>Payment Date</th>
                                <th>Status</th>
                                <th class="w-100">
                                    Action
                                </th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="course.php" class="text-decoration-underline">WordPress Theme Development</a>
                                </td>
                                <td>$39</td>
                                <td>Paypal</td>
                                <td>2024-8-25</td>
                                <td>
                                    <div class="badge bg-danger">Pending</div>
                                </td>
                                <td>
                                    <a href="" class="btn btn-secondary btn-sm mb-1 w-100-p" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
                                    <a href="student-order-invoice.php" class="btn btn-secondary btn-sm w-100-p">Invoice</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <a href="course.php" class="text-decoration-underline">Laravel Full Course</a>
                                </td>
                                <td>$49</td>
                                <td>Stripe</td>
                                <td>2024-8-25</td>
                                <td>
                                    <div class="badge bg-success">Success</div>
                                </td>
                                <td>
                                    <a href="" class="btn btn-secondary btn-sm mb-1 w-100-p">Detail</a>
                                    <a href="student-order-invoice.php" class="btn btn-secondary btn-sm w-100-p">Invoice</a>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3 row modal-seperator">
                                                <div class="col-md-5">
                                                    <b>Order No:</b>
                                                </div>
                                                <div class="col-md-7">
                                                    ORD-123443
                                                </div>
                                            </div>
                                            <div class="mb-3 row modal-seperator">
                                                <div class="col-md-5">
                                                    <b>Course Name:</b>
                                                </div>
                                                <div class="col-md-7">
                                                    WordPress Theme Development
                                                </div>
                                            </div>
                                            <div class="mb-3 row modal-seperator">
                                                <div class="col-md-5">
                                                    <b>Price:</b>
                                                </div>
                                                <div class="col-md-7">
                                                    $49
                                                </div>
                                            </div>
                                            <div class="mb-3 row modal-seperator">
                                                <div class="col-md-5">
                                                    <b>Payment Method:</b>
                                                </div>
                                                <div class="col-md-7">
                                                    PayPal
                                                </div>
                                            </div>
                                            <div class="mb-3 row modal-seperator">
                                                <div class="col-md-5">
                                                    <b>Payment Status:</b>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="badge bg-success">Completed</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // Modal -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>