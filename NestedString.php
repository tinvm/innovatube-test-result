<?php

/**
 * Class NestedString
 * @author TinVM
 * @since Mar08 2018
 */
class NestedString{

    public $chars_member = array(
        "(" => ")",
        "{" => "}",
        "[" => "]",
        "<" => ">",
    );


    public function checkNestedString($string){

        if (empty($string))
            return 1;

        if (strlen($string) % 2)
            return 0;

        $chars = str_split($string);

        foreach($chars as $i=>$first_char){
            for ($j = strlen($string) - 1; $i; $j--){
                $list_str_check = array();
                for ($c = $chars[$i]; $chars[$j]; $c++){
                    $list_str_check[] = $chars[$c];
                }
                $string_check = join('', $list_str_check);
                foreach ($this->chars_member as $key=>$value){
                    if (strpos($string_check, $key) && strpos($string_check, $value))
                        return 1;
                    else
                        return 0;
                }

            }

        }

    }

}

?>