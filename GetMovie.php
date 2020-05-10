<?php
function get_movie($movie_url,$movie_num){
    if($movie_num == 1){
        $movie_url = 'http://17kyun.com/api.php?url='.$movie_url;
    }else if($movie_num == 2){
        $movie_url = 'https://jx.yingxiangbao.cn/vip.php?url='.$movie_url;
    }else if($movie_num == 3){
        $movie_url = 'https://www.8090g.cn/jiexi/?url='.$movie_url;
    }else if($movie_num == 4){
        $movie_url = 'https://jiexi.380k.com/?url='.$movie_url;
    }else if($movie_num == 5){
        $movie_url = 'https://www.pangujiexi.com/pangu/?url='.$movie_url;
    }else if($movie_num == 6){
        $movie_url = 'http://vip.397wl.cn/?url='.$movie_url;
    }else if($movie_num == 7){
        $movie_url = 'https://jx.idc126.net/jx/?url='.$movie_url;
    }
    return $movie_url;
}
?>
