<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citizen</title>
</head>
<body>
<form action="<?php echo base_url('register')?>" method="post">
    <center>
    <p><b>National_id <input type="text" name="national_id" placeholder="Enter national id"></p></br>
    <p><b>Names <input type="text" name="names"placeholder="Enter names"></p></br>
    <p><b>Height <input type="text" name="height" placeholder="Enter height"></p></br>
    <p><b>Weight <input type="text" name="weight" placeholder="Enter weight"></p></br>
    <p><b>DOB <input type="date" name="dob" placeholder="Enter Date Of Birth"></p></br>
    <button type="submit" name="submit">Register </button>
</form>
</br></br></br>
<table border="1" style="width:50%">
<thead>
<th>National_id</th>
    <th>Names</th>
    <th>Height</th>
    <th>Weight</th>
    <th>DOB</th>
    <th>Amount</th>
    <th colspan="2">Action</th>


</thead>
<tbody>
    <?php foreach($citizenData as $row): {?>
        <tr>
        <td><?php echo $row['national_id']?></td>
        <td><?php echo $row['names']?></td>
        <td><?php echo $row['height']?></td>
        <td><?php echo $row['weight']?></td>
        <td><?php echo $row['dob']?></td> 
        <td>$<?php echo $row['weight'] * 5 /100 ?></td>
        <td> <a href="<?php echo base_url('delete/'.$row['national_id'])?>">Delete</a></td> 
        <td> <a href="<?php echo base_url('update/'.$row['national_id'])?>">Update</a></td>
        <?php }?> 
    </tr>  
        <?php
        endforeach
        ?>
            </tbody>
            <?php 
            if ( session()->get('yes')){
                ?>
              <p><?php echo session()->get('yes'); ?></p>    
            
            <?php
            }
            if( session()->get('no')){
                ?>
                <p><?php echo session()->get('no'); ?></p>    
            <?php
            }
            ?>
        </center>
</body>
</html>