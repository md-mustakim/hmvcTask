<div class="row m-0 p-0">
    <div class="col-md-12">
        <div class="">
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="create" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add new Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="save()">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center my-3">
            <h2>Category List</h2>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create"> Add <i class="fa fa-plus"></i></button>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $categories = array();
            if (count($categories) === 0){
                echo "<tr> <td colspan='2' class='text-center text-danger fw-bold'>No Data found</td> </tr>";
            }else{ ?>

           <?php foreach ($categories as $category){?>
                <tr>
                    <td> <?php echo $category->id;?> </td>
                </tr>
            <?php }}?>

            </tbody>
        </table>
    </div>
</div>