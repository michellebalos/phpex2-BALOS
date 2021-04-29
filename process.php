<?php

class Range
{
    function mr($s1, $s2)
    {
        if(!empty($s1 && $s2))
        {
        $max = (($s1 + $s2) - 1);
        return $max;
        }
        else
        {
            return 0;
        }
    
    }
}
class Ones
{
    function countOnes($n)
    {
        $count = 0;
        while ($n)
        {
            $count += $n & 1;
            $n >>= 1;
        }
        return $count;
    }
}

class CombinePaths
{
    function joinedpaths($p1,$p2)
    {
        while ($jpath = join('/', array(trim($p1, '/'), trim($p2, '/'))))
        {
            return $jpath;
        }
    }
}
class Sas
{
    function sassy($sastry)
    {
        while($sastry > 0){
            $sn = ($sastry . $sastry + 1);
            do{
                if ($sn == floor($sn))
                {
                    return "- TRUE, $sn is a perfect square.";
                }
                else
                {
                    return "- FALSE, $sn is not perfect square.";
                }
            }
            while($sn = sqrt($sn));
        }
        
    }
}

?>