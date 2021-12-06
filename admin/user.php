<?php include('header.php');


$com=new common();
$db=new database();
$con=new config();
// $userList=$adm->gettableList('user_details','status', 'Active');
$query = "select * from user_details where status='Active'";
$userList=$db->selectdata($query);
$userList=$userList==FALSE?FALSE:$userList['total_row'];

if (!empty($_GET['del'])) {
   $data = array(
       'status' => 44
   );
    $userList=$db->updatedata('user_details',$data, 'id='.$_GET['del'].'');
    $con->redirect_back();

}
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Manage Customer</h1>
                </div>
                <div class="col-sm-6">
                  <!-- <a class="btn btn-primary btn-sm" style="float:right" href="add-product.php">Add </a> -->
                </div>

            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>                           
                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>                           
                            <th>Status</th>
                            <th>Action</th>                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                          $i =1; 
                          if($userList != false){                            
                          foreach($userList as $value){
                           
                        ?>
                        <tr>                           
                            <td><?php echo  $i++; ?></td>
                            <td><?php echo $value['fname'].$value['lname']; ?></td>
                            <td><?php echo $value['email']; ?></td>
                            <td><?php echo $value['phone']; ?></td>
                            <td><?php echo $value['gender']; ?></td>
                            
                            <td><span class="badge badge-primary"><?php echo $value['status'];?></span></td>
                            <td>
                              <a href="update-user.php?id=<?php echo $value['id']; ?>"><i class="btn btn-primary btn-sm fas fa-edit"></i></a>
                              <a href="user.php?del=<?php echo $value['id']; ?>"><i class="btn btn-danger btn-sm fa fa-trash-alt" onclick="return confirm('Are you sure ! you want to delete this record')"></i></a>
                            </td>
                           
                        </tr>
                        <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

</div>
<?php include('footer.php')?>