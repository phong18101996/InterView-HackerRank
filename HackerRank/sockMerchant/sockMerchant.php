<!--
 Name:Phong Nguyen   
 Description :Interview HackerRank
 Content:
 John works at a clothing store. He has a large pile of socks that he must pair by color for sale. Given an array of integers representing the color of each sock, determine how many pairs of socks with matching colors there are.
For example, there are n = 7  socks with colors ar=[1,2,1,2,1,3,2] . There is one pair of color  and one of color . There are three odd socks left, one of each color. The number of pairs is .
Function Description

Complete the sockMerchant function in the editor below. It must return an integer representing the number of matching pairs of socks that are available.

sockMerchant has the following parameter(s):

n: the number of socks in the pile
ar: the colors of each sock
Input Format

The first line contains an integer n , the number of socks represented in ar .
The second line contains n  space-separated integers describing the colors ar[i]  of the socks in the pile.
Output Format

Return the total number of matching pairs of socks that John can sell.

Sample Input

9
10 20 20 10 10 30 50 10 20
Sample Output

3

 -->
<?php
function sockMerchant($n, $ar)
{
    $mergeElements = array();
    $mergeElements = array_unique($ar);
    $totalElements = array();
    $count = 0;
    $result = 0;
    foreach ($mergeElements as $key => $value) {
        foreach ($ar as $k => $v) {
            if ($value == $v) {
                $count += 1;
                $totalElements[$value]["total"] = (int) $count / 2;
            }
        }
        $count = 0;
    }
    foreach ($totalElements as $number => $total) {
        $result += (int) $total["total"];
    }
    echo $result;
}
sockMerchant(10, [1, 1, 3, 1, 2, 1, 3, 3, 3, 3]);
