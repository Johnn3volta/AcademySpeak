<?php


namespace frontend\models;


use Yii;
use yii\base\Model;

class CallBackForm extends Model{

    public $name;

    public $phone;

    public $time_from;

    public $time_to;

    public function rules(){
        return [
            [['name', 'phone', 'time_from', 'time_to'], 'required'],
            [['name'], 'string', 'length' => [3, 24]],
            [['name'], 'filter', 'filter' => 'trim', 'skipOnArray' => true],
            [['time_to', 'time_from'], 'integer'],
            [
                ['phone'],
                'match',
                'pattern' => '/^\+7\s\([0-9]{3}\)\s[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/',
                'message' => 'Телефон короче 11 цифр',
            ],
            [
                ['time_to'],
                'in',
                'range' => function (){
                    $res = [];
                    for ($i = 11; $i <= 20; $i++) {
                        $res[] .= $i;
                    }

                    return $res;
                },
            ],
            [
                ['time_from'],
                'in',
                'range' => function (){
                    $res = [];
                    for ($i = 10; $i <= 19; $i++) {
                        $res[] .= $i;
                    }

                    return $res;
                },
            ],
        ];
    }

    public function attributeLabels(){
        return [
            'name'      => 'Имя',
            'phone'     => 'Тедефон',
            'time_from' => 'С',
            'time_to'   => 'До',
        ];
    }

    public function sendCallBack($email){
        $content['name'] = $this->name;
        $content['phone'] = $this->phone;
        $content['subject'] = 'Обратный звонок';
        $content['time_from'] = $this->time_from;
        $content['time_to'] = $this->time_to;

        return Yii::$app->mailer->compose("@common/mail/callBackMail", ["content" => $content])
                                ->setTo($email)
                                ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name])
                                ->setSubject($content['subject'])
                                ->setTextBody($content['subject'])
                                ->send();
    }
}
