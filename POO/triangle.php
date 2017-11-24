<?php
/**
 * Created by PhpStorm.
 * User: yoann
 * Date: 24/11/2017
 * Time: 13:47
 */
class triangle
{
    protected $cote1, $cote2, $cote3;

    public function __construct($cote1, $cote2, $cote3)
    {
        $this->cote1 = $cote1;
        $this->cote2 = $cote2;
        $this->cote3 = $cote3;
    }
    public function triangleType($cote1, $cote2, $cote3)
    {
        $verif = 0;
        if ($this->IsIsocele($cote1, $cote2, $cote3)){
            $verif = 1;
            if ($this->IsEquilateral($cote1, $cote2, $cote3)){
                $verif = 2;
            }elseif($this->IsRectangle($cote1, $cote2, $cote3)){
                $verif = 3;
            }
        }elseif ($this->IsRectangle($cote1, $cote2, $cote3)){
            $verif = 4;
        }
        if ($verif == 0){
            echo('Ceci est un triangle scalène');
        }elseif ($verif == 1){
            echo('Ceci est un triangle isocèle');
        }elseif ($verif == 2){
            echo('Ceci est un triangle équilatéral');
        }elseif ($verif == 3){
            echo('Ceci est un triangle rectangle');
        }elseif ($verif == 4){
            echo('Ceci est un triangle isocèle rectangle');
        }
    }
    protected function IsIsocele($cote1, $cote2, $cote3)
    {
        if ($cote1 == $cote2 or $cote1 == $cote3 or $cote2 == $cote3){
            return true;
        }else{
            return false;
        }
    }
    protected function IsEquilateral($cote1, $cote2, $cote3){
        if ($cote1 == $cote2 and $cote2 == $cote3){
            return true;
        }else{
            return false;
        }
    }
    protected function IsRectangle($cote1, $cote2, $cote3){
        $hypo = $this->Max($cote1, $cote2, $cote3);
        if ($hypo == 1){
            if ($cote2**2+$cote3**2 == $cote1**2){
                return true;
            }else{
                return false;
            }
        }elseif($hypo ==2){
            if ($cote1**2+$cote3**2 == $cote2**2){
                return true;
            }else{
                return false;
            }
        }else{
            if ($cote2**2+$cote1**2 == $cote3**2){
                return true;
            }else{
                return false;
            }
        }
    }
    protected function Max($cote1, $cote2, $cote3){
        $max = 0;
        if ($cote1 >= $cote2 and $cote1 >= $cote3){
            $max =1;
        }elseif ($cote2 >= $cote1 and $cote2 >= $cote3){
            $max =2;
        }else{
            $max = 3;
        }
        return $max;
    }
}
?>