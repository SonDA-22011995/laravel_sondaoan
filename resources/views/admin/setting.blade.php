@extends('layouts.adminLayout.admin_desgin')
@section('content')
    
<div id="content">
    <div id="content-header">
    <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{url('/admin/setting')}}"><strong>Setting</strong></a></div>
      <h1>Password Setting</h1>
    </div>
    <div class="container-fluid"><hr>
      
        <div class="row-fluid">
          <div class="span12">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                <h5>Update Password</h5>
              </div>
              <div class="widget-content nopadding">
                <form class="form-horizontal" method="post" action="#" name="password_validate" id="password_validate" novalidate="novalidate">
                  <div class="control-group">
                    <label class="control-label"> Current Password</label>
                    <div class="controls">
                      <input type="password" name="current_password" id="current_password" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">New password</label>
                    <div class="controls">
                      <input type="password" name="new_password" id="new_password" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Confirm password</label>
                    <div class="controls">
                      <input type="password" name="confirm_password" id="confirm_password" />
                    </div>
                  </div>
                  <div class="form-actions">
                    <input type="submit" value="Update password" class="btn btn-success">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    
    
@endsection