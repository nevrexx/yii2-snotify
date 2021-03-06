<?php

namespace bupy7\notify\ss\forms;

use Yii;
use yii\base\Model;
use bupy7\notify\ss\validators\IsArray as IsArrayValidator;

/**
 * Form of notification to user.
 * @author Belosludcev Vasilij <https://github.com/bupy7>
 * @since 1.0.0
 */
class Notification extends Model
{
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $message;
    /**
     * @var integer
     */
    public $type;
    /**
     * @var integer
     */
    public $recipient;
    /**
     * @var boolean
     */
    public $unread;
    /**
     * @var integer
     */
    public $created_at;
    /**
     * @var array
     */
    public $params = [];
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message', 'type', 'recipient'], 'required'],
            [['title'], 'string', 'max' => 255],
            [['message'], 'string', 'max' => 65535],
            [['type', 'recipient'], 'integer'],
            [['params'], IsArrayValidator::className()],
        ];
    }
}
