<?php

namespace App\Http\Controllers\Frontend;

use Hashids\Hashids;
use DB;

class BaseController extends Controller
{
    protected $request;
    protected $hashids;
    protected $auth;
    protected $data;
    protected $db;
    protected $currenctRoute;
    protected $limit;

    protected function __construct() {
        #for controller
        $this->request  = request();
        $this->db       = DB::connection(\Common::connection('development'));
        $this->hashids  = new Hashids();
        $this->link     = new \Link();
        $this->limit    = 20;
        // $this->paging   = html and css paging

        #for in view
        $this->data['hashids']  = $this->hashids;
        $this->data['link']     = $this->link;
        $this->data['paging']   = $this->paging; //html css paging

        
    }
}
