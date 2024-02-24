<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groups details</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>          
    {{-- Данне о студенте --}}    
    <div>
        <p>Фамилия: {{$data->surname}}</p>
        <p>Имя: {{$data->name}}</p>
        <p><small>Дата создания:{{$data->created_at ?? '-'}}</small></p>        
        <p><small>Дата обновления:{{$data->update_at ?? '-'}}</small></p>        
    </div>       
</body>
</html>