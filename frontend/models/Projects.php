<?php
    namespace app\models;

    use yii\db\ActiveRecord;

    class Projects extends ActiveRecord
    {

        public function rules(){
            return [
                [['title', 'description', 'category'], 'required'],
            ];
        }

    }
?>