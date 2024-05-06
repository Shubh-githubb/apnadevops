<?php

namespace App\Controllers;

use App\Models\Questions;
use App\Models\Tests;
use App\Models\Options;


class Home extends BaseController
{
    private $questions;
    private $tests;
    private $options;


    public function __construct(){
        $this->questions = new Questions();
        $this->tests = new tests();
        $this->options = new options();
    }
    
    public function index(): string
    {
        return view('home');
    }

    public function getQuizQuestions(){
       //arguments of function getQuestions($select = "*",$where = [],$whereIn = [], $groupBy = "", $isStrict = false)
        $questions = $this->questions->getQuestions("*");
        // print_r($questions);exit;
        if(!empty($questions)){
            return view("quiz",[
                "questions" => $questions
            ]);
        }
    }

    public function createTests(){
        $query = $this->questions->select('qid,paper_code,subject_code')
                    ->where("paper_code", "java")
                    ->where("subject_code", 1)
                    ->where("difficulty_level", "easy")
                    ->where('test_id',0)
                    ->limit(20)
                    ->get();
                
        $questionsData = $query->getResultArray();
        $testData = [
            'paper_code' => "java",
            'subject_code'=> 1,
            'test_name' => 'java-1',
            'test_description' => 'testingbyshubham',
            'views' => 1,
            'likes' => 2,
            'attempts' => 3,

        ];
    
        $this->tests->insert($testData);
    
        $testId = $this->tests->getInsertID();

    
        $updateData = []; // Initialize an empty array to store the updated data

        foreach ($questionsData as $question) {
            $updateData[] = [
                'qid' => $question['qid'],
                'test_id' => $testId, 
            ];
        }
        $this->questions->updateBatch($updateData, 'qid');
    }

    public function insert_option(){
        $data = array(
            'option_key' => "key",
            'option_value'  =>'value'
        );
        $this->options->insert($data);

    }
}
