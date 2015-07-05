<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * GoogleDocReader is the model for reading google documents.
 */
class GoogleDocReader extends Model
{

    /**
     * Gets the document form googledoc and returns body.
     *
     * @param  string $url of the embed document
     * @return string body of document
     */
    public function get($url)
    {
    	$document = @file_get_contents($url.'&t='.substr( md5(rand()), 0, 7));
		if($document===false)
			return 'Error on server during processing document.';
		
		//get body
		preg_match("/<body[^>]*>(.*?)<\/body>/is", $document, $matches);
		$body = $matches[1];
		
		//get style
		preg_match("/<style[^>]*>(.*?)<\/style>/is", $document, $matches);
		$style = $matches[1];
		
        return '<style type="text/css">' . $style . '</style>' . $body;
    }
}
