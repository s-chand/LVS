<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/01/2017
 * Time: 12:06
 */

namespace App\Library;


use App\Library\Contracts\IFeedBackContract;
use App\Library\Implementation\Feedback;

class FeedBackHandler
{
    private $feedback=null;

    public function __construct(IFeedBackContract $ifeedback)
    {
        $this->feedback=$ifeedback;
    }
    public function StoreFeedback()
    {
        $this->feedback->save();
    }
    public function LoadFeedback()
    {
        // TODO: Load all the results and turn into Feedback classes

        return $this->feedback->fetch();
    }
    public function GetFeedback($id)
    {
        return $this->feedback->fetchById($id);
    }

}