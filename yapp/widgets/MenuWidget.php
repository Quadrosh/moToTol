<?php


namespace app\widgets;
use app\models\MenuMain;
use yii\base\Widget;



class MenuWidget extends Widget
{
    public $formfactor;
    public $data;
    public $tree;
    public $menuFinal;
    public $currentItem;
    public $model;
    public $elementId;

    public function init()
    {
        parent::init();
        if ($this->formfactor === null) {
            $this->formfactor = 'mainMenu';
        }
        $this->formfactor .= '.php';
    }
    public function run()
    {
            $this->data = MenuMain::find()->indexBy('id')->asArray()->all();
            $this->tree = $this->getTree();
            $this->menuFinal = $this->getMenuHtml($this->tree);
        if ($this->formfactor = 'mainMenu') {
            $this->elementId = 'mainmenu';
        }
            return '<ul id="'.$this->elementId.'" class="main_menu menuclose">'.$this->menuFinal.'</ul>';
    }

    protected function getTree()
    {
        $tree = [];
        foreach ($this->data as $id => &$value) {
            if (empty($value['parent_id'])) {
                $tree[$id] = &$value;
            } else {
                $this->data[$value['parent_id']]['childs'][$value['id']] = &$value;
            }
        }
        return $tree;
    }


        protected function getMenuHtml($tree, $tab='',$menulevel='0')
    {
        $str = '';
        foreach ($tree as $item ) {
            $str .=$this->itemToTemplate($item, $tab, $menulevel);
        }
        return $str;
    }
    protected function itemToTemplate($item, $tab, $menulevel)
    {
        ob_start();
        include __DIR__ . '/menu_formfactor/'. $this->formfactor;
        return ob_get_clean();
    }
}