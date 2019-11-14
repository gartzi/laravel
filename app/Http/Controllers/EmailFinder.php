<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailFinder extends Controller
{


public function hunter(Request $request)
{
   dd($request->all());  //to check all the datas dumped from the form
   //if your want to get single element,someName in this case
   $someName = $request->someName;
   return view('emailfinder')->withTitle('Laravel magic method')->withAuthor('Mister Tandon');

}


}
