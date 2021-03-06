<?php include("./functions/init.php"); 
if(admin_logged_in() == false){
    redirect("admin.php");
}else{
    $complains = getAllComplains();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>IITP Hostel Team</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="76x76" href="images/icons/logo.png">
	<link rel="icon" type="image/png" href="images/icons/logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">

  <div class=" text-center">
    <?php include("./includes/admin_nav.php");?>
    <h1>All Unresolved Complains</h1>
    <?php display_message(); ?>
  </div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Date</th>
      <th scope="col">Complain</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php $count=1; foreach($complains as $ca) { ?>
    <tr>
        <th scope='row'><?php echo $count++; ?></th>
        <td><?php echo $ca['name']; ?></td>
        <td><?php echo $ca['phone']; ?></td>
        <td><?php echo $ca['date_time']; ?></td>
        <td><?php echo $ca['complain']; ?></td>
        <td><?php echo $ca['status']; ?></td>
 				<td><a href="updt-status.php?unique_id=<?php echo $ca['unique_id']?>"><i class="fa fa-edit" style="font-size:24px; height:20px; width:20px"></i></a></td>
    </tr>
    <?php } ?>
        </tbody>
    </table>

  </div>
</div>

</body>
</html>
