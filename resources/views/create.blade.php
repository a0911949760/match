@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{isset($user) ? url('users') . '/' . $user->id : url('users')}}" method="POST" name="form">
                <div class="form-group">
                    {{ csrf_field() }}
                    @if(isset($user))
                        {{ method_field('PUT') }}
                    @endif
                    <input type="text" name="nama" placeholder="姓名" class="form-control" value="{{ isset($user) ? $user->name : '' }}" required> 
                <!--    <input type="text" name="identitycard" placeholder="身分證號碼" class="form-control" value="{{ isset($user) ? $user->identitycard :'' }}" required>
                    <input type="date" name="birthday" class="form-control" value="{{ isset($user) ? $user->birthday :'' }}" required>   
                    <input type="phone" name="phone" placeholder="連絡電話" class="form-control" value="{{ isset($user) ? $user->phone :'' }}" required>    -->                      
                  
                    <input type="email" name="email" placeholder="電子信箱" class="form-control" value="{{ isset($user) ? $user->email : '' }}" required>
                    
                <!--
                    <div class="col-md-6">
                        <select name="address1" onChange="Buildkey(this.options[this.options.selectedIndex].value);" value="{{ old('address1') }}" required>
                            <option value="">選擇縣市</option>
                            <option value="基隆市" >基隆市</option>
                            <option value="臺北市" >臺北市</option>
                            <option value="新北市" >新北市</option>
                            <option value="桃園市" >桃園市</option>
                            <option value="新竹市" >新竹市</option>
                            <option value="新竹縣" >新竹縣</option>
                            <option value="苗栗縣" >苗栗縣</option>
                            <option value="臺中市" >臺中市</option>
                            <option value="彰化縣" >彰化縣</option>
                            <option value="南投縣" >南投縣</option>
                            <option value="雲林縣" >雲林縣</option>
                            <option value="嘉義市" >嘉義市</option>
                            <option value="嘉義縣" >嘉義縣</option>
                            <option value="臺南市" >臺南市</option>
                            <option value="高雄市" >高雄市</option>
                            <option value="屏東縣" >屏東縣</option>
                            <option value="臺東縣" >臺東縣</option>
                            <option value="花蓮縣" >花蓮縣</option>
                            <option value="宜蘭縣" >宜蘭縣</option>
                            <option value="澎湖縣" >澎湖縣</option>
                            <option value="金門縣" >金門縣</option>
                            <option value="連江縣" >連江縣</option>
                        </select>
                        <select name="address2" required>
                            <option value="">選擇區域</option>
                        </select>
                        <input type="text" name="address3" required>
                    </div>
                    <textarea type="text" name="speciality" placeholder="專長" class="form-control" value="{{ isset($user) ? $user->speciality :'' }}" required></textarea>
                    <textarea type="text" name="experience" placeholder="經歷與學歷" class="form-control" value="{{ isset($user) ? $user->experience :'' }}" required></textarea>
                    <textarea type="text" name="selfintroduction" placeholder="自我介紹" class="form-control" value="{{ isset($user) ? $user->selfintroduction :'' }}" required></textarea>
                    -->
                    <button type="submit" class="btn btn-sm btn-success">confirm</button>
                </div>
            </form><!--
            <script language="javascript">
                    function Buildkey(num) {
                        var ctr=0;
                        document.form.address2.selectedIndex=0;
                        document.form.address2.options[0]=new Option("請選擇區域");
                        /*基隆市*/  
                        if(num=="基隆市") {	document.form.address2.options[ctr]=new Option("仁愛區");	ctr=ctr+1;	}
                        if(num=="基隆市") {	document.form.address2.options[ctr]=new Option("信義區");	ctr=ctr+1;	}
                        if(num=="基隆市") {	document.form.address2.options[ctr]=new Option("中正區");	ctr=ctr+1;	}
                        if(num=="基隆市") {	document.form.address2.options[ctr]=new Option("中山區");	ctr=ctr+1;	}
                        if(num=="基隆市") {	document.form.address2.options[ctr]=new Option("安樂區");	ctr=ctr+1;	}
                        if(num=="基隆市") {	document.form.address2.options[ctr]=new Option("暖暖區");	ctr=ctr+1;	}
                        if(num=="基隆市") {	document.form.address2.options[ctr]=new Option("七堵區");	ctr=ctr+1;	}
                        /*臺北市*/  
                        if(num=="臺北市") {	document.form.address2.options[ctr]=new Option("中正區");	ctr=ctr+1;	}
                        if(num=="臺北市") {	document.form.address2.options[ctr]=new Option("大同區");	ctr=ctr+1;	}
                        if(num=="臺北市") {	document.form.address2.options[ctr]=new Option("中山區");	ctr=ctr+1;	}
                        if(num=="臺北市") {	document.form.address2.options[ctr]=new Option("松山區");	ctr=ctr+1;	}
                        if(num=="臺北市") {	document.form.address2.options[ctr]=new Option("大安區");	ctr=ctr+1;	}
                        if(num=="臺北市") {	document.form.address2.options[ctr]=new Option("萬華區");	ctr=ctr+1;	}
                        if(num=="臺北市") {	document.form.address2.options[ctr]=new Option("信義區");	ctr=ctr+1;	}
                        if(num=="臺北市") {	document.form.address2.options[ctr]=new Option("士林區");	ctr=ctr+1;	}
                        if(num=="臺北市") {	document.form.address2.options[ctr]=new Option("北投區");	ctr=ctr+1;	}
                        if(num=="臺北市") {	document.form.address2.options[ctr]=new Option("內湖區");	ctr=ctr+1;	}
                        if(num=="臺北市") {	document.form.address2.options[ctr]=new Option("南港區");	ctr=ctr+1;	}
                        if(num=="臺北市") {	document.form.address2.options[ctr]=new Option("文山區");	ctr=ctr+1;	}
                        /*新北市*/  
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("萬里區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("金山區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("板橋區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("汐止區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("深坑區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("石碇區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("瑞芳區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("平溪區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("雙溪區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("貢寮區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("新店區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("坪林區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("烏來區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("永和區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("中和區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("土城區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("三峽區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("樹林區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("鶯歌區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("三重區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("新莊區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("泰山區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("林口區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("蘆洲區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("五股區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("八里區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("淡水區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("三芝區");	ctr=ctr+1;	} 
                        if(num=="新北市") {	document.form.address2.options[ctr]=new Option("石門區");	ctr=ctr+1;	} 
                        /*桃園市*/
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("中壢區");	ctr=ctr+1;	} 
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("平鎮區");	ctr=ctr+1;	} 
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("龍潭區");	ctr=ctr+1;	} 
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("楊梅區");	ctr=ctr+1;	} 
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("新屋區");	ctr=ctr+1;	} 
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("觀音區");	ctr=ctr+1;	} 
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("桃園區");	ctr=ctr+1;	} 
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("龜山區");	ctr=ctr+1;	} 
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("八德區");	ctr=ctr+1;	} 
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("大溪區");	ctr=ctr+1;	} 
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("復興區");	ctr=ctr+1;	} 
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("大園區");	ctr=ctr+1;	}
                        if(num=="桃園市") {	document.form.address2.options[ctr]=new Option("蘆竹區");	ctr=ctr+1;	} 
                        /*新竹市*/
                        if(num=="新竹市") {	document.form.address2.options[ctr]=new Option("東區");	ctr=ctr+1;	} 
                        if(num=="新竹市") {	document.form.address2.options[ctr]=new Option("北區");	ctr=ctr+1;	} 
                        if(num=="新竹市") {	document.form.address2.options[ctr]=new Option("香山區");	ctr=ctr+1;	} 
                        /*新竹縣*/
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("竹北市");	ctr=ctr+1;	} 
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("湖口鄉");	ctr=ctr+1;	} 
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("新豐鄉");	ctr=ctr+1;	} 
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("新埔鎮");	ctr=ctr+1;	} 
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("關西鎮");	ctr=ctr+1;	} 
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("芎林鄉");	ctr=ctr+1;	} 
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("寶山鄉");	ctr=ctr+1;	} 
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("竹東鎮");	ctr=ctr+1;	} 
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("五峰鄉");	ctr=ctr+1;	} 
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("橫山鄉");	ctr=ctr+1;	} 
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("尖石鄉");	ctr=ctr+1;	} 
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("北埔鄉");	ctr=ctr+1;	} 
                        if(num=="新竹縣") {	document.form.address2.options[ctr]=new Option("峨眉鄉");	ctr=ctr+1;	}
                        /*苗栗縣*/
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("竹南鎮");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("頭份市");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("三灣鄉");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("南庄鄉");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("獅潭鄉");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("後龍鎮");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("通霄鎮");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("苑裡鎮");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("苗栗市");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("造橋鄉");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("頭屋鄉");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("公館鄉");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("大湖鄉");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("泰安鄉");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("銅鑼鄉");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("三義鄉");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("西湖鄉");	ctr=ctr+1;	} 
                        if(num=="苗栗縣") {	document.form.address2.options[ctr]=new Option("卓蘭鎮");	ctr=ctr+1;	}
                        /*臺中市*/ 
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("中　區");	ctr=ctr+1;	} 
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("東　區");	ctr=ctr+1;	} 
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("南　區");	ctr=ctr+1;	} 
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("西　區");	ctr=ctr+1;	} 
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("北　區");	ctr=ctr+1;	} 
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("北屯區");	ctr=ctr+1;	} 
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("西屯區");	ctr=ctr+1;	} 
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("南屯區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("太平區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("大里區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("霧峰區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("烏日區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("豐原區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("后里區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("石岡區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("東勢區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("和平區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("新社區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("潭子區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("大雅區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("神岡區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("大肚區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("沙鹿區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("龍井區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("梧棲區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("清水區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("大甲區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("外埔區");	ctr=ctr+1;	}
                        if(num=="臺中市") {	document.form.address2.options[ctr]=new Option("大安區");	ctr=ctr+1;	} 
                        /*彰化縣*/
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("彰化市");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("芬園鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("花壇鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("秀水鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("鹿港鎮");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("福興鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("線西鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("和美鎮");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("伸港鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("員林市");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("社頭鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("永靖鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("埔心鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("溪湖鎮");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("大村鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("埔鹽鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("田中鎮");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("北斗鎮");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("田尾鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("埤頭鄉");	ctr=ctr+1;	} 
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("溪州鄉");	ctr=ctr+1;	}
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("竹塘鄉");	ctr=ctr+1;	}
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("二林鎮");	ctr=ctr+1;	}
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("大城鄉");	ctr=ctr+1;	}
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("芳苑鄉");	ctr=ctr+1;	}
                        if(num=="彰化縣") {	document.form.address2.options[ctr]=new Option("二水鄉");	ctr=ctr+1;	}
                        /*南投縣*/ 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("南投市");	ctr=ctr+1;	} 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("中寮鄉");	ctr=ctr+1;	} 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("草屯鎮");	ctr=ctr+1;	} 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("國姓鄉");	ctr=ctr+1;	} 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("埔里鎮");	ctr=ctr+1;	} 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("仁愛鄉");	ctr=ctr+1;	} 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("名間鄉");	ctr=ctr+1;	} 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("集集鎮");	ctr=ctr+1;	} 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("水里鄉");	ctr=ctr+1;	} 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("魚池鄉");	ctr=ctr+1;	} 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("信義鄉");	ctr=ctr+1;	} 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("竹山鎮");	ctr=ctr+1;	} 
                        if(num=="南投縣") {	document.form.address2.options[ctr]=new Option("鹿谷鄉");	ctr=ctr+1;	}
                        /*雲林縣*/
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("斗南鎮");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("大埤鄉");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("虎尾鎮");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("土庫鎮");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("褒忠鄉");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("東勢鄉");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("臺西鄉");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("崙背鄉");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("麥寮鄉");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("斗六市");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("林內鄉");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("古坑鄉");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("莿桐鄉");	ctr=ctr+1;	} 
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("西螺鎮");	ctr=ctr+1;	}
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("二崙鄉");	ctr=ctr+1;	}
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("北港鎮");	ctr=ctr+1;	}
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("水林鄉");	ctr=ctr+1;	}
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("口湖鄉");	ctr=ctr+1;	}
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("四湖鄉");	ctr=ctr+1;	}
                        if(num=="雲林縣") {	document.form.address2.options[ctr]=new Option("元長鄉");	ctr=ctr+1;	}
                        /*嘉義市*/
                        if(num=="嘉義市") {	document.form.address2.options[ctr]=new Option("東區");	ctr=ctr+1;	} 
                        if(num=="嘉義市") {	document.form.address2.options[ctr]=new Option("西區");	ctr=ctr+1;	}
                        /*嘉義縣*/
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("番路鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("梅山鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("竹崎鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("阿里山鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("中埔鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("大埔鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("水上鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("鹿草鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("太保市");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("朴子市");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("東石鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("六腳鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("新港鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("民雄鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("大林鎮");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("溪口鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("義竹鄉");	ctr=ctr+1;	} 
                        if(num=="嘉義縣") {	document.form.address2.options[ctr]=new Option("布袋鎮");	ctr=ctr+1;	} 
                        /*臺南市*/
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("中西區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("東　區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("南　區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("北　區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("安平區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("安南區");	ctr=ctr+1;	}
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("永康區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("歸仁區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("新化區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("左鎮區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("玉井區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("楠西區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("南化區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("仁德區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("關廟區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("龍崎區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("官田區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("麻豆區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("佳里區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("西港區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("七股區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("將軍區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("學甲區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("北門區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("新營區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("後壁區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("白河區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("東山區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("六甲區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("下營區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("柳營區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("鹽水區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("善化區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("大內區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("山上區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("新市區");	ctr=ctr+1;	} 
                        if(num=="臺南市") {	document.form.address2.options[ctr]=new Option("安定區");	ctr=ctr+1;	} 
                        /*高雄市*/
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("新興區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("前金區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("苓雅區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("鹽埕區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("鼓山區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("旗津區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("前鎮區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("三民區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("楠梓區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("小港區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("左營區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("仁武區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("大社區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("東沙群島");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("南沙群島");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("岡山區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("路竹區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("阿蓮區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("田寮區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("燕巢區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("橋頭區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("梓官區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("彌陀區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("永安區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("湖內區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("鳳山區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("大寮區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("林園區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("鳥松區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("大樹區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("旗山區");	ctr=ctr+1;	} 
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("美濃區");	ctr=ctr+1;	}
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("六龜區");	ctr=ctr+1;	}
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("內門區");	ctr=ctr+1;	}
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("杉林區");	ctr=ctr+1;	}
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("甲仙區");	ctr=ctr+1;	}
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("桃源區");	ctr=ctr+1;	}
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("那瑪夏區");	ctr=ctr+1;	}
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("茂林區");	ctr=ctr+1;	}
                        if(num=="高雄市") {	document.form.address2.options[ctr]=new Option("茄萣區");	ctr=ctr+1;	}
                        /*屏東縣*/
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("屏東市");	ctr=ctr+1;	} 
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("三地門鄉");	ctr=ctr+1;	} 
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("霧臺鄉");	ctr=ctr+1;	} 
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("瑪家鄉");	ctr=ctr+1;	} 
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("九如鄉");	ctr=ctr+1;	} 
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("里港鄉");	ctr=ctr+1;	} 
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("高樹鄉");	ctr=ctr+1;	} 
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("鹽埔鄉");	ctr=ctr+1;	} 
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("長治鄉");	ctr=ctr+1;	} 
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("麟洛鄉");	ctr=ctr+1;	} 
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("竹田鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("內埔鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("萬丹鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("潮州鎮");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("泰武鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("來義鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("萬巒鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("崁頂鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("新埤鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("南州鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("林邊鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("東港鎮");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("琉球鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("佳冬鄉");	ctr=ctr+1;	}	
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("新園鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("枋寮鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("枋山鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("春日鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("獅子鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("車城鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("牡丹鄉");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("恆春鎮");	ctr=ctr+1;	}
                        if(num=="屏東縣") {	document.form.address2.options[ctr]=new Option("滿州鄉");	ctr=ctr+1;	}
                        /*臺東縣*/
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("臺東市");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("綠島鄉");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("蘭嶼鄉");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("延平鄉");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("卑南鄉");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("鹿野鄉");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("關山鎮");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("海端鄉");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("池上鄉");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("東河鄉");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("成功鎮");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("長濱鄉");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("太麻里鄉");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("金峰鄉");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("大武鄉");	ctr=ctr+1;	} 
                        if(num=="臺東縣") {	document.form.address2.options[ctr]=new Option("達仁鄉");	ctr=ctr+1;	} 
                        /*花蓮縣*/
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("花蓮市");	ctr=ctr+1;	} 
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("新城鄉");	ctr=ctr+1;	} 
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("秀林鄉");	ctr=ctr+1;	} 
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("吉安鄉");	ctr=ctr+1;	} 
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("壽豐鄉");	ctr=ctr+1;	} 
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("鳳林鎮");	ctr=ctr+1;	}
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("光復鄉");	ctr=ctr+1;	}
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("豐濱鄉");	ctr=ctr+1;	}
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("瑞穗鄉");	ctr=ctr+1;	}
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("萬榮鄉");	ctr=ctr+1;	}
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("玉里鎮");	ctr=ctr+1;	}
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("卓溪鄉");	ctr=ctr+1;	}
                        if(num=="花蓮縣") {	document.form.address2.options[ctr]=new Option("富里鄉");	ctr=ctr+1;	}  
                        /*宜蘭縣*/
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("宜蘭市");	ctr=ctr+1;	} 
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("頭城鎮");	ctr=ctr+1;	} 
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("礁溪鄉");	ctr=ctr+1;	} 
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("壯圍鄉");	ctr=ctr+1;	} 
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("員山鄉");	ctr=ctr+1;	} 
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("羅東鎮");	ctr=ctr+1;	} 
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("三星鄉");	ctr=ctr+1;	} 
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("大同鄉");	ctr=ctr+1;	} 
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("五結鄉");	ctr=ctr+1;	} 
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("冬山鄉");	ctr=ctr+1;	} 
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("蘇澳鎮");	ctr=ctr+1;	} 
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("南澳鄉");	ctr=ctr+1;	} 
                        if(num=="宜蘭縣") {	document.form.address2.options[ctr]=new Option("釣魚臺");	ctr=ctr+1;	} 
                        /*澎湖縣*/
                        if(num=="澎湖縣") {	document.form.address2.options[ctr]=new Option("馬公市");	ctr=ctr+1;	} 
                        if(num=="澎湖縣") {	document.form.address2.options[ctr]=new Option("西嶼鄉");	ctr=ctr+1;	} 
                        if(num=="澎湖縣") {	document.form.address2.options[ctr]=new Option("望安鄉");	ctr=ctr+1;	} 
                        if(num=="澎湖縣") {	document.form.address2.options[ctr]=new Option("七美鄉");	ctr=ctr+1;	} 
                        if(num=="澎湖縣") {	document.form.address2.options[ctr]=new Option("白沙鄉");	ctr=ctr+1;	} 
                        if(num=="澎湖縣") {	document.form.address2.options[ctr]=new Option("湖西鄉");	ctr=ctr+1;	}
                        /*金門縣*/
                        if(num=="金門縣") {	document.form.address2.options[ctr]=new Option("金沙鎮");	ctr=ctr+1;	} 
                        if(num=="金門縣") {	document.form.address2.options[ctr]=new Option("金湖鎮");	ctr=ctr+1;	} 
                        if(num=="金門縣") {	document.form.address2.options[ctr]=new Option("金寧鄉");	ctr=ctr+1;	} 
                        if(num=="金門縣") {	document.form.address2.options[ctr]=new Option("金城鎮");	ctr=ctr+1;	} 
                        if(num=="金門縣") {	document.form.address2.options[ctr]=new Option("烈嶼鄉");	ctr=ctr+1;	} 
                        if(num=="金門縣") {	document.form.address2.options[ctr]=new Option("烏坵鄉");	ctr=ctr+1;	} 
                        /*連江縣*/
                        if(num=="連江縣") {	document.form.address2.options[ctr]=new Option("南竿鄉");	ctr=ctr+1;	} 
                        if(num=="連江縣") {	document.form.address2.options[ctr]=new Option("北竿鄉");	ctr=ctr+1;	} 
                        if(num=="連江縣") {	document.form.address2.options[ctr]=new Option("莒光鄉");	ctr=ctr+1;	} 
                        if(num=="連江縣") {	document.form.address2.options[ctr]=new Option("東引鄉");	ctr=ctr+1;	}                         
                        document.form.address2.length=ctr;
                        document.form.address2.options[0].selected=true;
                    } 
            </script>-->
        </div>
    </div>
@endsection