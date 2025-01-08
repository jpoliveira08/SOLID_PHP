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

    public function formatJson()
    {
        return json_encode(['name' => $this->name, 'email' => $this->email]);
    }

    public function validate($data)
    {
        if (!isset($data['name'])) {
            throw new Exception("Bad Request, User Requires a name");
        }

        if (!isset($data['email'])) {
            throw new Exception("Bad Request, User Requires a email");
        }
    }
}

Route::get('/', function () {
   $data = $request->query();

   $user = new User($data);
   $user->validate($data);

   return $user->formatJson();
});