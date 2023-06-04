<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
   <div class="conatiner mt-2 mb-4 p-2 shadow bd-white">
    <form action="curd.php" method="POST">
        <div class="form-row justify-content-center">
            <div class="col-auto">
                <input type="text" name="username" class="form-control" id="username" placeholder="user name">
</div>
<div class="col-auto">
    <input type="text" name="password" class="form-control" id="password" placeholder="Password">
</div>
<div class="col-auto">
    <button type="submit" name="save" class="btn btn-info">Save</button>
</div>
</div>
</form>

   </div>
   <?php require_once("curd.php"); ?>
   <div class="container">
    <?php if(isset($_SESSION['msg'])): ?>
        <div class="<?=$_SESSION['alert'];?>">
            <?= $_SESSION['msg']; ?>
            <?php unset($_SESSION['msg']); unset($_SESSION['alert']); ?>;
    <?php endif; ?>
        </div>
  
    <table class="table">
    <thead>
        <tr>
        <th><h1 align="center" style="margin-top: 10px;">User Data Collection</h1></th>

            <tr>

            
            <th>ID</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       
        <!-- code to display user data in table -->
        <?php 
        $sQuery = "SELECT * FROM list LIMIT 20";
        $result = $conn->query($sQuery);

        $x =1;
        
        // button for edit and delete button
        while ($row = $result->fetch_assoc()): 
        ?>
        <tr>
        <td><?=$row['id'];?></td>
            <td><?= $row['username']; ?></td>
            <td><?= $row['password']; ?></td>
            <td>
          
            <button type="submit" name="delete" class="btn btn-danger" value="<?=$row['id'];?>">Delete</button>




            <button type="button" name="edit" value="<?= $x; $x++;?>" class="btn btn-primary">Edit</button>
       
                
            </td>
        </tr>
        <?php endwhile; ?>
       
    </tbody>
</table>
</div>
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
     <script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert").remove();
        }, 3000);

        $(".btn-primary").click(function(){
          $(".table").find('tr').eq(this.value).each(function(){
            $("#username").val($(this).find('td').eq(1).text());
            $("#password").val($(this).find('td').eq(2).text());
            $(".btn-info").val($(this).find('td').eq(1).text());
            
            
        });
        $(".btn-info").attr("name", "edit");
        });
    });
    </script>
</body>
</html>
