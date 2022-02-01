<?php


namespace App\Classes;


class User
{
    public $city = 'Dhaka';
    protected $country = 'Bangladesh';
    private $area = 'Kawran Bazar';

    public function login()
    {
        echo 'In login';
    }
    protected function logout()
    {
        echo 'In logout';
    }
    private function profile()
    {
        echo 'In profile';
    }
}