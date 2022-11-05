<?php
require 'vendor/autoload.php'; 

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result =  $collection->find();

?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Students</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
            <div class="container">     
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Birthday</th>
                                <th>Address</th>
                                <th>Program</th>
                                <th>Contact Number</th>
                                <th>Emergency Contact</th>
                            </tr>

                            <?php
                                foreach ($result as $student){
                            ?>
                            <tr>
                                <th scope = "row"><?php echo $student['studentId']?></th>
                                <td><?php echo $student['firstName']; ?></td>
                                <td><?php echo $student['lastName']; ?></td>
                                <td><?php echo $student['birthday']; ?></td>
                                <td><?php echo $student['address']; ?></td>
                                <td><?php echo $student['program']; ?></td>
                                <td><?php echo $student['contactNumber']; ?></td>
                                <td><?php echo $student['emergencyContact']; ?></td>
                            </tr>
                            <?php
                            }?>
                    </table>
                </div>
            </div>   
        </div>
    </body>
</html>     