<?php
function get_instagram(){
    $myAccessToken = 'アクセストークン';
    $count = 9; //表示件数

    $json = file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token='.$myAccessToken."&count=".$count);

    //取ってきた内容を読み込んで、取得した件数分まわす
    $obj = json_decode($json);
    foreach($obj->data as $data): ?>
            <div class="inst_list_item">
                <div class="inst_thumb_wrap">
                    <div class="inst_thumb">
                        <a href="<?php echo $data->link; ?>" target="_blank">
                        <img src="<?php echo $data->images->low_resolution->url; ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="inst_comment">
                    <p><i class="fa fa-heart" aria-hidden="true"></i>いいね　<?php echo $data->likes->count; ?></p>
                </div>
            </div>
<?php
    endforeach;
}