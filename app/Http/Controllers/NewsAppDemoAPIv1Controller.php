<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Config;

class NewsAppDemoAPIv1Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    public function test(){
  //   	return response()->json([
		//     'name' => 'Abigail',
		//     'state' => 'CA'
		// ]);
  //   }


    	$testData = [
    		0=>[
    			'title' => 'Allies make new push in UN against Syria',
    			'category' => 'CA',
    			'image' => '',
    			'reply' => 0,
    			'publisher' => 'CNN',
    			'thumbImage' => base64_encode(file_get_contents(Config::get('constants.pathes.homeImage').'_100886797_hi046210936.jpg')),
    			'url' => 'https://edition.cnn.com/2018/04/15/middleeast/us-uk-france-russia-un-syria-intl/index.html'
    		],
    		1=>[
    			'title' => 'Syria air strikes: Action showed enough is enough - Boris Johnson',
    			'category' => 'CA',
    			'image' => '',
    			'reply' => 0,
    			'publisher' => 'BBC',
    			'thumbImage' => base64_encode(file_get_contents(Config::get('constants.pathes.homeImage').'_100888103_d8d9dfb9-f1e1-406e-b077-6c47cbeb8eae.jpg')),
    			'url' => 'http://www.bbc.co.uk/news/uk-43772719'
    		],
    	];
    	// sleep(3);
		return response()->json($testData);	

	}


    public function sendMsg(){
        
    }
}

