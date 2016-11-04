
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
            .result{
                width:70%;
                height:60%;
                margin-left:auto;
                margin-right:auto;
                display: black;
                background:#C1C1C1;
            }
        </style>
    </head>
    <body>
        <span id="eye" class="horus">
        D. 水仙花數 = 三位數各數字的立方和等於該數(例如:153)，請寫程式列出所有的水仙花數。

        </span><br>
        <div class="result">
         <?php
         
        function cube($x){
           $y=$x;
           for($i=1;$i<=2;$i++){
              $x=$x*$y;
           }
          return $x;
        }
        
        function lineOut($a,$b,$c){
          return  $a*100+$b*10+$c*1;
        }
        
        function PrintNum(){
            
            for($k=0;$k<=888;$k++){
                $result = 111+$k;
                $str_num= sprintf("%d",$result);
                $c=substr($str_num, -1,1);
                $b=substr($str_num, -2,1);
                $a=substr($str_num, -3,1);
                
                $comp1=$a*100+$b*10+$c*1;
                $comp2=cube($a)+cube($c)+cube($b);
                if($comp2==$comp1){
                  echo $result.","."a:".$a.",b:".$b.",c:".$c."<br>";
                }
            }
        }
        
        PrintNum();
        
        
       if($comp1==$comp2){
           echo "success!";
       }
         
        ?>
        </div>
        <script>
         
        </script>
    </body>
</html>