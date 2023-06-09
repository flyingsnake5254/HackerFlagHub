<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ScoreboardModel;
use CodeIgniter\API\ResponseTrait;

class ScoreboardController extends BaseController
{
    use ResponseTrait;

    protected ScoreboardModel $scoreboardModel;

    public function __construct(){
        $this->scoreboardModel = new ScoreboardModel();
    }
    public function index()
    {
        return view('scoreboard');
    }

    public function getScore(){
        $res = $this->scoreboardModel->where("id",3)->first();
        if(!$res){
            return $this->respond([
                "msg"=>"fial to get score"
            ]);
        }

        return $this->respond([
            "msg"=>"success",
            "date"=>$res['date'],
            "score"=>$res['score']
        ]);
    }
}
