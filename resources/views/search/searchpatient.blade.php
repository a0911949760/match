<!DOCTYPE html>
<html>
<head>
    <title>看護媒合平台</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading" style="text-align:center">
            <h3>搜尋一般用戶</h3>
        </div>
        <div class="panel-body">
        <div class="form-group">
        <input type="text" class="form-control" id="searchpatient" name="search" placeholder="搜尋關鍵字"></input>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th colspan="8"></th>
                    <th colspan="7" class="text-center">需照顧情況:</th>
                    <th colspan="1"></th>
                </tr>
                <tr>
                    <th>id</th>
                    <th>姓名</th>
                    <th>大頭貼</th>
                    <th>性別</th>
                    <th>出生年月日</th>
                    <th>手機號碼</th>
                    <th>縣市</th>
                    <th>鄉鎮</th>
                    <th>行動不便</th>
                    <th>中風</th>
                    <th>植物人</th>
                    <th>失智</th>
                    <th>自閉症</th>
                    <th>智能障礙</th>
                    <th>精神病</th>
                    <th>學歷</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $('#searchpatient').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
                type:'get',
                url:'{{URL::to('search/searchpatient')}}',
                data:{'searchpatient':$value},
                success:function(data){
                    $('tbody').html(data);
                }
                
            });
        })
    </script>
</body>
</html>