<?php
function connect_DB($MusicId){
    $local = '127.0.0.1';
    $username = 'root';
    $password = 'zhang842563';
    $DataName = 'student';
    $mysqli = new mysqli($local,$username,$password,$DataName);//建立数据库连接
    $mysqli->query("set names 'utf8'"); //设置字符集
    if($mysqli->connect_errno == 0){
        $sql = 'SELECT * FROM `data` WHERE num = 29393792;';
        $sql.= 'SELECT * FROM `data`';    //用.=连接起来的多条查询语句
        if($mysqli->multi_query($sql)){
            do{
                if ($rs = $mysqli->store_result()){//store_result()方法获取第一条sql语句查询结果
                    while ($row=$rs->fetch_row()){
                        var_dump($row);   //一行就是一个数组，可以通过下标去取他们的值
                    }
                    $rs->Close(); //关闭结果集
                    if($mysqli->more_results()){  //判断是否还有更多的结果集
                        echo '<br>'; //换行
                    }
                }
            }while($mysqli->next_result());
        }
    }
    //关闭数据库连接
    $mysqli -> close();
}
?>