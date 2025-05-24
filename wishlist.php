<?php include "header.php"; ?>

<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Wishlist</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wishlist pt_70 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
                            <td><a href="course.html" class="course_name">WordPress Theme Development</a></td>
                            <td>$29</td>
                            <td>
                                <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?')">X</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <img src="uploads/course-2.jpg" alt="" class="w-150">
                            </td>
                            <td><a href="course.html" class="course_name">Laravel From Basic To Advanced</a></td>
                            <td>$39</td>
                            <td>
                                <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?')">X</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>