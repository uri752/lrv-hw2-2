<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groups create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Создать группу</h1>
    <form action="{{ route('groups.submit') }}" method="post">    
        @csrf
        
        <div>
            <label for="title">Введите название группы</label>
            <input type="text" name="title" placeholder="введите название" id="name">
        </div>        

        <div>
            <label for="title">Введите дату начала обучения</label>
            <input type="date" name="start_from" placeholder="дата начала" id="start_from">
        </div>
        
        <div>
            <label for="is_active">Группа начала обучение</label>
            <input type="checkbox" name="is_active" id="is_active">
        </div>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>