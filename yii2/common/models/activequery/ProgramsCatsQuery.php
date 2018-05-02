<?php

namespace common\models\activequery;

/**
 * This is the ActiveQuery class for [[\common\models\ProgramsCats]].
 *
 * @see \common\models\ProgramsCats
 */
class ProgramsCatsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ProgramsCats[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ProgramsCats|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
