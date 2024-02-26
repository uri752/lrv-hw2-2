<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student details</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>          
    {{-- Данные о студенте --}}    
    <div>
        <p>Фамилия: {{$student_data->surname}}</p>
        <p>Имя: {{$student_data->name}}</p>
        <p><small>Дата создания:{{$student_data->created_at ?? '-'}}</small></p>        
        <p><small>Дата обновления:{{$student_data->update_at ?? '-'}}</small></p>        
    </div>       
</body>
</html>