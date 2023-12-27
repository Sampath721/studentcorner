<?php
namespace Modules\Home\Models;

use CodeIgniter\Model;
use CodeIgniter\View\Table;

class HomeModel extends Model
{
    public function is_from_and_stations_exists($from, $to)
    {
        session()->set('from', $from);
        session()->set('to', $to);
        $query = "SELECT * FROM bus_stations WHERE FromStation='$from' and ToStation='$to'";
        $result = $this->db->query($query);
        if ($result->getNumRows() > 0) {
            return true;
        } else {
            $data = [
                'FromStation' => $from,
                'ToStation' => $to,
            ];
            $query = $this->db->table('bus_stations')->insert($data);
            return false;
        }
    }

    public function store_msg($msg)
    {
        $frm_sts = session('frm-sts');
        $to = session('to-sts');
        $get_uid_frm_sts = "SELECT id FROM bus_stations WHERE FromStation='$frm_sts' AND ToStation='$to'";
        $id = $this->db->query($get_uid_frm_sts);
        $uora=session()->has('loginname')?session('loginname'):'Anonymous';
        date_default_timezone_set('Asia/Kolkata');
        // Get the current timestamp
        $current_timestamp = time();

        // Format the timestamp to 'HH:MM:SS' using the date function
        $current_time = date('h:i:s A', $current_timestamp);
        $chat_msg = [
            'id' => '',
            'user_name'=>$uora,
            'UID' => $id->getRowArray(),
            'chat_messages' => $msg,
            'message_time' => $current_time
        ];
        $insert_chat = $this->db->table('chat_messages')->insert($chat_msg);
        if ($insert_chat) {
            return true;
        } else {
            echo 'error occoured';
        }
    }

    public function get_chat()
    {
        $frm_sts = session('from');
        $to = session('to');
        $get_uid_frm_sts = "SELECT id FROM bus_stations WHERE FromStation='$frm_sts' AND ToStation='$to'";
        $result = $this->db->query($get_uid_frm_sts);

        // Check if the query returned any rows
        if ($result->getNumRows() > 0) {
            $row = $result->getRowArray();
            $id = $row['id'];

            // Fetch the chat messages using the retrieved ID
            $chat = $this->db->table('chat_messages')->select('*')->where('UID', $id)->get()->getResultArray();

            return $chat;
        } else {
            // Handle the case when no rows are found
            return [];
        }
    }
    public function insert_user($data){
        $res=$this->db->table('users')->insert($data);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    public function authenticateuser($email)
    {

        $row = $this->db->table('users')
            ->where('Mail', $email)
            ->get()
            ->getRowArray();

        return $row;
    }


}
?>