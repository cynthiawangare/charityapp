<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class User_model extends CI_Model
{
       
    function __construct()
    {
            parent::__construct();
    }

    function add($data,$table){
        $this->db->insert($table,$data);

		return $this->db->insert_id(); 
    }

    function user_validate(){  
		$email = $this->input->post('username');
		 $password = md5($this->input->post('password')); 
		 
		$this->db->where(array('username'=>$email,'password'=>$password,'isactive'=>1));
		$result = $this->db->get('donor');
		if($result->num_rows() == 1)
			return true;
		return false;
	}

    function get_user_details($email){
		$this->db->where('username',$email);
		$user = $this->db->get('donor');
		if($user->num_rows() > 0){
			
			foreach($user->result() as $row){
				$user_details = array(
						'donorID'=>$row->donorid,
						'username'=>$row->username,
						'email'=>$row->email,
						'fname'=>$row->first_name,
						'usergroup'=>$row->category,
						'phone'=>$row->phone_number
				);
			}

			return $user_details;
		}else{
			return false;
		}

	}
	
	function fetch_donors(){
		
		$query = "SELECT * FROM `donor` where category='donor' order by donorid desc ";

			

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}
	function publishuser($uid,$val){
		$sql = "UPDATE donor
					SET isactive=$val
					WHERE donorid=".$uid;
	
			$query = $this->db->query($sql);
			if ($query){
				return 0;
			}
			else{
				return 1;
			}   
	}


	function fetch_donor($id){
		 
		$query = $this->db->get_where('donor', array('donorid' => $id));
		if ( $query->num_rows() > 0){
			return $query->row();
		} else {
			return false;    
		}
	
    }

    function fetch_user($id){
		 
        $query = $this->db->get_where('donor', array('donorid' => $id));
        if ( $query->num_rows() > 0){
            return $query->row();
        } else {
            return false;    
        }
    
    }
/*	function confirmation(){
			
		
$email = $this->session->userdata('email');


		
		
		$message = "Thank you for your donations";
			 
		$from = "cynthiandirangu@gmail.com";
		

		$subject = "Contact from Frontfin Website";

		$line="\n";

		

		$to = $email;

		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
		$headers .= $from;

		mail($to,$subject,$message,$headers); 
		
	} **/
	
	 function confirmation() {
        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $this->session->userdata('email');
        $subject = "";
        $message = "";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        /**if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
		**/
    }

}