<?php


namespace App\Components;


use App\Category;

class Recusive
{
    private $data;
    private $htmlSelect;

    public function __constructor($data){
        $this->data = $data;
    }

    public function getCategoryRecursive(&$litCate, $id=0, $text = ""){
        foreach ($this->data as $value){
            if($value['parent_id'] == $id){
                $litCate[] = "<option>".$text.$value['name']."</option>";
                //$this->htmlSelect.= "<option>".$text.$value['name']."</option>";
                $this->getCategoryRecursive($litCate, $value['id'],$text.'-');
            }
        }
    }
}
