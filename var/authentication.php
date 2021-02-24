<form action="" method="POST">
<label>Enter the User ID</label></br></br>
<input type="text" name="user_id" placeholder="Enter the User ID"/></br></br>
<input type="submit" name="submit" value="submit"/></br></br>


<?php
if(isset($_POST['user_id'])&& $_POST['user_id']!="")
{
    $user_id=$_POST['user_id'];
    $url="http://localhost/var/assignment.php?user_id=".$user_id;
    $client=curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response=curl_exec($client);
    $result=json_decode($response);
    

}

?>

<?php

if(!empty($result)&&!empty($result->data))
{
    $data=$result->data;?>
    <table border="1">
    <tr>
    <th>ID</th>
    <th>UserName</th>
    <th>AGE</th>
    <th>Gender</th>
    <th>Status</th>
    </tr>
    <tr>
    <td><?php echo $data->user_id; ?></td>
    <td><?php echo $data->user_name; ?></td>
    <td><?php echo $data->age; ?></td>
    <td><?php echo $data->Gender; ?></td>
    <td><?php echo $data->status; ?></td>
    </tr>
    
    </table>
<?php } ?>

<?php
if(!empty($result)&&empty($result->data))
{
    echo '<h3>'. $result->status_desc.'<h3>';
}

?>