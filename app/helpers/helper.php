<?php

namespace App\Helpers;

class Helper
{
    public static function displayStar(int $note,string $class='mb-2')
    {
        $r='';
        for($i=1;$i<=5;$i++){
            if($i<=$note){
                $r.='<i class="bi bi-star-fill text-warning"></i>';
            }else{
                $r.='<i class="bi bi-star text-warning"></i>';
            }
        }
        $r.='';
        return $r;
    }
}
