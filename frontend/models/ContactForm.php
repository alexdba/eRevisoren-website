<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $message;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // email is required
            [['email'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            
			['name', 'filter', 'filter' => 'trim'],
			['phone', 'filter', 'filter' => 'trim'],
			['message', 'filter', 'filter' => 'trim'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => 'E-mail *',
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
    	$message = 'Name: '    . $this->name . "\n" .
    				'E-mail: ' . $this->email . "\n" .
    				'Phone: '  . $this->phone . "\n" .
    				"Message: "   . $this->message;
					
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject('Request from Contact form at myclickbooks.com')
            ->setTextBody($message)
            ->send();
    }
}
