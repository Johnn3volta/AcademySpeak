<?php

namespace common\models\activequery;

use common\models\ProgramsArticles;

/**
 * This is the ActiveQuery class for [[\common\models\ProgramsCats]].
 *
 * @see \common\models\ProgramsCats
 */
class ProgramsCatsQuery extends \yii\db\ActiveQuery{

    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ProgramsCats[]|array
     */
    public function all($db = null){
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ProgramsCats|array|null
     */
    public function one($db = null){
        return parent::one($db);
    }

    public static function Counts($models){
        $counts = [];
        foreach ($models as $model){
            $counts[$model->id] = ProgramsArticles::find()->where(['parent_id' => $model->id])->count();
        }

        return $counts;
    }
}
