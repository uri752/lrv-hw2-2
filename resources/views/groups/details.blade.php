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
<h1>{{$group->title}}</h1>
    <div class="alert alert-info">
        <p>Дата начала: {{$group->start_from ?? '-'}}</p>
        <p>Занятия начаты:{{$group->is_active}}</p>        
        
        <p><small>Дата создания:{{$group->created_at ?? '-'}}</small></p>        
        <p><small>Дата обновления:{{$group->update_at ?? '-'}}</small></p>        
    </div>
    {{-- Данные о студентах группы --}}
    <a href="{{ route('students.create',['group'=>$group->id]) }}"><button>Создать нового студента</button></a>                    
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
            @foreach($students as $student)       
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->group_id }}</td>
                    <td>{{ $student->surname }}</td>
                    <td>{{ $student->name }}</td>                    
                    <td>{{ $student->created_at ?? '-' }}</td>
                    <td>{{ $student->updated_at ?? '-'}}</td>
                    <td>    
                        <a href="{{ route('students.details', ['group'=>$group->id,'student'=>$student->id]) }}"><button>Детали</button></a>
                    </td>
                </tr>        
            @endforeach
        </tbody>    
</table>
</body>
</html>