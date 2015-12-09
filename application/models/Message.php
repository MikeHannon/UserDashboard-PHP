<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Model{
  public function create($data) //data is an array
  {
    $query = "INSERT into messages (message_content, wall_id, user_id, updated_at, created_at) values (?,?,?, now(), now())";
    $values = array($data['message_content'], $data['wall_id'], $data['user_id']);
    $this->db->query($query,$values);
    return true;
  }
  public function index_wall_messages($wall_id){
    $query = "SELECT messages.message_content, commentators.first_name as f_name, commentators.last_name as l_name, comments.comment_content, comments.message_id, users.first_name, users.last_name, messages.id, messages.created_at from walls left join users on walls.user_id = users.id left join messages on walls.id = messages.wall_id left join comments on messages.id = comments.message_id left join users as commentators on commentators.id = comments.user_id where walls.id = ?";
    $values = array($wall_id);
    return $this->db->query($query, $values)->result_array();
  }

}
