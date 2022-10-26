<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $name = "Mohamad Rangga";
    private $nrp = "200914021";
    private $course = " ";
    private $task = " ";
    private $quiz = " ";
    private $mid_term = " ";
    private $final = " ";
    private $grade = " ";

    public function index(){
        return view('person.index');
    }
    public function sendData(){
        $name = $this->name;
        $nrp = $this->nrp;
        $course = $this->course;
        $task = $this->task;
        $quiz = $this->quiz;
        $mid_term = $this->mid_term;
        $final = $this->final;
        $grade = $this->grade;


        return view("person.send-data", compact("name","nrp","course","task","quiz","mid_term","final","grade"));
    }
}
