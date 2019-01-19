 <section class="content-header">
          <h1>
            Professional
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Professional</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="box-body">
                    <?php if (isset($_GET['s']) && $_GET['s']==101) {
                      ?>
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <p><i class="icon fa fa-check"></i> Data Uploaded Sucessfully ...</p>
                      </div>
                     <?php } ?>
                    <div class="form-group">
                      <label>Full Name</label>
                      <input type="text" class="form-control" required name="name" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group">
                      <label>City</label>
                      <input type="text" class="form-control" required name="city" placeholder="Enter City">
                    </div>
                    <div class="form-group">
                      <label>Primary Profession</label>
                      <select class="form-control" name="profession" id="lawyer" required>
                        <option disabled selected>Select a Profession</option>
                        <?php
                          $get="select * from services";
                          $exe=mysqli_query($con,$get);
                          while($data=mysqli_fetch_array($exe)){
                        ?>
                        <option value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="number" class="form-control" required name="phone" placeholder="Enter Phone Number ">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" required name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Profile Pic</label>
                      <input type="file"  name="img" required>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="add" class="btn btn-primary" style="width: 100%">Add</button>
                  </div>
                </form>
              </div>


          <!-- Your Page Content Here -->

        </section><!-- /.content -->
<?php 
if (isset($_POST['add'])) {
  $fullName=mysql_real_escape_string($_POST['name']);
  $city=mysql_real_escape_string($_POST['city']);
  $profession=mysql_real_escape_string($_POST['profession']);
  $phone=mysql_real_escape_string($_POST['phone']);
  $email=mysql_real_escape_string($_POST['email']);
  $name = $_FILES["img"]["name"];
  $size = $_FILES["img"]["size"];
  $type = $_FILES["img"]["type"];
  $temp_name = $_FILES["img"]["tmp_name"];
  $location='./../images/';
  $path=$location.$name;

  if (move_uploaded_file($temp_name,$path)){ 
    $query="insert into professionals (name,city,profession,phone,email,image) VALUES ('$fullName','$city','$profession','$phone','$email','$path')";
    mysqli_query($con,$query) or die(mysqli_error($con));
  }
    header("location:main.php?pg=addProfessional&s=101");
  }
?>