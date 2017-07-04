<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Newsletter form
 */
class NewsletterForm extends Model
{
    public $name;
    public $email;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['name', 'filter', 'filter' => 'trim'],
            ['name', 'required'],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => Yii::t('app', 'E-mail*'),
            'name' => Yii::t('app', 'Navn*')
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
        $message = 'Signup for newsletter from form at erevisoren.dk.';
        //add name
        if(!empty($this->name))
            $message .= 'My name is ' . $this->name . '.';
        //add email
        if(!empty($this->email))
            $message .= 'My E-mail is ' . $this->email . '.';
            
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom(['webmaster@erevisoren.dk'=>'eRevisoren'])
            ->setSubject('Signup for newsletter: [' . $this->email . ']')
            ->setTextBody($message)
            ->send();
    }
}