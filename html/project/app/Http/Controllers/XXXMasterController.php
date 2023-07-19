<?php

namespace App\Http\Controllers;

use App\Models\XXXMaster;
use App\Models\XXXTransaction;
use Illuminate\Http\Request;

class XXXMasterController extends Controller
{
/**
* Display a listing of the resource.
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
switch($request['axreq'])
{
case 'All':
$XXXMasterData = XXXMaster::all();
$id = 0;
break;

case 'Single':
$id = $request['id'];
$XXXMasterData = XXXMaster::where('id',$id)->first(); 


$XXXTransactionData = new XXXTransaction();

//新規データ
$XXXTransactionData->id =null;
$XXXTransactionData->up_id = $request['id'];
$XXXTransactionData->content = $request['axreq'];
$XXXTransactionData->date_time = date('Y-m-d H:m:s');
$XXXTransactionData->save();
break;

case 'Update':
$XXXMasterData = XXXMaster::find($request['id']);

//更新データ
$XXXMasterData->id = $request['id'];
$XXXMasterData->name = $request['name'];
$XXXMasterData->title = $request['title'];

$XXXMasterData->save();


$XXXTransactionData = new XXXTransaction();



//新規データ
$XXXTransactionData->id =null;
$XXXTransactionData->up_id = $request['id'];
$XXXTransactionData->content = $request['axreq'];
$XXXTransactionData->date_time = date('Y-m-d H:m:s');;
$XXXTransactionData->save();
break;

case 'AddSingle':
$XXXMasterData = new XXXMaster();

//新規データ
$XXXMasterData->id = $request['id'];
$XXXMasterData->name = $request['name'];
$XXXMasterData->title = $request['title'];
$XXXMasterData->save();

$XXXTransactionData = new XXXTransaction();

$last_insert_id = $XXXMasterData->id;
//新規データ
$XXXTransactionData->id =null;
$XXXTransactionData->up_id = $last_insert_id;
$XXXTransactionData->content = $request['axreq'];
$XXXTransactionData->date_time = date('Y-m-d H:m:s');;
$XXXTransactionData->save();

break;

//複数レコード更新【未実装】
case 'UpdateMulti':
//$XXXMasterData= XXXMaster::all();::where('id',8)->get();
break;

//複数レコード追加【未実装】
case 'AddMulti':
//$XXXMasterData= XXXMaster::all();::where('id',8)->get();
break;

//検索
case 'Search':
$XXXMasterQuery = XXXMaster::query();
$search_request_datas = json_decode( $request->search_data , true ) ;

foreach($search_request_datas as $search_data)
{
if(strcmp($search_data['orand'], "or") == 0)
{
$XXXMasterQuery = $XXXMasterQuery->orWhere($search_data['column'],$search_data['sign'] ,$search_data['value']);
}else{
$XXXMasterQuery = $XXXMasterQuery->Where($search_data['column'],$search_data['sign'] ,$search_data['value']);
}
}
$XXXMasterData = $XXXMasterQuery->get();
break;

//削除フラグ更新【未実装】
case 'DelFlg':
//$XXXMasterData= XXXMaster::all();::where('id',8)->get();
break;

//削除【未実装】
case 'Delete':
//$XXXMasterData= XXXMaster::all();::where('id',8)->get();
break;

default:
$XXXMasterData = XXXMaster::all();
break;
}

return view('welcome',['result' => $XXXMasterData]);
}

}
