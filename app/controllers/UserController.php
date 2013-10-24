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
			// var_dump(Auth::attempt($campos,true));
			// exit;
			if ( Auth::attempt($campos,true) ) 
			{
				// return Redirect::route('home');
				return View::make('templates.default');

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