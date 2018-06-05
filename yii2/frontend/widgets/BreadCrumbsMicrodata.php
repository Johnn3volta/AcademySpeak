<?php
/**
 * Created by PhpStorm.
 * User: johnn
 * Date: 05.06.2018
 * Time: 22:47
 */

namespace frontend\widgets;


use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

class BreadCrumbsMicrodata extends Breadcrumbs{

    public $itempropPosition = 1;

    /**
     * @return string|void
     * @throws \yii\base\InvalidConfigException
     */
    public function run(){
        if(empty($this->links)){
            return;
        }

        $links = [];

        $replacement = ['>{link}' => ' itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">{link}{position}'];
        //todo: , '<img ' => '<img itemprop="image" '
        $this->itemTemplate = strtr($this->itemTemplate, $replacement);
        $this->activeItemTemplate = strtr($this->activeItemTemplate, $replacement);

        if($this->homeLink === null){
            $links[] = $this->renderItemMarkup([
                'label' => Yii::t('yii', 'Home'),
                'url'   => Yii::$app->homeUrl,
            ], $this->itemTemplate, $this->itempropPosition);
        }elseif($this->homeLink !== false){
            $this->homeLink['template'] = isset($this->homeLink['template']) ? strtr($this->homeLink['template'], $replacement) : $this->itemTemplate;
            $links[] = $this->renderItemMarkup($this->homeLink, $this->homeLink['template'], $this->itempropPosition);
        }

        foreach ($this->links as $link) {
            if(!is_array($link)){
                $link = ['label' => $link];
            }

            $links[] = $this->renderItemMarkup($link, isset($link['url']) ? $this->itemTemplate : $this->activeItemTemplate, ++$this->itempropPosition);

        }

        echo Html::tag($this->tag, implode('', $links), array_merge($this->options, ["itemscope itemtype" => "http://schema.org/BreadcrumbList"]));

    }

    /**
     * @param $link
     * @param $template
     * @param $position
     *
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    protected function renderItemMarkup($link, $template, $position){
        $encodeLabel = ArrayHelper::remove($link, 'encode', $this->encodeLabels);

        if(array_key_exists('label', $link)){
            $label = Html::tag('span', $encodeLabel ? Html::encode($link['label']) : $link['label'], ['itemprop' => "name"]);
        }else{
            throw new InvalidConfigException('The "label" element is required for each link.');
        }

        if(isset($link['template'])){
            $template = $link['template'];
        }

        if(isset($link['url'])){
            $options = $link;
            unset($options['template'], $options['label'], $options['url']);
            $link = Html::a($label, $link['url'], array_merge($options, ["itemprop" => "item"]));
        }else{
            $link = Html::tag('span', $label, ["itemprop" => "item"]);
        }

        return strtr($template, [
                '{link}' => $link,
                '{position}' => Html::tag('meta', '', [
                    'itemprop' => "position",
                    "content"  => $position,
                ]),
            ]);
    }
}