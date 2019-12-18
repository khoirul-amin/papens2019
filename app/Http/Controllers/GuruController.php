<?php

namespace App\Http\Controllers;
use App\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $guru = Guru::all();
    
        return view('admin.guru', ['guru' => $guru]);

    }
    public function get_datatable(){
        $result = Guru::all();
        $data= array();
        foreach($result as $result){
            $row=array();
            $row[0]='<tr><td>'.$result->id.'</td>';
            $row[1]='<td>'.$result->namalengkap.'</td>';
            $row[2]='<td>'.$result->tempatlahir.','.$result->tgllahir.'</td>';
            $row[3]='<td>'.$result->alamat.'</td>';
            $row[4]='<td>'.$result->email.'</td>';
            $row[5]='<td>'.$result->telpon.'</td>';
            $row[6]='<td></td></tr>';

            $data[]=$row;
        }
        $output=array(
            'data'=>$data
        );
        echo json_encode($output);

    }
}
