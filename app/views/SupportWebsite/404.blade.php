<?php $p404 = true; ?>

@extends('SupportWebsite.template')

@section('content') 

      <div class="container marketing no-slider">
         

      <div class="row">
     
        <p class="tlo">
          <strong>
           (Error 404) The page you requested is not found or deleted
          <br><br></strong>
        </p>
         <hr class="featurette-divider">

        <div class="col-sm-4 backtohome">
           <div class="holder">
            <div class="avatar">
             <a href="http://support-asu.org/">
              <img src="{{ URL::asset('assets/SupportWebsite/img/about.png')}}" class="user"/>
             </a>
            </div>
          </div>
        </div>
        
        <div class="col-sm-4 backhistory">
           <div class="holder">
            <div class="avatar">
             <a class="span4 pollback" href="javascript:history.go(-1)"> 
              <img src="{{ URL::asset('assets/SupportWebsite/img/back.png')}}" class="user"/>
             </a>
            </div>
          </div>
        </div>


       </div>
    </div>

@stop