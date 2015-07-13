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
    public $name;

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
            
            ['name', 'filter', 'filter' => 'trim'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'phone' => Yii::t('app', 'Enter Number:'),
            'name' => Yii::t('app', 'Enter Name:')
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
        $message = "CALL ME BACK: " . $this->phone . ' from form at ebogholderen.dk';
        //add name
        if(!empty($this->name))
            $message .= ', my name is ' . $this->name;
            
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom(['webmaster@ebogholderen.dk'=>'eBogholderen'])
            ->setSubject('Ring: [' . $this->phone . ']')
            ->setTextBody($message)
            ->send();
    }
}
