<?php include "header.php"; ?>

<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Invoice: ORD-123</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Invoice: ORD-123</li>
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
                <div class="invoice-container" id="print_invoice">
                    <div class="invoice-top">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-border-0">
                                        <tbody>
                                            <tr>
                                                <td class="w-50">
                                                    <img src="uploads/logo.png" alt="" class="h-60">
                                                </td>
                                                <td class="w-50">
                                                    <div class="invoice-top-right">
                                                        <h4>Invoice</h4>
                                                        <h5>Order No: ORD-123</h5>
                                                        <h5>Date: 2024-07-03</h5>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-middle">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-border-0">
                                        <tbody>
                                            <tr>
                                                <td class="w-50">
                                                    <div class="invoice-middle-left">
                                                        <h4>Invoice To:</h4>
                                                        <p class="mb_0">Smith Brent</p>
                                                        <p class="mb_0">smith@gmail.com</p>
                                                        <p class="mb_0">773-532-2540</p>
                                                        <p class="mb_0">4049 Cherry Camp Road</p>
                                                        <p class="mb_0">Chicago, IL 60605</p>
                                                    </div>
                                                </td>
                                                <td class="w-50">
                                                    <div class="invoice-middle-right">
                                                        <h4>Invoice From:</h4>
                                                        <p class="mb_0">EduZora</p>
                                                        <p class="mb_0 color_6d6d6d">support@website.com</p>
                                                        <p class="mb_0">215-899-5780</p>
                                                        <p class="mb_0">3145 Glen Falls Road</p>
                                                        <p class="mb_0">Bensalem, PA 19020</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-item">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered invoice-item-table">
                                        <tbody>
                                            <tr>
                                                <th>SL</th>
                                                <th>Course</th>
                                                <th>Unit Price</th>
                                                <th>Quantity</th>
                                                <th>Total Price</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>WordPress Theme Development</td>
                                                <td>$49</td>
                                                <td>1</td>
                                                <td>$49</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-bottom">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-border-0">
                                        <tbody>
                                            <td class="w-70 invoice-bottom-payment">
                                                <h4>Payment Method</h4>
                                                <p>Paypal</p>
                                            </td>
                                            <td class="w-30 tar invoice-bottom-total-box">
                                                <p class="mb_0">Subtotal: <span>$49</span></p>
                                                <p class="mb_0">Discount: <span>$0</span></p>
                                                <p class="mb_0">Total: <span>$49</span></p>
                                            </td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="print-button mt_25">
                    <a onclick="printInvoice()" href="javascript:;" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
                </div>
                <script>
                    function printInvoice() {
                        let body = document.body.innerHTML;
                        let data = document.getElementById('print_invoice').innerHTML;
                        document.body.innerHTML = data;
                        window.print();
                        document.body.innerHTML = body;
                    }
                </script>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>