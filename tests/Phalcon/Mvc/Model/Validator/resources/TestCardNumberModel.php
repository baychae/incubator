<?php

class TestCardNumberModel extends \Phalcon\Mvc\Model
{

    public $cardnumber;
    public $type;

    public function validation()
    {
        $params = array(
            'field' => 'cardnumber'
        );
        if ($this->type) {
            $params['type'] = $this->type;
        }
        $this->validate(
            new \Phalcon\Mvc\Model\Validator\CardNumber(
                $params
            )
        );

        return $this->validationHasFailed() != true;
    }

}
