<?php

namespace common\models\activequery;

/**
 * This is the ActiveQuery class for [[\common\models\ProgramsArticles]].
 *
 * @see \common\models\ProgramsArticles
 */
class ProgramsArticlesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ProgramsArticles[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ProgramsArticles|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
