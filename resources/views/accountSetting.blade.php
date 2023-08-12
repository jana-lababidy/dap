@extends('layout.master')
@section('content')
<div class="main-container">

        <div class="breadcrumb-bar navbar bg-white sticky-top">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Overview</a>
              </li>
              <li class="breadcrumb-item"><a href="pages-utility.html#">Utility Pages</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Account Settings</li>
            </ol>
          </nav>

        </div>
        <div class="container">
          <div class="row justify-content-center mt-5">
            <div class="col-lg-3 mb-3">
              <ul class="nav nav-tabs flex-lg-column" role="tablist">
                <li class="nav-item">
                  <a class="nav-link {{ ($tabid=='account-setting') ? 'active': '' }}" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Your Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ ($tabid=='password') ? 'active': '' }}" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">Password</a>
                </li>
              </ul>
            </div>
            <div class="col-xl-8 col-lg-9">
              <div class="card">
                <div class="card-body">
                  <div class="tab-content">
                  @if(Session::has('msg'))    
                        <div class="alert alert-{{ Session::get('color') }}">{{ Session::get('msg') }}</div>
                        @endif  
                    <div class="tab-pane fade show {{ ($tabid=='account-setting') ? 'active': '' }}" role="tabpanel" id="profile">
                    <form action="{{ route('update-profile') }}" method="POST" enctype="multipart/form-data">
                      <div class="media mb-4">
                        <img alt="Image" src="{{asset('avatar/'.auth()->user()->avatar)}}" class="avatar avatar-lg" />
                        <div class="media-body ml-3">
                          <div class="custom-file custom-file-naked d-block mb-1">
                            <input type="file" class="custom-file-input d-none form-control" id="avatar-file" name="avatar">
                            <label class="custom-file-label position-relative" for="avatar-file">
                              <span class="btn btn-primary">
                                Upload avatar
                              </span>
                            </label>
                            @error('avatar')<div class="text-danger text-left">{{$message}}</div>@enderror
                          </div>
                        </div>
                      </div>
                      <!--end of avatar-->
                     
                        <div class="form-group row align-items-center">
                          <label class="col-3">Full Name</label>
                          <div class="col">
                            <input type="text" placeholder="Fullname" value="{{auth()->user()->name}}" name="fullname" class="form-control"/>
                            @error('fullname')<div class="text-danger text-left">{{$message}}</div>@enderror
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-3">Email</label>
                          <div class="col">
                            <input type="email" placeholder="Enter your email address" value="{{auth()->user()->email}}" name="email" class="form-control" disabled/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-3">Bio</label>
                          <div class="col">
                            <textarea placeholder="Tell us a little about yourself" name="bio" class="form-control" rows="4">{{auth()->user()->bio}}</textarea>
                            <small>This will be displayed on your public profile</small>
                            @error('bio')<div class="text-danger text-left">{{$message}}</div>@enderror
                          </div>
                        </div>
                        <div class="d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary btn btn-success">Save</button>
                        </div>
                        @csrf
                      </form>
                      
                    </div>
                    <div class="tab-pane fade show {{ ($tabid=='password') ? 'active': '' }}" role="tabpanel" id="password">
                    <form action="{{ route('update-password') }}" method="POST">
                        @csrf
                        <div class="card-body">
                        @if(Session::has('msg'))    
                        <div class="alert alert-{{ Session::get('color') }}">{{ Session::get('msg') }}</div>
                        @endif  
                        <div class="form-group row align-items-center">
                          <label class="col-3">Current Password</label>
                          <div class="col">
                            <input type="password" placeholder="Enter your current password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput" />
                            @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-3">New Password</label>
                          <div class="col">
                            <input type="password" placeholder="Enter a new password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput" />
                            @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-3">Confirm Password</label>
                          <div class="col">
                            <input type="password" placeholder="Confirm your new password" name="new_password_confirmation" class="form-control" id="confirmNewPasswordInput" />
                          </div>
                        </div>
                        <div class="d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary">Change Password</button>
                        </div>
                        @csrf
                      </form>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      @endsection