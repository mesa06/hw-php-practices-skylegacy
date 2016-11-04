
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
         C. 輸入一個日期，用程式計算出該日期是當年度的第幾天?
        
        </span>
       
        
        <br>
        <div class="result">
            
         <?php
         
         if(isset($_POST["start"])&&$_POST["start"]!=""){
             $p_year=$_POST["year"];
             $p_month=$_POST["month"];
             $p_day=$_POST["day"];
         }
         
         $AllDays=0;//閏年天數
         $MDays=0;//當月天數
         $monthDays = array(31,28,31,30,31,30,31,31,30,31,30,31);//當年天數
         $startDay=0;//累積天數
         
         //檢查$year是否為閏年
         function isLeapYear($year){
             
             global $AllDays;
             
             if($year%400==0){
                 $AllDays=366;
             }elseif($year%4==0&&$year%100!=0){
                 $AllDays=366;
             }else{
                 $AllDays=365;
             }
             return $AllDays;
         }
         
         function getMonthDays($Month){
    
            global $monthDays;
            global $MDays;
            global $AllDays;
             
            if($AllDays==366){
                $monthDays[1]=29;
            }
            // 以索引取得當月天數
            $MDays=$monthDays[$Month-1];
            return $MDays;
        }
        
        function getDateOftheyear($date){
            
            global $p_month;
            //取得第幾個月為整數
            global $monthDays;
            //取得總月陣列
            global $startDay;
            //取得起始日
            global $MDays;
            //取得當月天數
            if($date>0&&$date<$MDays){
              $sumMonth=$p_month;
            }else{
               echo "<script>alert('請重新輸入')</script>";    
            }
            
            for($i=0;$i<$sumMonth;$i++){
                $startDay+=$monthDays[$i-1];
            }
            $startDay+=$date;
        }
         
         
         isLeapYear($p_year);
         getMonthDays($p_month);
         getDateOftheyear($p_day);
        
         echo "該年有".$AllDays."天,";
         echo "該月有".$MDays."天,";
         echo "該日為今年第".$startDay."天";
         
        
        ?>
        
         <form action="" method="POST">
            <input type="text" name="year" size="5"/>年
            <input type="text" name="month" size="5"/>月
            <input type="text" name="day" size="5"/>日
            <input type="submit" value="Submit" name="start"/>
        </form>
        </div>
        <script>
         
        </script>
        <?php
  
        // //返回每月第一天為星期幾
        // function getFirstDay($theyear,$theMonth){
        //     $date_time="$theyear-$theMonth-1";
        //     list($date)=explode(" ", $date_time); 
        //     list($Y,$M,$D)=explode("-",$date); 
        //     $result=date("w", mktime(0,0,0,$M,$D,$Y));
        //     return $result;
        // }
      
            
        //     $dayslength=count($days);
      
        
        // //echo date ("H:i F d => l" ,time()); 
        
        
        ?>
    </body>
</html>