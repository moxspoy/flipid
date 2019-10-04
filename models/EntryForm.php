<?php
/**
 * Created by   : MNurilmanBaehaqi
 * Date         : 03 October 2019
 * Time         : 20:51
 * Github       : https://github.com/moxspoy
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $email;
    public $name;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email']
        ];
    }

}