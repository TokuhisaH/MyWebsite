<?php  
//POSTリクエストの場合のみ受付  
    //アクセストークン  
    $access_token = "取得したアクセストークンを入力します";  
    //JSONデータを取得して出力  
    echo @file_get_contents($access_token);  
    //終了  
    exit;  
?>  