<?php
 namespace Aadithya\sample\Http\Controllers;

 use App\Http\Controllers\Controller

 class SampleController extends Controller{

     public function index(){
         return view('sample::sample');
     }
 }