<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Создать студента</h1>
    <form action="{{ route('students.submit',['group'=>$group]) }}" method="post">    
        @csrf
        
        <div>
            <label for="surname">Введите фамилию студента</label>
            <input type="text" name="surname" placeholder="введите фамилию" id="surname">
        </div>        

        <div>
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="введите имя" id="name">
        </div>
                
        <button type="submit">Отправить</button>
    </form>
</body>
</html>