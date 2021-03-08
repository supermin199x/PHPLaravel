<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <title>navbar</title>
</head>

<body>
    <nav class="navbar">
        <ul>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('regismember')}}">สมัครสมาชิก</a>
            <a href="{{route('regisorg')}}">องค์กร</a>
            <a href="{{route('login')}}">เข้าสู่ระบบ</a>
        </ul>
    </nav>
</body>
</html>