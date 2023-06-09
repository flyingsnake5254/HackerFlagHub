<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ProblemsModel;

class ProblemsController extends BaseController
{
    use ResponseTrait;
    protected ProblemsModel $problemsModel;
    public function __construct(){
        $this->problemsModel = new ProblemsModel();
    }
    public function index()
    {
        return view('problems');
    }

    public function p1()
    {
        return view('web/web_robots');
    }

    public function p2()
    {
        return view('ter/img_hide');
    }

    public function robots()
    {
        return view('web/robots');
    }

    public function ans_page()
    {
        return view('web/saskme');
    }

    public function checkAnswer(){
        $data = $this->request->getJSON();

        $id = $data->id;
        $userAns = $data->ans;

        $res = $this->problemsModel->where("id", $id)->first();

        if(!$res){
            return $this->respond([
                "msg"=>"wrong answer"
            ]);
        }

        if ($res['ans'] !== $userAns){
            return $this->respond([
                "msg"=>"wrong answer"
            ]);
        }
        
        $score = session()->get('score');
        $newscore = intval($score) + $res['score'];
        session()->set('score', $newscore);
        
        return $this->respond([
            "msg"=>"correct",
            "score"=>$res['score']
        ]);

    }
}
