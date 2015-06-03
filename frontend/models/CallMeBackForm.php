<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * CallMeBackForm is the model behind the call me back form.
 */
class CallMeBackForm extends Model
{
    public $phone;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // phone is required
            [['phone'], 'required'],
            // phone has to be a valid number
            ['phone', 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom($email)
            ->setSubject('Request Call ' . $this->phone . ' from CALL ME BACK form at myclickbooks.com')
            ->setTextBody("CALL ME BACK: " . $this->phone)
            ->send();
    }
}
