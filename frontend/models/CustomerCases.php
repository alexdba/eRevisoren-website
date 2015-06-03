<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\helpers\Url;

/**
 * CustomerCases is the model for presenting customer cases.
 */
class CustomerCases extends Model
{

    private $cases = array(
            array( 
              'img'            => '[!img_dir!]DanLyons.png',
              'html_img'       => '<img src="[!img_dir!]DanLyons.png" />',
              'heading'        => 'I hate bookkeeping. I’m a personal trainer not an accountant',
              'text'           => 'Simply stated. I hate bookkeeping! I’m a personal trainer not an accountant. I lose receipts, don’t balance my checkbook and never know how much money I’m really making. I would imagine my old bookkeeper was not impressed with me either. I would show up with a folder full of random receipts every few months and expected miracles. It was just not working and I began thinking the self-employed life was not for me. I was referred to ClickBooks by another trainer at the gym and signed up for a 30 day free trial. I could not believe how simple it was. I take a picture and press one of two buttons (expense or income) and I’m done. I still hate bookkeeping but at least I don’t have to deal with it anymore',
              'bubble_text'    => 'Simply stated. I hate bookkeeping! I’m a personal trainer not an accountant. I was referred to ClickBooks by another trainer at the gym and signed up for a 30 day free trial. I could not believe how simple it was. I take a picture and press one of two buttons (expense or income) and I’m done.',
              'name'           => 'Dan Lyons',
              'position'       => 'Personal Trainer'
            ),
            array( 
              'img'            => '[!img_dir!]DanielleMonteith.png',
              'html_img'       => '<img src="[!img_dir!]DanielleMonteith.png" />',
              'heading'        => 'I used a shoebox for my receipts. Bookkeeping was a constant headache',
              'text'           => 'Yes, as a self-employed Tennis Instructor, I used a shoebox for my receipts. Bookkeeping was a constant headache causing me stress and anxiety the further I fell behind. I was trying to keep up with the books on Saturdays and began missing family events…and not enjoying my job as a self-employed person. My Clickbooks experience has been fantastic. I spoke to a live person to set up my chart of accounts and then they quickly walked me through the very simple way to use the app.  Basically just take a picture of receipts. No more bookkeeping stress for me, and now I receive regular reports detailing how much I’m spending and making. Well done ClickBooks team.',
              'bubble_text'    => 'I used a shoebox for my receipts. Bookkeeping was a constant headache causing me stress and anxiety the further I fell behind. My ClickBooks experience has been fantastic. They quickly walked me through the very simple way to use the app. Basically just take a picture of receipts.',
              'name'           => 'Danielle Monteith',
              'position'       => 'Tennis Instructor'
            ),
            array( 
              'img'            => '[!img_dir!]AnneMillner.png',
              'html_img'       => '<img src="[!img_dir!]AnneMillner.png" />',
              'heading'        => 'With Clickbooks the handcuffs are GONE',
              'text'           => 'As a small business owner, I was spending way too much time working in the back office of my business vs trying to improve value of my service. It’s a very difficult balance.  I knew I wasn’t capturing all of my expenses and deductions and I was constantly worrying about how much I would owe in taxes. With Clickbooks, the handcuffs are GONE! I’m officially retired as a bookkeeper. I downloaded the app, take pictures of my receipts and invoices and ClickBooks does the rest. Could not be any simpler.',
              'bubble_text'    => 'I was spending too much time working in the back office of my business. I knew I wasn’t capturing all of my expenses, and I was constantly worrying about how much I would owe in taxes. With Clickbooks the handcuffs are GONE.',
              'name'           => 'Anne Millner',
              'position'       => 'Clinical Aesthetician'
            ),
            array( 
              'img'            => '[!img_dir!]NicolajMorell.png',
              'html_img'       => '<img src="[!img_dir!]NicolajMorell.png" />',
              'heading'        => 'I’m completely impressed',
              'text'           => 'I’m a new customer to ClickBooks (4 months). In 7 years of running my own business, every other approach I tried required me to play an integral and on-going part in the bookkeeping process. Even though I was pretty good at using the various software products I was always falling behind. With Clickbooks, it just so darn easy. It really is amazing. You download the app, take pictures and they send you regular reports. So far, I am completely impressed and would absolutely recommend them to anyone who’s got their own business and is tired of worrying about their books.',
              'bubble_text'    => 'Even though I was pretty good at using the various Software products I was always falling behind.With ClickBooks, it’s just so darn easy. You download the app, take pictures and they send you regular reports. I’m completely impressed',
              'name'           => 'Nicolaj Morell',
              'position'       => 'Website Developer'
            ),
            array( 
              'img'            => '[!img_dir!]HenrikPallesen.png',
              'html_img'       => '<img src="[!img_dir!]HenrikPallesen.png" />',
              'heading'        => 'I’m used to complex and financial issues. But doing my own books is always a pain',
              'text'           => 'I’m used to complex and financial issues. But my own books are always a mess. As an Independent Management Consultant I’m used to dealing with complex and financial issues. But for some reason doing my own books is always a pain. Most likely because I only look at them once a year. With ClickBooks my yearly headache has vanished and I can focus on my real job and servicing my customers.',
              'bubble_text'    => 'As a management consultant I’m used to dealing with complex and financial issues. But for some reason doing my own books is always a pain. With ClickBooks my yearly headache has vanished and I can focus on my real job.',
              'name'           => 'Henrik Pallesen',
              'position'       => 'Management Consultant'
            ),
            array( 
              'img'            => '[!img_dir!]TueJohannesen.png',
              'html_img'       => '<img src="[!img_dir!]TueJohannesen.png" />',
              'heading'        => 'I’m actually making money with ClickBooks',
              'text'           => 'I am actually making money with ClickBooks. As part of my job as a Sound Technician I’m having to wine and dine my clients. Before, I would never remember to save my receipts after a night out, but with the ClickBooks app, I just take a picture of the receipt at the restaurant or bar, and job done. It saves me thousands in deductions every year.',
              'bubble_text'    => 'I’m actually making money with ClickBooks. Before I would never remember to save my receipts...But now I just take a picture...and job done. It saves me thousands in deductions every year.',
              'name'           => 'Tue Johannesen',
              'position'       => 'Sound Technician'
            ),
            array( 
              'img'            => '[!img_dir!]JakobBrunsholm.png',
              'html_img'       => '<img src="[!img_dir!]JakobBrunsholm.png" />',
              'heading'        => 'It’s almost fun doing my books now',
              'text'           => 'I was always scared of Bookkeeping even though I have been self-employed for a number of years. It was always a hassle to do and I was never sure if I did it correctly or got all my deductions. With the simplicity of ClickBooks all these worries are behind me. Now I just take a picture of my receipts with their app, and everything else is taken care of. If I have a question about anything accounting related I just give them a call and get the answer immediately. All without me having to worry about the price, since everything is included in the monthly fee. It’s almost fun doing my books now.',
              'bubble_text'    => 'I was always scared of Bookkeeping even though I have been self-employed for a number of years. I was never sure if I did it correctly or got all my deductions. With ClickBooks I just take a picture of my receipts with their app, and everything else is taken care of. It’s almost fun doing my books now.',
              'name'           => 'Jakob Brunsholm',
              'position'       => 'Independent Mover'
            ),
        );

