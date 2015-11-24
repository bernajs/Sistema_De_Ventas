<?php
	namespace controllers;
	use libs\Controller;
	use libs\View;
	use libs\AuthenticationUtils;
	use libs\Captcha;

	use libs\Session;
	class Authentication extends Controller{

		public function __construct(){
			parent::__construct();
			
		}

		public function showLogin(){
			try{
				if(AuthenticationUtils::isAuthenticated()){
			 		header('Location: '.URL_BASE."/index.php/Index/index");
			 		exit();
		 		}else{
		 			$a = explode("\\",get_class($this))[1];			
					$this->view->render($a, "showLogin",null, $this->getErrores());
		 		}
			}
			catch(\Exception $e){
				View::renderErrors(array($e->getMessage()));
			}
			
			
		}

		public function login($params){
			//Si esta autenticado redireccionar a la vista Principal del sitio
			if (AuthenticationUtils::login($params['username'], $params['password'])){
				header('Location: '.URL_BASE."/index.php/Index/index");
				exit();
				
			}
			header('Location: '.URL_BASE."/index.php/Authentication/showLoginWithCaptcha");

		}

		public function showLoginWithCaptcha(){
			$c = new Captcha();
			$c->generateCaptcha();
			$a = explode("\\",get_class($this))[1];			
			$this->view->render($a, "showLoginCaptcha",null, $this->getErrores());
		}

		public function checkLoginCaptcha($params){
			//Si esta autenticado redireccionar a la vista Principal del sitio y el captcha coincide con el generado
			if(Session::getValue('captcha') == $params['captcha']){
				if (AuthenticationUtils::login($params['username'], $params['password'])){
					header('Location: '.URL_BASE."/index.php/Index/index");
					
					
				}
				header('Location: '.URL_BASE."/index.php/Authentication/showLoginWithCaptcha");
			}
			
			header('Location: '.URL_BASE."/index.php/Authentication/showLoginWithCaptcha");

		}

		public function logout(){
			
			AuthenticationUtils::logout();
			header('Location: '.URL_BASE."/index.php/Authentication/showLogin");

			exit();
			

		}
	}

?>