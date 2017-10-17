<?php

namespace Stir;


class Stir
{
		protected $app;

		public function __construct($app)
		{
				$this->app = $app;
				$this->router = $app->router;
		}

		public function registerAuthRoutes()
		{
				$this->router->group(['middleware' => ['web']], function(){

					// Authentication Routes...
					$this->router->get('login',
						'\Stir\Http\Controllers\Auth\LoginController@showLoginForm')
						->name('login');

					$this->router->post('login',
						'\Stir\Http\Controllers\Auth\LoginController@login');

					$this->router->post('logout',
						'\Stir\Http\Controllers\Auth\LoginController@logout')
						->name('logout');

					// Registration Routes...
					$this->router->get('register',
						'\Stir\Http\Controllers\Auth\RegisterController@showRegistrationForm')
						->name('register');
					$this->router->post('register',
						'\Stir\Http\Controllers\Auth\RegisterController@register');

					// Password Reset Routes...
					$this->router->get('password/reset',
						'\Stir\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')
					->name('password.request');

					$this->router->post('password/email',
						'\Stir\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')
					->name('password.email');

					$this->router->get('password/reset/{token}',
						'\Stir\Http\Controllers\Auth\ResetPasswordController@showResetForm')
					->name('password.reset');

					$this->router->post('password/reset',
						'\Stir\Http\Controllers\Auth\ResetPasswordController@reset');
				});

		}

}
