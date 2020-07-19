<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
SESSION_START();
class site extends CI_Controller {

	public function index($page = null)
	{
				#Load site configuration
				$this->load->config('site');
				$data['title'] = $this->config->item('title');
				$data['site_description'] = $this->config->item('description');

				#Is the site down for maintence?
				if($this->config->item('maintence_mode')) {
					show_error('The site is down for maintence');
				}

				#If the page isn't assigned set it to start
                if($page == null){$page = 'start';}

				#Fix
                $page = htmlentities(mysql_real_escape_string($page));

                # - Initialize "page" model.
		    $this->load->model('pageDB');

				#Is the page a redirect?
				$redirect = $this->pageDB->is_redirect($page);
				if($redirect != null){
					header('Location: '. $redirects);

				#Is the requested page closed?
				if($this->pageDB->is_closed($page)){
					show_404();
				}

				#Does the page even exists?
				if(!$this->pageDB->page_exists($page)){
					show_404();
				}
                # - Load page data
                 $data['menuItems'] = $this->pageDB->getMenuItems();
                 $data['pageContent'] = $this->pageDB->getPageContent($page);
                 $data['widgets']  = $this->pageDB->getWidgets($page);

		        # - Load Views {head, navigation, page, sidebar, end}
				$this->load->view('head', $data);
				$this->load->view('navigation', $data);
				$this->load->view('page');
				$this->load->view('sidebar', $data);
				$this->load->view('end');
	}

	public function login() {
			#Declare variable
			$data['failure'] = "";
			#Load the config
			$this->config->load('user');
			$username = $this->config->item('user');
			$password = $this->config->item('password');
			#Is the user trying to login?
			if(isset($_POST['password']) && isset($_POST['username'])){
				if($_POST['username'] == $username && $_POST['password'] == $password){
					$_SESSION['admin'] = true;
					header("Location: " .base_url() . 'admin');
				}else{
					#Login failed
					$data['failure'] = "Ошибка входа.";
				}
			}
			if($password == ''){
					show_error('Пустой пароль не допускается. Вы забыли установить его?');
				}
			$this->load->view('login/login', $data);
		}
	}
}
