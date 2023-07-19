<?php

namespace App\Http\Controllers;

use App\Models\XXXTransaction;
use Illuminate\Http\Request;

class XXXTransactionController extends Controller
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
$XXXTransactionData = XXXTransaction::all();
break;

case 'Single':
$id = $request['id'];
$XXXTransactionData = XXXTransaction::where('id',$id)->first(); 
break;

case 'Update':
$XXXTransactionData = XXXTransaction::find($request['id']);

//更新データ
$XXXTransactionData->id = $request['id'];
$XXXTransactionData->up_id = $request['up_id'];
$XXXTransactionData->content = $request['content'];
$XXXTransactionData->date_time = $request['date_time'];





















$XXXTransactionData->save();
break;

case 'AddSingle':
$XXXTransactionData = new XXXTransaction();

//新規データ
$XXXTransactionData->id = $request['id'];
$XXXTransactionData->up_id = $request['up_id'];
$XXXTransactionData->content = $request['content'];
$XXXTransactionData->date_time = $request['date_time'];





















$XXXTransactionData->save();
break;

//複数レコード更新【未実装】
case 'UpdateMulti':
//$XXXTransactionData= XXXTransaction::all();::where('id',8)->get();
break;

//複数レコード追加【未実装】
case 'AddMulti':
//$XXXTransactionData= XXXTransaction::all();::where('id',8)->get();
break;

//検索
case 'Search':
$XXXTransactionQuery = XXXTransaction::query();
$search_request_datas = json_decode( $request->search_data , true ) ;

foreach($search_request_datas as $search_data)
{
if(strcmp($search_data['orand'], "or") == 0)
{
$XXXTransactionQuery = $XXXTransactionQuery->orWhere($search_data['column'],$search_data['sign'] ,$search_data['value']);
}else{
$XXXTransactionQuery = $XXXTransactionQuery->Where($search_data['column'],$search_data['sign'] ,$search_data['value']);
}
}
$XXXTransactionData = $XXXTransactionQuery->get();
break;

//削除フラグ更新【未実装】
case 'DelFlg':
//$XXXTransactionData= XXXTransaction::all();::where('id',8)->get();
break;

//削除【未実装】
case 'Delete':
//$XXXTransactionData= XXXTransaction::all();::where('id',8)->get();
break;

default:
$XXXTransactionData = XXXTransaction::all();
break;
}
return $XXXTransactionData;
}

}
