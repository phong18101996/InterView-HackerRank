<!-- 
Name:Phong Nguyen
Description:HackerRank Interview
Content:
For example : array = [DDUUUUDD] 
output :2 , because it have 2 "DD" 
Example:
input:8
UDDDUDUU
output:1
D D D DD
DDUUUUDD
 -->
<?php
function countingValleys($n, $s)
{
   // $str_replace = str_replace("D", " ", $s);
   // $explode = explode(" ", $str_replace);
   $convert = str_split($s,1);
   $v = 0;
   $lvl = 0;
   foreach($convert as $key => $value) {
       if($value=="U") {
            ++$lvl;
       } else {
            --$lvl;
       }
       if($lvl == 0 && $value=="U")
       ++$v;
   }
   echo $v;

    // $result = 0;
    // foreach ($explode as $key => $value) {
    //     $temp = (int) strlen($value) / 2;
    //     if ($temp >= 1) {
    //         $result += (int) $temp;
    //     }
    // }
    // echo $result;
}
countingValleys(10,"DUDDDUUDUU");
?>