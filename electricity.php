<?php
   $meter = " ";
   $meter2 = " ";
   $total = " ";
   $total2 = " ";
   $error = " ";
       if (isset($_GET["meter"])) 
       {
           $meter = $_GET["meter"];
           $meter2 = $_GET["meter2"];

           if ($meter < $meter2  )
        {
            $error = "กรุณาตรวจสอบ มิเตอร์ไฟฟ้า เดือนที่แล้ว อีกครั้ง";
        }
            else {
                $total = $meter - $meter2;
                $total2 = $total * 4 ;
            }
       }    
       
       if (isset($_GET["Delect"])) 
       {
           $meter = " ";
           $meter2 = " ";
           $total = " ";
           $total2 = " ";
           $error = " ";
       }
?>