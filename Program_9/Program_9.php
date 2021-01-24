<?php
    $states="Mississippi Alabama Texas Massachusetts Kansas";
    $statearr=explode(" ",$states);
    $stateList=[];
	echo "Pavan Rajkumar Magesh - 1CR17CS090";
    echo "<br><br><b>Original array</b><br>";
    foreach($statearr as $key => $value){
        echo("statearr[$key]:$value<br>");
    }
    foreach($statearr as $value){
        if(preg_match('/.*xas$/',$value))
            $stateList[0]=$value;
    }
    foreach($statearr as $value){
        if(preg_match('/^k.*s$/i',$value))
            $stateList[1]=$value;
    }
    foreach($statearr as $value){
        if(preg_match('/^M.*s$/',$value))
            $stateList[2]=$value;
    }
    foreach($statearr as $value){
        if(preg_match('/.*a$/',$value))
            $stateList[3]=$value;
    }
    echo "<br><br><b>Reg match</b><br>";
    foreach($stateList as $key => $value){
        echo("stateList[$key]:$value<br>");
    }
?>