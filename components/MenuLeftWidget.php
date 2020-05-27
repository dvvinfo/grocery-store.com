<?php


namespace app\components;


use app\models\Category;
use Codeception\Module\Yii2;
use yii\base\Widget;

class MenuLeftWidget extends Widget
{
    public $tpl;
    public $ul_class;
    public $data;
    public $tree;
    public $menuHtml;

    public function init()
    {
        parent::init();
        if ($this->ul_class=== null) {
            $this->ul_class = 'left-menu';
        }
        if ($this->tpl === null) {
            $this->tpl = 'left-menu';
        }
        $this->tpl .= '.php';
    }

    public function run()
    {
        //данные из кеша
        $menu = \Yii::$app->cache->get('menu');
        if ($menu) {
            return $menu;
        }

        $this->data = Category::find()->select('id, parent_id, title')->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = '<ul class="' . $this->ul_class . '">';
        $this->menuHtml .= $this->getMenuHtml($this->tree);
        $this->menuHtml .= '</ul>';

        // set кеш
        \Yii::$app->cache->set('menu', $this->menuHtml);
       return $this->menuHtml;
    }
//ДЛя дочерних элементов в меню
    protected function getTree(){
        $tree = [];
        foreach ($this->data as $id=>&$node) {
            if (!$node['parent_id'])
                $tree[$id] = &$node;
            else
                $this->data[$node['parent_id']]['children'][$node['id']] = &$node;
        }
        return $tree;
    }

    protected function getMenuHtml($tree){
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category);
        }
        return $str;
    }

    protected function catToTemplate($category){
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }


}
