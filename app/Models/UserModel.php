<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType    = 'array';

    protected $allowedFields = [
        "nama_user",
        "email",
        "username",
        "password",
        "jenis_user"
    ];

    protected $useTimestamps = true;
  	protected $createdField  = 'created';
  	protected $updatedField  = 'modified';
  	protected $dateFormat  	 = 'datetime';

    // we need different rules for registration, account update, etc
	protected $dynamicRules = [
		'addUser' => [
			'nama_user'         => 'required|alpha_space|min_length[2]',
			'username'          => 'required|min_length[2]|is_unique[users.username,id,{id}]',
			'email' 		        => 'required|valid_email|is_unique[users.email,id,{id}]',
			'password'	        => 'required|min_length[5]',
			// 'password_confirm'	=> 'matches[password]'
		],
		'login' => [
      'username' => [
           'rules'  => 'required',
           'errors' => [
               'required' => 'Username Harus Di isi!!',
           ],
       ]
		]

	];

	protected $validationMessages = [];

	protected $skipValidation = false;

	// this runs after field validation
	protected $beforeInsert = ['hashPassword'];
	protected $beforeUpdate = ['hashPassword'];


    //--------------------------------------------------------------------

    /**
     * Retrieves validation rule
     */
	public function getRule(string $rule)
	{
		return $this->dynamicRules[$rule];
	}

    //--------------------------------------------------------------------

    /**
   * Hashes the password after field validation and before insert/update
   */
protected function hashPassword(array $data)
{
  if (! isset($data['data']['password'])) return $data;

  $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
  // unset($data['data']['password']);

  return $data;
}
}
