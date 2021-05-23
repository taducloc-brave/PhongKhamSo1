<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phòng khám số 1</title>
</head>
<body>
<h1>Chào, <i>{{$data['name']}}</i></h1>
<p>Cảm ơn bạn đã đặt lịch khám ở phòng khám của chúng tôi vào thời gian <i>{{$data['dateBook']}}</i> - <i>{{$data['timeBook']}}</i></p>
<p>Bác sĩ phụ trách: Bác sĩ - <i>{{$data['nameDoctor']}}</i></p>
<p>Xin chân thành cảm ơn.</p>
</body>
</html>
