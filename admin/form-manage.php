<?php
include 'db.php';
$pre = $PDO->query("SELECT * FROM sp_form");
$user = $pre->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>s.no</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>message</th>
                    <th>city</th>
                    <th>subject</th>
                </tr>
                <?php  
                foreach ($user as $row):
                 ?>
                 <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['message'] ?></td>
                    <td><?php echo $row['city'] ?></td>
                    <td><?php echo $row['subject'] ?></td>
                 </tr>

               <?php endforeach; ?>
                
            </table>
        </div>
    </div>
</div>

 <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>