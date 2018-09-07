<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class vipinController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getVipin()
    {
      $title ="vipin test page";
      $content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500';
      $data = [
        'title'  => 'vipin test page',
        'heading'   => 'This is test heading only',
        'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500',
        'author'=>'vipin Nethues'
      ];
      //return view('vipin')->with("title",$title)->with('content',$content);
      return view('vipin')->with($data);
    }

}
