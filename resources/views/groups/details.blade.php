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
{{-- Данне о группе --}}    
<h1>{{$data->title}}</h1>
    <div class="alert alert-info">
        <p>Дата начала: {{$data->start_from ?? '-'}}</p>
        <p>Занятия начаты:{{$data->is_active}}</p>        
        
        <p><small>Дата создания:{{$data->created_at ?? '-'}}</small></p>        
        <p><small>Дата обновления:{{$data->update_at ?? '-'}}</small></p>        
    </div>
    {{-- Данные о студентах группы --}}
    <a href="{{ route('students.create',['group'=>$data->id]) }}"><button>Создать нового студента</button></a>                    
    <table>
        <thead>        
            <th>id</th>
            <th>group id</th>
            <th>surname</th>
            <th>name</th>            
            <th>created_at</th>
            <th>updated_at</th>
        </thead>
        <tbody>
            @foreach($table as $el)       
                <tr>
                    <td>{{ $el->id }}</td>
                    <td>{{ $el->group_id }}</td>
                    <td>{{ $el->surname }}</td>
                    <td>{{ $el->name }}</td>                    
                    <td>{{ $el->created_at ?? '-' }}</td>
                    <td>{{ $el->updated_at ?? '-'}}</td>
                    <td>    
                        <a href="{{ route('students.details', ['group'=>$data->id,'student'=>$el->id]) }}"><button>Детали</button></a>
                    </td>
                </tr>        
            @endforeach
        </tbody>    
</table>
</body>
</html>