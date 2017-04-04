<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 4/04/17
 * Time: 21:42
 */

namespace App\Http\Controllers;


use Acacha\Stateful\Exceptions\IllegalStateTransitionException;
use App\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController
{
    public function user(Request $request)
    {
        dd($request->input('user'));
        $enrollment = new Enrollment();
        $enrollment->user_id = $request->input('user');
        $enrollment-> state = 'step1';
        $enrollment->save();

        try{
            $enrollment->step1step2();
        } catch (IllegalStateTransitionException $e){
            return ['status' => 'Error saving user IllegalStateTransitionException'];
        }
        return ['status' => 'User saved correctly'];
    }

}