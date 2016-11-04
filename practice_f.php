
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
         F. 有一個球從 100 公尺處落下，每次落地都反彈至原高度的二分之一，請問它第五次落地後，會反彈到多高?

        </span><br>
        <div class="result">
         <?php
         
        $height = 100;
        for($i=0;$i<5;$i++){
         echo $height=$height*0.5;  
         echo "<br>";
        }
        
        
        ?>
        </div>
        <script>
         
        </script>
    </body>
</html>