    /**
     * Returns the cases variable as json string.
     * ideal for javascript
     *
     * @return string json
     */
    public function getJSON()
    {
        return json_encode(array_map(array($this, 'img_add_dir'), array_values($this->cases) ));
    }

    /**
     * Returns the cases as html formated string.
     *
     * @param  string $template of the line item
     * @param  int optional which record to show
     * @return string body of document
     */
    public function get($template,$index=null)
    {
        $result      = '';
        $line_marker = 'odd';
        $counter     = 0;
        foreach ($this->cases as $key=>$case){
            //if index is defined
            //"continue" on all other records
            if(!is_null($index))
                if($key!=$index)
                    continue;
            
            
            //add even/odd marker
            $line_marker = ($line_marker=='even'?'odd':'even');
            //replaces all [!keys!] in template into value fe. [!name!] will be Tamir Rhuk
            //+ even/odd line's marker
            $result .= str_replace(
                        array_merge( 
                            array_map(array($this, 'prepare_pattern'), array_keys($case) ) , 
                            array('[!line_marker!]', '[!counter!]')
                        ), 
                        array_merge( 
                            array_map(array($this, 'img_add_dir'), array_values($case) ), 
                            array( $line_marker, $counter++ ) 
                        ), 
                        $template
                );
        }
    	return $result;
    }
    
    /**
     * Add [! to before & !] after string
     *
     * @param  string $input
     * @return string result
     */
    function prepare_pattern($value)
    {
        return sprintf( '[!%1$s!]' , $value );
    }
    /**
     * Replace [!img_dir!] to image directory of cases 
     *
     * @param  string $input
     * @return string result
     */
    private function img_add_dir($value){
        return str_replace('[!img_dir!]', Url::to("@web/frontend/assets/images/cases/", true) , $value);
    }
}
