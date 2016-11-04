<?php
   
    function starTower($num,$add){
        //若能記錄初始值
       if($num==41){
            echo "*";
            echo "<br>";
            starTower($num-1,$add);
            
        }elseif($num>0){
            echo $add = $add . "*";
            echo "<br>";
            starTower($num-1,$add);
        }elseif($num==0){
            return false;
        }
    }
    
    starTower(41,"*");
?>
<html>
    <head>
        <style>
            *{
              margin:0;
              padding:0;
            }
            .horus {
              font-size: 36pt;
              background-color: black;
              color: #fff;
              font-family: "Lucida Console";
              letter-spacing: 1px;
              padding: 10px 0 10px 0;
              line-height: 1.4;
            }

        </style>
        
    </head>
    <body>
        <span id="eye" class="horus">
         
        
        </span>
        <script>
         
        </script>
    </body>
</html>