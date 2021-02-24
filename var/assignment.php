<?php
header('Content-Type:application/json');
$auth=[
    1001=>['user_id'=>1001,
            'user_name'=>'Gokul',
            'age'=>22,
            'Gender'=>'Male',
            'status'=>'Login'
    
        ],
1001=>['user_id'=>1001,
'user_name'=>'Gokul',
'age'=>22,
'Gender'=>'Male',
'status'=>'Logout'

],
1002=>['user_id'=>1002,
'user_name'=>'Nithish',
'age'=>23,
'Gender'=>'Male',
'status'=>'Login'

],
1003=>['user_id'=>1003,
'user_name'=>'Mary',
'age'=>26,
'Gender'=>'Female',
'status'=>'Logout'

]

];

function authentication($data,$status_code,$status_desc)
{
    $auth['data']=$data;
    $auth['status_code']=$status_code;
    $auth['status_desc']=$status_desc;
    $json_auth=json_encode($auth);
    echo $json_auth;
}

if(!empty($_GET['user_id'])){
    $user_id=$_GET['user_id'];
    if(!empty($auth[$user_id])){
        authentication($auth[$user_id],100,"Success");
    }
    else{
        authentication(NULL,101,'Anoynomous User');
    }
}
else{
    authentication(NULL,102,'No user found');
}