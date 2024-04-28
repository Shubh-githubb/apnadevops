<?php

namespace App\Controllers;

use App\Models\Questions;

class Home extends BaseController
{
    private $questions;

    public function __construct(){
        $this->questions = new Questions();
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
}
