  <?php include("connect/connect.php");

  if(isset($_REQUEST['delete_id'])){
    echo $_REQUEST['delete_id'];
    $id = $_REQUEST['delete_id'];
    $query = "DELETE FROM users WHERE user_id = '$id'";
    $result = mysqli_query($conn,$query);

    if($result){
        echo "
        <script>
            alert('deleted successfully');
            window.location = 'index_admin.php';
        </script>
        ";
    }
    else{
        echo '<script> alert("Data Not Deleted")</script>';

    }
  }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_admin_list.css">

  </head>
  <body>
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
   
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage System User</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <?php   
              $x = 0;
              $sql = "SELECT * from users Where user_type = 0";
              $query = mysqli_query($conn,$sql); 
              echo ' <a href="index_admin.php?mode=add" class="btn btn-primary" role="button">Add User</a>  ';
         echo '<table id="example1" class="table table-bordered table-striped">';
         echo     "     <thead>";
         echo     "     <tr>";
         echo     "       <th>No.</th>";
         echo     "       <th>ID</th>";
         echo     "       <th>Username</th>";
         echo     "       <th>Email</th>";
         echo     "       <th>Password</th>";
         echo     "       <th>Edit</th>";
         echo     "       <th>Delete</th>";
         echo     "     </tr>";
         echo     "     </thead>";
                
                    while($row = mysqli_fetch_assoc($query)){
                      $x = $x + 1;
                
            echo "     <tbody>";
            echo "         <tr>";
            echo "           <td>" .$x. "</td>";
            echo "           <td>".$row['user_id']."</td>";
            echo "           <td>".$row['user_name']."</td>";
            echo "           <td>".$row['user_email']."</td>";
            echo "           <td>".$row['user_pass']."</td>";
            echo "           <td>"; 
            echo ' <a href="index_admin.php?mode=edit&id='.$row['user_id'].'" class="btn btn-warning" role="button">EDIT</a>';?>
                             </td>
                             <td>
                              <?php
              echo  "<a href='admin_form_del_db.php?mode=del&id=$row[user_id]' class='btn btn-danger' role='button' onclick=\"return confirm('คุณต้องการลบใช่หรือไม่')\">DELETE</a>";?>
              
                                <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal1">DELETE</button> -->
                           </td>
                           </tr>
            <?php } ?>
                   </tbody>
              </table>

              
              
<!-- ******************************************************************************************************************** -->

 <!-- The Modal delete -->
 <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">CONFIRM</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h4>Are you sure delete user ?</h4>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
              <form action="admin_list_db.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['user_id'] ?>">
                <a href="?delete_id=<?php echo $row['user_id'] ?>" class="btn btn-danger">DELETE</a>
              </form>
          <button type="button" class="btn btn-warning" data-dismiss="modal">CANCEL</button>
        </div>
        
      </div>
    </div>
  </div>

<!-- ******************************************************************************************************************** -->

            
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->


    </section>
    <!-- /.content -->
  </div>
  



  </body>
  </html>
  