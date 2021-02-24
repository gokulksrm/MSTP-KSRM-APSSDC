
<form action="" method="POST">
<label>Order id</label></br>
<input type="text" name="order_id" placeholder="Enter your order id"/></br></br>
<input type="submit" name="Submit" value="Submit"/>
</form>

<?php
if(isset($_POST['order_id'])&& $_POST['order_id']!="")
{
    $order_id=$_POST['order_id'];
    $url="http://localhost/var/restindex.php?order_id=".$order_id;
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
    <th>Name</th>
    <th>Price</th>
    </tr>
    <tr>
    <td><?php echo $data->order_id; ?></td>
    <td><?php echo $data->product_name; ?></td>
    <td><?php echo $data->product_price; ?></td>
    </tr>
    
    </table>
<?php } ?>

<?php
if(!empty($result)&&empty($result->data))
{
    echo '<h3>'. $result->response_desc.'<h3>';
}

?>
