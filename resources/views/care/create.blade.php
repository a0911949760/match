@extends('layouts.app')
<html><head><title>看護媒合平台</title></head>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>一般用戶註冊<center></div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/care') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">姓名</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">大頭貼</label>
                            <div class="col-md-6">
                                    <input id="file" type="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" name="file" required>
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                    @if ($errors->has('file'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('file') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('性別') }}</label>
                            <div class="col-md-6">
                                <input id="genderM" type="radio" class="{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="男" required>男性
                                <input id="genderF" type="radio" class="{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="女" >女性
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="identitycard" class="col-md-4 col-form-label text-md-right">身分證字號</label>
                            <div class="col-md-6">
                                <input id="identitycard" type="text" class="form-control{{ $errors->has('identitycard') ? ' is-invalid' : '' }}" name="identitycard" value="{{ old('identitycard') }}" required>
                                @if ($errors->has('identitycard'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('identitycard') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">出生年月日</label>
                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" value="{{ old('birthday') }}" required>
                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">聯絡電話</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">電子信箱</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div id="twzipcode"class="form-group row" >
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">選擇地區</label>
                            <div data-role="county" data-style="Style Name" data-value="110" data-name="city"></div >
                            <div data-role="district" data-style="Style Name" data-value="臺北市" data-name="region"></div>
                            <div data-role="zipcode" data-style="Style Name" data-value="信義區" data-name="zipcode"></div>
                        </div>                 
                                                                       
                        <div class="form-group row">
                            <label for="speciality" class="col-md-4 col-form-label text-md-right" >需照顧情況</label>
                            <div class="col-md-6">
                            <input  type="hidden" value="0" name="行動不便">
                            <label style="vertical-align:middle"><input style="vertical-align:middle" type="checkbox" value="行動不便" name="行動不便" class="form-checkbox" >行動不便</label>
                            <input  type="hidden" value="0" name="中風">
                            <label style="vertical-align:middle"><input style="vertical-align:middle" type="checkbox" value="中風" name="中風" class="form-checkbox" >中風</label>
                            <input  type="hidden" value="0" name="植物人">
                            <label style="vertical-align:middle"><input style="vertical-align:middle" type="checkbox" value="植物人" name="植物人" class="form-checkbox" >植物人</label>
                            <input  type="hidden" value="0" name="失智">
                            <label style="vertical-align:middle"><input style="vertical-align:middle" type="checkbox" value="失智" name="失智" class="form-checkbox" >失智</label>
                            <input  type="hidden" value="0" name="自閉症">
                            <label style="vertical-align:middle"><input style="vertical-align:middle" type="checkbox" value="自閉症" name="自閉症" class="form-checkbox" >自閉症</label>
                            <input  type="hidden" value="0" name="智能障礙">
                            <label style="vertical-align:middle"><input style="vertical-align:middle" type="checkbox" value="智能障礙" name="智能障礙" class="form-checkbox" >智能障礙</label>
                            <input  type="hidden" value="0" name="精神病">
                            <label style="vertical-align:middle"><input style="vertical-align:middle" type="checkbox" value="精神病" name="精神病" class="form-checkbox" >精神病</label>
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            <label for="experience" class="col-md-4 col-form-label text-md-right">學歷</label>
                            <div class="col-md-6">
                                <select name="experience" id= "experience" onChange="Buildkey(this.options[this.options.selectedIndex].value);" 
                                value="{{ old('experience') }}" required>
                                    <option value="">請選擇</option>
                                    <option value="國小">國小</option>
                                    <option value="國中" >國中</option>
                                    <option value="高中" >高中</option>
                                    <option value="五專" >五專</option>
                                    <option value="大學" >大學</option>
                                    <option value="碩士" >碩士</option>
                                    <option value="二技" >二技</option>
                                    <option value="博士" >博士</option>
                                </select>
                                @if ($errors->has('experience'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">密碼</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">確認密碼</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" value="Upload">                                
                                    確定
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</html>