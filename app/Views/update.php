<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url('updateCitizen/'.$citizenData['national_id'])?>" method="post">
        <center>
        <p><b>National_id <input type="text" name="national_id" value="<?php echo $citizenData['national_id']?>" placeholder="Enter national id"></p></br>
        <p><b>Names <input type="text" name="names" value="<?php echo $citizenData['names']?>"placeholder="Enter names"></p></br>
        <p><b>Height <input type="text" name="height"  value="<?php echo $citizenData['height']?>"placeholder="Enter height"></p></br>
        <p><b>Weight <input type="text" name="weight" value="<?php echo $citizenData['weight']?>" placeholder="Enter weight"></p></br>
        <p><b>DOB <input type="date" name="dob"  value="<?php echo $citizenData['dob']?>" placeholder="Enter Date Of Birth"></p></br>
        <button type="submit" name="submit">Update</button>
    </form>   
</center>
</body>
</html>