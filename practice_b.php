
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
         B. 寫程式算一下: 利用1,2,3,4這四個數字，可組出多少個數字互不相同三位數?
       
        </span><br>
        <div class="result">
         <?php
        
        $i;
        $k;
        $j;
        $n=0;
        
        for($i=1;$i<=4;$i++){
            for($j=1;$j<=4;$j++){
                for($k=1;$k<=4;$k++){
                    if($i!=$j&&$i!=$k&&$j!=$k){
                        $n++;
                        printf("%d%d%d ",$i,$j,$k);
                        if($n%4==0) printf("<br>");
                    }
                }
            }
        }
           
        ?>
        </div>
        <script>
         
        </script>
    </body>
</html>