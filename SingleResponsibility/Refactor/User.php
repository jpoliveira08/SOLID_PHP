<?php

declare(strict_types=1);

class User
{
    public string $name;
    public string $email;

    public function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
    }
}

Route::get('/', function () {
   $data = request()->query();

   UserRequest::validate($data);

   $user = new User($data);

   return Json::from($data);
});