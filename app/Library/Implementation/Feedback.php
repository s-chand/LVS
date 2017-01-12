<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/01/2017
 * Time: 12:11
 */

namespace App\Library\Implementation;
use Illuminate\Support\Facades\DB;


use App\Library\Contracts\IFeedBackContract;

class Feedback implements IFeedBackContract
{

    protected $email;
    protected $fullName;
    protected $message;

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
    /**
     * @return mixed
     */
    public function save()
    {
        // TODO: Implement save() method.
        DB::table('feedback')->insert([
            'fullname'=>$this->fullName,
            'email'=>$this->email,
            'message'=>$this->message
        ]);
        return true;
    }
    public function fetch()
    {
        // TODO: Implement fetch() method.
        return DB::table('feedback')->get();
    }
    public function fetchById($id)
    {
        return DB::table('feedback')->where('id',$id)->first();
    }
}