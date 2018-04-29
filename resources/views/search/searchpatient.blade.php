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
        <div class="panel-heading">
            <h3>搜尋病患</h3>
        </div>
        <div class="panel-body">
        <div class="form-group">
        <input type="text" class="form-control" id="searchpatient" name="search"></input>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>姓名</th>
                    <th>縣市</th>
                    <th>鄉鎮</th>
                    <th>生日</th>
                    <th>手機號碼</th>
                    <th>大頭貼</th>
                    <th>高血壓</th>
                    <th>中風</th>
                    <th>植物人</th>
                    <th>失智</th>
                    <th>自閉症</th>
                    <th>智能障礙</th>
                    <th>精神病</th>
                    <th>電子信箱</th>
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