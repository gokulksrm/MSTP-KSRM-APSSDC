<?php
header("Content-Type:application/json");
$orders=[
    1001=>[
        'order_id'=>1001,
        'product_name'=>'sandals',
        'product_price'=>'$ 100'
    ],
    1002=>[
        'order_id'=>1002,
        'product_name'=>'bat',
        'product_price'=>'$ 5000'
    ]
    ];
function response($data,$response_code,$response_desc){
    $respons['data']=$data;
    $respons['response_code']=$response_code;
    $respons['response_desc']=$response_desc;
    $json_response=json_encode($respons);
    echo $json_response;
}

if(!empty($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    if(!empty($orders[$order_id]))
    {
    response($orders[$order_id],200,"Success");
    }
    else{
        response(NULL,202,"No1 record found");
    }
}
else{

    response(NULL,200,"No Record Found");
}