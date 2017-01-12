<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/01/2017
 * Time: 12:08
 */

namespace App\Library\Contracts;


interface IFeedBackContract
{
    public function save();
    public function fetch();
    public function fetchById($id);

}