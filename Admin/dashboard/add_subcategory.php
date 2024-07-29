<?php
include './include/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <form action="">
                
                <div class="col-md-12 mb-3">
                <p class="bg-primary p-2">Add Sub-Category</p>
                    <div class="form-group">
                        <label for="category">Category Name</label>
                        <input type="text" class="form-control" id="category" placeholder="" value="" required="">
                    </div>
                    <div class="form-group">
                        <label for="sub-category">Sub-Category Name</label>
                        <input type="text" class="form-control" id="sub-category" placeholder="" value="" required="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload Image</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                    <textarea name="editor1" cl>Type here and show console to see editor's height</textarea>
                </div>
            
                <input type="submit" value="Add Sub-Category" class="btn btn-outline-primary">
            </form>
        </div>
        <div class="col-md-8">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered table-hover dt-responsive">

                            <thead>
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Action</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Date of Add</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sweden</td>
                                    <td>Swedish, small Sami- and Finnish-speaking minorities</td>
                                    <td>9,631,261</td>
                                    <td>41.1</td>
                                    <td>449,954</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<?php
include './include/footer.php';
?>