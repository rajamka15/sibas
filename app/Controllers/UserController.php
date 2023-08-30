<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Email;
use Config\Services;
use App\Models\UserModel;

class UserController extends BaseController
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
		// log_message('debug', 'Some variable did not contain a value.');

		// error_log("Big trouble, we're all out of FOOs!", 1,"operator@example.com");
		// start session
		$this->session = Services::session();
		$this->id_user = $this->session->userData['id'];
		$this->nama_user = $this->session->userData['nama_user'];
		$this->username = $this->session->userData['username'];
		$this->password_user = $this->session->userData['password'];
		$this->jenis_user = $this->session->userData['jenis_user'];
		$this->status_user = $this->session->userData['status'];
		$this->email_user = $this->session->userData['email'];
		// $this->id_user = $this->session->userData['id'];
	}

    //--------------------------------------------------------------------

	/**
	 * Displays users page.
	 */
	public function index()	{
		// check if user is signed-in if not redirect to login page
			// **Buat Object dari class usermodels
			$user = new \App\Models\Usermodel();

			// ** Ambil / panggil semua data yang ada di table user (yang ada di DB)
			$getUser = $user->findAll();

			// ** Kirim Data ke view
			$data =[
					"list_user" => $getUser
			];
			return view ('user/index', $data);
	}
	public function profile(){
		$user = new \App\Models\Usermodel();

		// ** Ambil / panggil semua data yang ada di table user (yang ada di DB)
		$getUser = $user->find($this->id_user);
		// error_log(print_r($getUser, true), 0);

		// ** Kirim Data ke view
		$data =[
				"list_user" => $getUser
		];
		return view ('user/profile', $data);
	}
	public function submit_edit() {
			$id = $this->id_user;
			$nama_user = $this->request->getPost('nama_user');
			$email = $this->request->getPost('email');
			$user_name = $this->request->getPost('username');
			// $password = $this->request->getPost('password');

			$data = [
					"nama_user" => $nama_user,
					"email" => $email,
					"username" => $user_name
					// "password" => $password,
					// "jenis_user" => $jenis_user
			];

			$user = new \App\Models\UserModel();
			$displayMessage =[
					"message" => "",
					"url" => base_url()."user/profile",
					"type" => ""
			];

					$update = $user->update($id, $data);

					if($update){
						$this->session->set('userData', [
				            'id' 			=> $this->id_user,
				            'nama_user' 		=> $nama_user,
				            'username' 		=> $user_name,
				            'password' 		=> $this->password_user,
				            'jenis_user' 		=> $this->jenis_user,
				            'status' 		=> $this->status_user,
				            'email' 		=> $email
				        ]);
							$displayMessage["message"] = "Data Berhasil Diupdate";
							$displayMessage["type"] = "success";
					} else {
							$displayMessage["message"] = "Tidak Dapat Mengupdate Data";
							$displayMessage["type"] = "error";
					}
					return view("components/alert", $displayMessage);
	}
	public function change(){
		$displayMessage =[
				"msg" => "",
				"error" => false
		];
		return view('user/ch_password', $displayMessage);
	}
	public function change_password(){
		// log_message("alert","masuk_debug");
		// validate request
		$rules = [
			 'password_old' => [
 					 'rules'  => 'required',
 					 'errors' => [
 							 'required' => 'Password Lama Harus Di isi!!',
 							 // 'max_length' => 'Password Tidak boleh lebih dari 8 karakter!!',
 					 ],
 			 ],
			 'password' => [
 					 'rules'  => 'required',
 					 'errors' => [
 							 'required' => 'Password Baru Harus Di isi!!',
 							 // 'max_length' => 'Password Tidak boleh lebih dari 8 karakter!!',
 					 ],
 			 ],
			 'password_confirm' => [
 					 'rules'  => 'matches[password]',
 					 'errors' => [
 							 'matches' => 'Konfirmasi Password Tidak sesuai!!',
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
			return view("user/ch_password", $displayMessage);
			// log_message("debug","masuk_debug");
			// return redirect()->route('login')->withInput()->with('errors', $this->validator->getErrors());
		}

		// check credentials
		$users = new UserModel();

		// $user = $users->where('id', $this->id_user)->first();
		$password_old = $this->request->getPost('password_old');
		if (! password_verify($password_old, $this->password_user) )
		{
			$displayMessage["msg"] = ["Password Lama Tidak Sesuai!"];
			$displayMessage["error"] = true;
			return view("user/ch_password", $displayMessage);
			}
			$id = $this->id_user;
			// $nama_user = $this->request->getPost('nama_user');
			// $email = $this->request->getPost('email');
			// $user_name = $this->request->getPost('username');
			$password = $this->request->getPost('password');

			$data = [
					"password" => $password,
					// "jenis_user" => $jenis_user
			];

			$user = new \App\Models\UserModel();
			$displayMessage =[
					"message" => "",
					"url" => base_url()."user/change",
					"type" => ""
			];

					$update = $user->update($id, $data);

					if($update){
						$this->session->set('userData', [
										'id' 			=> $this->id_user,
										'nama_user' 		=> $this->nama_user,
										'username' 		=> $this->username,
										'password' 		=> $password,
										'jenis_user' 		=> $this->jenis_user,
										'status' 		=> $this->status_user,
										'email' 		=> $this->email_user
								]);
							$displayMessage["message"] = "Data Berhasil Diupdate";
							$displayMessage["type"] = "success";
					} else {
							$displayMessage["message"] = "Tidak Dapat Mengupdate Data";
							$displayMessage["type"] = "error";
					}
					return view("components/alert", $displayMessage);
	}
}
