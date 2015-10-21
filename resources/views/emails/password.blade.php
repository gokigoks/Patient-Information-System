Hello {{ $user->role }}!, <br>

You have been registered at PIS.


Your username is {{ $user->email }}
Click here to reset your password: {{ url('password/reset/'.$token) }}
