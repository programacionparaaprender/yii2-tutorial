<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * Bmi is the model behind the contact form.
 */
class Bmi extends Model
{
    public $weight;
    public $height;

    public function rules()
    {
        return [
            [['weight', 'height'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'weight' => 'Ancho',
            'height' => 'Alto'
        ];
    }

    /* public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    } */
}
