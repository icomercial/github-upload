<?php
//if(isset($_GET['inicio'])){$inicio = $_GET['inicio'];}else{$inicio="9:15:00";}
$inicio= $inicioarray;
//print_r($inicioarray);
$finalB=["","9:15:00","10:00:00","10:45:00","11:30:00","12:15:00","13:00:00","13:45:00","14:30:00","15:15:00","16:00:00","16:45:00","17:30:00","18:15:00","19:00:00","19:45:00","20:30:00","21:15:00","22:00:00","22:45:00"];
                    for($ib = 1; $ib<=19; $ib++){
                        if(strtotime($finalB[$ib])>=strtotime($inicio)){
                       echo "<option value=\"".$finalB[$ib]."\">".substr($finalB[$ib],0,-3)."</option>";
                        }
                    }
                    ?>