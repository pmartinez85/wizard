<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Acacha\Stateful\StatefulTrait;
use Acacha\Stateful\StatefulInterface;

class Enrollment extends Model implements StatefulInterface
{
    use StatefulTrait;


    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function person()
    {
        return $this->hasOne('App\Person');
    }

    /**
     * Transaction States
     *
     * @var array
     */
    protected $states = [
        'step1' => ['initial' => true],
        'step2' => ['final' => true]
    ];

    /**
     * Transaction State Transitions
     *
     * @var array
     */
    protected $transitions = [
        'step1step2' => [
            'from' => 'step1',
            'to' => 'step2'
        ],
        'step2step1' => [
            'from' => 'step2',
            'to' => 'step1'
        ]
    ];

    /**
     * @return bool
     */
    protected function validateStep1step2()
    {
//        $validate = true;
//        if (!$validate) {
//            $this->addValidateProcessMessage();
//        }
//
//        return $validate;
        return true;
    }

//    /**
//     * @return bool
//     */
//    protected function validateActivate()
//    {
//        //dd("validateActivate");
//        return true;
//    }
//
//    /**
//     * @return bool
//     */
//    protected function validateFail()
//    {
//        //dd("validateFail");
//        return true;
//    }
//
//    /**
//     * @return bool
//     */
//    protected function validateClose()
//    {
//        //dd("validateClose");
//        return true;
//    }
//
//    protected function beforeProcess() {
//        //dd("doing something before entering processing state");
//    }
//
//    protected function afterProcess() {
//        //dd("doing something after leaving processing state");
//    }

}

