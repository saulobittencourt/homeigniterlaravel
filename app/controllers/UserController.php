<?php
	/**
	* 
	*/
	class UserController extends BaseController
	{
		
		public function getLogin()
		{
			return View::make('login.index');
		}

		public function postLogin()
		{
			$campos = [
				"email" => Input::get("email"),
				"password" => Input::get("password")
			];
			if (Auth::attempt($campos)) 
			{
				return Redirect::route('home')->
				with('logado','usuário logado');
			} else{
				return Redirect::route('user')->
				with('flash_error','E-mail e/ou senha inválidos, tente novamente')->
				withInput(Input::except('password'));
			}
		}

		public function getLogout()
		{
			Auth::logout();
			return Redirect::route('user');
		}
	}
?>