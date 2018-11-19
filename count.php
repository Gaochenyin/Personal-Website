<php  
    $aid  = isset( $_GET['aid'] )?$_GET['aid']:'';  
    $t = isset( $_GET['t'] )?$_GET['t']:'';  
    if(intval( $aid )){  
        if( $t =='show' ){  
          echo "document.write('这里是显示浏览次数,可以从数据库读出来');";  
        }  
        else{  
          $conn = mysql_connect('localhost','root','') ;  
          $sql = "Update counts set click_num = click_num+1 where aid ='$aid'";  
          mysql_db_query('gaochenyin',$sql,$conn);  
        }  
    }  
>

