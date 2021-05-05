<?php
namespace App\Components;

use App\Menu;

class MenuRecusive{
    private $html;
    public function __construct(){
        $this->html = '';
    }

    public function menuRecusiveAdd($parent_id = 0, $subMask = ''){
        $data = Menu::where('parent_id', $parent_id)->get();
        foreach ($data as $dataItem){
            $this->html.='<option value="'.$dataItem->id.'">'.$subMask.$dataItem->name.'</option>';
            $this->menuRecusiveAdd($dataItem->id, $subMask.'--');
        }
        return $this->html;
    }
}
