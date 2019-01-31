<?php 

use CodeIgniter\Model;

class classes extends Model
{
	protected $table      = [
'COMP0001' => ['id'=>1337, 'name' => 'Database', 'level'=> 2],
'COMP0002' => ['id'=>1338, 'name' => 'C++', 'level'=> 1],
'COMP0003' => ['id'=>1339, 'name' => 'Advanced Wingdings', 'level'=>1]
];

public function find($id = null)
	    {
	        return $this->data[$id];
	    }
	
	    public function findAll(int $limit = 0, int $offset = 0)
	    {
	        return $this->data;
	    }
		
        
        

}

?>