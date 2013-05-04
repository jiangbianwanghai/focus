<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function fetch_all($field = array(), $offset = 0, $limit = 8)
    {
        $result = array(
            'num' => 0,
            'data' => array()
        );
        if ($field) {
            $field_str = implode(',', $field);
            $this->db->select($field_str);
        }
        $query = $this->db->get('data', $limit, $offset);
        $result['num'] = $this->db->count_all_results('data');
        if ($result['num'] > 0) {
            foreach ($query->result_array() as $row)
            {
                $result['data'][] = $row;
            }
        }
        return $result;
    }
}

/* End of file model_data.php */
/* Location: ./application/models/model_data.php */