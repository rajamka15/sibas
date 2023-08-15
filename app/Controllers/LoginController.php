<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Email;
use Config\Services;
use App\Models\UserModel;

class LoginController extends Controller
{
	/**
	 * Access to current session.
	 *
	 * @var \CodeIgniter\Session\Session
	 */
	protected $session;

	/**
	 * Authentication settings.
	 */
	protected $config;


    //--------------------------------------------------------------------

	public function __construct()
	{
		// start session
		$this->session = Services::session();
	}

    //--------------------------------------------------------------------

	/**
	 * Displays login form or redirects if user is already logged in.
	 */
	public function login()
	{
		if ($this->session->isLoggedIn) {
			return redirect('home');
		}
		$displayMessage =[
				"msg" => "",
				"error" => false
		];
			// log_message("alert","masuk_debug");
		return view('login', $displayMessage);
	}

    //--------------------------------------------------------------------

	/**
	 * Attempts to verify user's credentials through POST request.
	 */
	public function attemptLogin()
	{
		// log_message("alert","masuk_debug");
		// validate request
		$rules = [
			'username' => [
					 'rules'  => 'required',
					 'errors' => [
							 'required' => 'Username Harus Di isi!!',
					 ],
			 ],
			 'password' => [
 					 'rules'  => 'required',
 					 'errors' => [
 							 'required' => 'Password Harus Di isi!!',
 							 // 'max_length' => 'Password Tidak boleh lebih dari 8 karakter!!',
 					 ],
 			 ],
		];

					$displayMessage =[
							"msg" => "",
							"error" => ""
					];
		if (! $this->validate($rules)) {
			$displayMessage["msg"] = $this->validator->getErrors();
			$displayMessage["error"] = true;
			return view("login", $displayMessage);
			// log_message("debug","masuk_debug");
			// return redirect()->route('login')->withInput()->with('errors', $this->validator->getErrors());
		}

		// check credentials
		$users = new UserModel();

		$user = $users->where('username', $this->request->getPost('username'))->first();

		if ( is_null($user) || ! password_verify($this->request->getPost('password'), $user['password']) )
		{
			$displayMessage["msg"] = ["Salah Password !"];
			$displayMessage["error"] = true;
			return view("login", $displayMessage);
			}

		// check activation
			// if (!$user['active']) {
			// 	return redirect()->to('login')->withInput()->with('error', lang('Auth.notActivated'));
			// }

		// login OK, save user data to session
		$this->session->set('isLoggedIn', true);
		$this->session->set('userData', [
            'id' 			=> $user["id"],
            'nama_user' 		=> $user["nama_user"],
            'username' 		=> $user["username"],
            'password' 		=> $user["password"],
            'jenis_user' 		=> $user["jenis_user"],
            'status' 		=> $user["status"],
            'email' 		=> $user["email"]
        ]);

        // save login info to user login logs for tracking
        // get user agent
        $agent = $this->request->getUserAgent();


      return  redirect('home');
	}

    //--------------------------------------------------------------------

	/**
	 * Log the user out.
	 */
	public function logout()
	{
		$this->session->remove(['isLoggedIn', 'userData']);

		$displayMessage =[
				"msg" => "Terimakasih!",
				"error" => false
		];
			// log_message("alert","masuk_debug");
		return view('login', $displayMessage);
	}

}
