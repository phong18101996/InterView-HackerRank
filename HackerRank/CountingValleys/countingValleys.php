<!-- 
Name:Phong Nguyen
Description:HackerRank Interview
Content: 
Example:
input:8
UDDDUDUU
output:1
 -->
<?php
function countingValleys($n, $s)
{
   $convert = str_split($s,1);
   $v = 0;
   $valleys = 0;
   foreach($convert as $key => $value) {
       if($value=="U") {
            ++$valleys;
       } else {
            --$valleys;
       }
       if($valleys == 0 && $value=="U")
       ++$v;
   }
   echo $v;
}
countingValleys(10,"DUDDDUUDUU");
?>