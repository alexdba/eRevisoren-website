<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $contact_time;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email are required
            [['name', 'email', 'phone'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],


			['name', 'filter', 'filter' => 'trim'],
			['email', 'filter', 'filter' => 'trim'],
			['phone', 'filter', 'filter' => 'trim'],
			['contact_time', 'filter', 'filter' => 'trim'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email'      => 'Email',
        ];
    }
    
    
    /**
     * Resets the form
     *
     * @return void
     */
    public function resetForm()
    {
       $this->name         = '';
       $this->email        = '';
       $this->phone        = '';
       $this->contact_time = '';
    }
    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {

    	$message = 'Signup for erevisoren.dk: ' . "\n" .
    	            'Name: '      . $this->name    . "\n" .
    				'E-mail: '    . $this->email   . "\n";
    				
    	//add optional fields
    	if(!empty($this->phone))
    	    $message .=
    				'Phone: '   . $this->phone . "\n";
    	if(!empty($this->contact_time))
    	    $message .=
    				'Best time to contact: '   . $this->contact_time . "\n";
					
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject('Prøv Gratis ['      . $this->name    . ']')
            ->setTextBody($message)
            ->send();
    }
}
