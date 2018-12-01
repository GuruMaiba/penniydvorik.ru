<?php
namespace app\models\form;

use Yii;
use yii\base\Model;

/**
 *
 */
class SecretKeyForm extends  Model
{
    public $pass;

    private $secretKey = '123321';

    public function rules()
    {
        return [
            ['pass', 'required'],
            ['pass', 'validatePass'],
        ];
    }

    public function validatePass($attr) {
        if (!$this->hasErrors()) {
            if ($attr != secretKey) {
                $this->addError('pass', 'Incorrect secret key.');
            }
        }
    }
}
