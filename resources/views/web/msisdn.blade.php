@extends('web.layouts.master')
@section('title', 'Wave|Money')
@section('content')
<style type="text/css">
  #loadingDiv{
      position:fixed;
      top:0px;
      right:0px;
      width:100%;
      height:100%;
      background-color:#666;
      background-image:url('../images/loading.gif');
      background-repeat:no-repeat;
      background-position:center;
      z-index:10000000;
      opacity: 0.4;
      filter: alpha(opacity=40); /* For IE8 and earlier */
  }
</style>
<div id="loadingDiv" style="display:none;">
    <div>
        
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
           <div class="panel-body notfound-body">
                <div class="form-panel">
                    <div class="form-panel">
                    <form action="{{ url('msisdn') }}" method="post" id="form">
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="code" id="code" />
                    <div class="form-group" style="padding-bottom:60px">
                        <label for="number" class="col-md-3 control-label" style="text-align:right; font-size:16px">Msisdn #</label>
                                    <div class="col-md-8">
                                      <input type="text" class="form-control" id="number" placeholder="403XXXXXX" required='true' name="phone_number" maxlength="9">
                                      @if ($errors->has('phone_number'))
                                        <span class="custom-block">
                                              <strong>{{ trans('auth.failed') }}</strong>
                                        </span>
                                      @endif
                                      <input type="hidden" name="country_code" id="country_code">
                                    </div>
                              </div>
                          </div>    
                    </div>
               </div>
               <div class="panel-footer">
                     <button type="submit" id="login" class="btn-custom btn-lg btn-block btn-raised">
                    Next
                    </button>
                </form> 
           </div>    
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
@stop








