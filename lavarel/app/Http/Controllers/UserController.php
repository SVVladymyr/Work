<?php

namespace Site\Http\Controllers;

use DB;
use Site\Users;
use Site\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
	
	public function showIndex()
	{
		return view('index');
	}

	public function showTable()
	{
		
		$tmp_data = Users::all();

		$data = "";
		foreach($tmp_data as $d)
		{	
			$chief = $d->chief;
			if($chief == 0) $chief = "#";
			else  $chief = "ajson".$d->chief;
			$data = $data."{\"id\":\"ajson".$d->id."\",\"parent\":\"".$chief."\", \"text\":\"".$d->fio." - ".DB::table('position')->where('id',$d->position)->value('position')."\""."},";
		}
		unset($tmp_data);

		return view('tree',['data'=>$data]);
	}

	public function showGrid()
	{
		return view('grid');		        
	}
	
        public function showData(Request $request)
	{
		$page = $_GET['page']; // get the requested page
		$limit = $_GET['rows']; // get how many rows we want to have into the grid
		$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
		$sord = $_GET['sord']; // get the direction
		$where = '';
		$position = $this->positionToArray();
	
		if(!$sidx) $sidx =1;

		if(!empty($_GET['searchField']) && !empty($_GET['searchString']) && $_GET['searchField']!='Position')
			$where = ' WHERE users.'.$_GET['searchField'].'='.$_GET['searchString'].' ';
		elseif(!empty($_GET['searchField']) && !empty($_GET['searchString']) && $_GET['searchField']=='Position'){	
			if(is_numeric($_GET['searchString']))
				$where = ' WHERE users.'.$_GET['searchField'].'='.$_GET['searchString'].' ';
			else                                                                   
				$where = ' WHERE users.'.$_GET['searchField'].'=\''.array_search($_GET['searchString'],$position).'\' ';
		}
			$tmp = DB::select('SELECT COUNT(1) FROM users'.$where);
			$count = $tmp[0]->{'COUNT(1)'};

			if( $count > 0 ) {
				$total_pages = ceil($count/$limit);
			} else {
				$total_pages = 0;
			}
			if ($page > $total_pages) $page=$total_pages;
			$start = $limit*$page - $limit; // do not put $limit*($page - 1)
			if($start < 0) $start = 0;
			$tmp = DB::select('SELECT * FROM users'.$where.' ORDER BY '.$sidx.' '.$sord.' LIMIT '.$start.' , '.$limit);
			$responce['page'] = (int)$page;
			$responce['total'] = $total_pages;
			$responce['records'] = $count;
			for($i = 0; $i < count($tmp); $i++)
			{
			    $responce['rows'][$i]['id']=$tmp[$i]->{'id'};
			    $responce['rows'][$i]['cell']=array($tmp[$i]->{'id'},$tmp[$i]->{'fio'},$position[$tmp[$i]->{'position'}],$tmp[$i]->{'date'},$tmp[$i]->{'salary'},$tmp[$i]->{'chief'});
	
			}	
			echo json_encode($responce);
}		
	public function positionToArray()
	{
		$responce = [];
		$tmp = DB::select('SELECT * FROM position');
		for($i = 0; $i < count($tmp); $i++)
		{
		    $responce[$tmp[$i]->{'id'}] = $tmp[$i]->{'position'};
		}		
		return  $responce;
	}
}