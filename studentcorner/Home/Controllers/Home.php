<?php
namespace Modules\Home\Controllers;

use Modules\Home\Models\HomeModel;



class Home extends BaseController
{
    private $HomeModal;
    function __construct()
    {
        $this->HomeModal = new HomeModel();
    }

    public function index()
    {
        if (!session()->has('frm-sts')) {
            if ($this->request->is('post')) {
                $from_station = trim($this->request->getVar('from_station'));
                $to_station = trim($this->request->getVar('to_station'));
                $check_from_to_stations_exists = $this->HomeModal->is_from_and_stations_exists($from_station, $to_station);
                session()->set('frm-sts', $from_station);
                session()->set('to-sts', $to_station);

                if ($check_from_to_stations_exists) {
                    return redirect()->to(base_url('/track_bus'));
                } else {
                    return redirect()->to(base_url('/track_bus'));
                }
            }
            return view('Modules\Home\Views\welcome_page.php');
        } else {
            return redirect()->to(base_url('/track_bus'));
        }
    }
    public function track_bus()
    {
        if (session()->has('frm-sts') || session()->has('loginname')) {
            return view('Modules\Home\Views\chat_ui');
        } else {
            return redirect()->to(base_url());
        }
    }
    public function receive_chat_message()
    {
        $msg = $this->request->getVar('message');
        $store_msg = $this->HomeModal->store_msg($msg);
        if ($store_msg) {
            return true;
        }
    }
    public function get_last_10_minutes_chat()
    {
        $store_msg = $this->HomeModal->get_chat();

        // Encode the $store_msg array to JSON
        $json_response = json_encode($store_msg);

        // Set the appropriate content type for JSON response
        header('Content-Type: application/json');

        // Echo the JSON response
        echo $json_response;
    }
    public function exit()
    {
        session()->setFlashdata('lgot', 'You Are Successfully Logged Out');
        session()->destroy();
        return redirect()->to(base_url());
    }
    public function signup()
    {
        if ($this->request->is('post')) {
            $password = trim($this->request->getVar('password'));
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'UserName' => trim($this->request->getVar('username')),
                'Password' => $hashed_password,
                'PhoneNumber' => trim($this->request->getVar('phone')),
                'Mail' => $this->request->getVar('email'),
            ];
            $res = $this->HomeModal->insert_user($data);
            if ($res) {
                return redirect()->to(base_url())->with('sts', 'Accounted Created Successfully');
            }
        }
        if(session('loginname')){
            return redirect()->to(base_url());
        }
        return view('Modules\Home\Views\create_account.php');

    }
    public function login()
    {
        if ($this->request->is('post')) {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $data = $this->HomeModal->authenticateuser($email);
            if (!isset($data) || count($data) === 0) {
                session()->setFlashdata('error', 'Invalid email or password.');
                return redirect()->to(site_url('/login'));
            } else {
                session()->set('loginemail', $data['Mail']);
                if (password_verify($password, trim($data['Password']))) {
                    session()->setFlashdata('scss', 'Login Success Now You Can Explore More Things');
                    session()->set('loginname', $data['UserName']);
                    echo view('Modules\Home\Views\dashboard');
                } else {
                    session()->setFlashdata('error', 'Invalid email or password.');
                    return redirect()->to(site_url('/login'));
                }
            }
        } else {
            if(session('loginname')){
                return redirect()->to(base_url());
            }
            return view('Modules\Home\Views\login.php');
        }

    }
    public function previous_notes(){
        return view('Modules\Home\Views\previous_notes.php');
    }
    public function books(){
        return view('Modules\Home\Views\book_products.php');
    }
    public function view_product(){
        return view('Modules\Home\Views\view_product.php');
   
    }
}

?>