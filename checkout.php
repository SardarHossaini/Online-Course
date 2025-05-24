<?php include "header.php"; ?>

<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Checkout</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="checkout pt_70 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Billing Detail</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" value="Peter Smith" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" value="peter@gmail.com" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" value="123-334-2322" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" value="123 Main Street" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" value="United States" placeholder="Country">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" value="California" placeholder="State">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" value="Los Angeles" placeholder="City">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" value="90001" placeholder="Zip">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="3" placeholder="Note (Optional)"></textarea>
                </div>

                <h2 class="mt_30">Select Payment Method</h2>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="paypal" checked>
                        <label class="form-check-label" for="paypal">
                            PayPal
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="stripe">
                        <label class="form-check-label" for="stripe">
                            Stripe
                        </label>
                    </div>
                </div>


            </div>
            <div class="col-md-4">
                <h2>Order Detail</h2>
                <div class="order-detail">
                    <div class="course-item">
                        <div class="course-image">
                            <img src="uploads/course-1.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <h3><a href="course.php">Introduction to Mobile App Development</a></h3>
                            <p>Price: $39</p>
                        </div>
                    </div>
                    <div class="course-item">
                        <div class="course-image">
                            <img src="uploads/course-2.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <h3><a href="course.php">Mastering in Web Development</a></h3>
                            <p>Price: $49</p>
                        </div>
                    </div>
                </div>

                <h2 class="mt_30">Order Summary</h2>
                <div class="summary">
                    <p>Total: $49</p>
                </div>

                <div class="agree">
                    By completing your purchase you agree to these <a href="terms.php">Terms of Service</a>.
                </div>

                <div class="proceed">
                    <button type="submit" class="btn btn-primary">Proceed</button>
                    <a href="cart.php">Back to Cart</a>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>