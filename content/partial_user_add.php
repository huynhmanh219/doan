
<html>

<head>
</head>
<body>
    <div class="card-body">
                    <h4 class="card-title">User Update</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form  class="forms-sample " action="<?php echo $level?>compoment/insert_user_process.php" method="POST" enctype = "multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">User</label>
                        <input type="text" class="form-control" name = "user" id="exampleInputName1" placeholder="User">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Full Name</label>
                        <input type="text" class="form-control" name = "fullname" id="exampleInputEmail3" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInput">Email</label>
                        <input type="email" name = "email" class="form-control" id="exampleInput" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label>Image upload</label> 
                       <!-- <div class="input-group col-xs-12">-->
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <input type="file" name ="image" class=" btn btn-gradient-primary">
                        <!--</div>-->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                         <input type="password" name = "password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Create_at</label>
                        <input type="date" class="form-control" name ="create" id="exampleInputCity1" placeholder="create_at">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">status</label>
                        <input type="text" class="form-control" name ="status" id="exampleInputCity1" placeholder="Status">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputity1">Role</label>
                        <input type="text" class="form-control" name ="role" id="exampleInputity1" placeholder="role">
                      </div>
                      <input type="submit" name="submit" class="btn btn-gradient-primary me-2">
                    </form> 
                  </div>
</body>
</html>