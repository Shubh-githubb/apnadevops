<?php

namespace App\Models;

use CodeIgniter\Model;

class Questions extends Model
{
    protected $table            = 'questions';
    protected $primaryKey       = 'qid';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['qid','question','opt1','opt2','opt3','opt4','answer','description','correct','attempts','paper_code','subject_code','test_id','views','likes','difficulty_level','type','marks','negative_mark','created_at','updated_at'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

        

    public function getQuestions($select = "*",$where = [],$whereIn = [], $groupBy = "", $isStrict = false){
        $query = $this->asArray()->select($select);
        if (!empty($where))
            $this->where($where);
        if (!empty($whereIn)){
            $this->groupStart();
            foreach ($whereIn as $key => $value) {
                if ($isStrict) {
                    $this->whereIn($key, $value);
                } else {
                    $this->orWhereIn($key, $value);
                }
            }
            $this->groupEnd();

        }

        if (!empty($groupBy))
            $this->group_by($groupBy);

        $result = $query->get()->getResultArray();
        return $result;
    }
}
