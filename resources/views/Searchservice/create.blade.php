@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="service type" class="col-md-4 col-form-label text-md-right">服務類別</label>

                            <div class="col-md-6">
                            <select name="experience" id= "experience" onChange="Buildkey(this.options[this.options.selectedIndex].value);" 
                                    value="{{ old('experience') }}" required>
                                        <option value="">照顧服務員</option>
                                        <option value="物理治療師" >物理治療師</option>
                                        <option value="職能治療師" >職能治療師</option>
                                        <option value="護理師護士" >護理師護士</option>
                                        <option value="照顧服務員" >照顧服務員</option>
                                        
                                    </select>

                                @if ($errors->has('service type'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Service date" class="col-md-4 col-form-label text-md-right">服務日期</label> 
                            <div class="col-md-6">      
                            <input id="birthday" type="date" class="form-control" name="birthday" value="{{ old('birthday') }}" required autofocus>             
                            
                                
                                @if ($errors->has('Service date'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Service date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="Starting time" class="col-md-4 col-form-label text-md-right">開始時間</label> 
                            <div class="col-md-6"> 
                            <input id="ti" type="time" class="form-control" name="ti" value="{{ old('ti') }}" required autofocus>                             
                                @if ($errors->has('Starting time'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Starting time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="End Time" class="col-md-4 col-form-label text-md-right">結束時間</label> 
                            <div class="col-md-6"> 
                            <input id="ti" type="time" class="form-control" name="ti" value="{{ old('ti') }}" required autofocus>                             
                                @if ($errors->has('End Time'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('End Time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="service type" class="col-md-4 col-form-label text-md-right">工作項目</label>

                            <div class="col-md-6">
                            <select name="experience" id= "experience" onChange="Buildkey(this.options[this.options.selectedIndex].value);" 
                                    value="{{ old('experience') }}" required>
                                        <option value="">4項</option>
                                        <option value="生活家事" >生活家事</option>
                                        <option value="家事服務" >家事服務</option>
                                        <option value="代購物品" >代購物品</option>
                                        <option value="鼻胃管餵食" >鼻胃管餵食</option>
                                    </select>

                                @if ($errors->has('service type'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                            <div id="twzipcode"class="form-group row" >
                                <label for="birthday" class="col-md-4 col-form-label text-md-right">選擇地區</label>
                                <div data-role="county" data-style="Style Name" data-value="110"></div >
                                <div data-role="district" data-style="Style Name" data-value="臺北市"></div>
                                <div data-role="zipcode" data-style="Style Name" data-value="信義區"></div>
                            </div>

                        
                           

                        
                                 
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
