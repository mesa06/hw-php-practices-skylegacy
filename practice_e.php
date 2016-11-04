
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
         E. 輸入一個句子，分別統計句中各字母與數字出現的次數。
       
        </span><br>
        <div class="result">
         <?php
            
        $word = $_POST["keying"]; 
        

        $keywords= preg_split("//",$word, -1, PREG_SPLIT_NO_EMPTY);
        $strlength=count($keywords);
        
        $type0="abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ1234567890";
        $strType= preg_split("//",$type0, -1, PREG_SPLIT_NO_EMPTY);
        $strlength=count($strType);
        
        $Norepeat=array_unique($keywords);
        $Norlength=count($Norepeat);
        //print_r($Norepeat);
        //echo "<br>".$Norlength."<br>";
        
        
        for($k=0;$k<$strlength;$k++){
            $match=0;
            for($i=0;$i<$strlength;$i++){
                  if($strType[$k]==$keywords[$i]){
                     $match+=1;
                  }
            }
            for($j=0;$j<=$Norlength;$j++){
                if($strType[$k]==$Norepeat[$j]){
                     echo $Norepeat[$j]."出現:".$match."次";
                     echo "<br>";
                  }
            
            }
        }
        
            
        ?>
        
          <form method="post" action="">
              <input type="text" name="keying" value="" size="35">
              <input type="submit" value="submit"/>
          </form>
        </div>
        <script>
         
        </script>
    </body>
</html>