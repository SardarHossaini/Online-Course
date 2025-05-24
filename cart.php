<?php include "header.php"; ?>

<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Cart</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cart pt_70 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th class="w-200">Image</th>
                            <th>Course</th>
                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="uploads/course-1.jpg" alt="" class="w-150">
                            </td>
                            <td>Introduction to Mobile App Development</td>
                            <td>$39</td>
                            <td>
                                <a href="" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?')">X</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <img src="uploads/course-2.jpg" alt="" class="w-150">
                            </td>
                            <td>Mastering in Web Development</td>
                            <td>$49</td>
                            <td>
                                <a href="" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?')">X</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cart-summary">
                    <h2>Coupon Code</h2>
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" name="coupon" class="form-control" placeholder="Enter coupon code">
                            <button type="submit" class="btn btn-primary">Apply</button>
                        </div>
                    </form>

                    <h2 class="mt_30">Cart Total</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>Subtotal</td>
                                <td class="w-100">$39</td>
                            </tr>
                            <tr>
                                <td>
                                    Coupon: THENEWYEAR <br>(15% Discount)<br>
                                    <a href="" class="text-danger text-decoration-underline">Remove</a>
                                </td>
                                <td>$10</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>$29</td>
                            </tr>
                        </table>
                    </div>

                    <div class="checkout">
                        <a href="checkout.php" class="btn btn-primary">Checkout</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>