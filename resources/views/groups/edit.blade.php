<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groups edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>  
    <h1> Редактировать группу</h1>
    <form action="{{ route('submit') }}" method="post">
        @csrf
        <label for="title">Введите название группы</label>
        <input type="text" name="title" placeholder="введите название" id="name" value="{{ $data->title }}">
        
        <label for="title">Введите дату начала обучения</label>
        <input type="text" name="start_from" placeholder="дата начала" id="start_from" value="{{ $data->start_from }}">

        <input type="checkbox" name="is_active" id="is_active">
    </form>
</body>
</html>