<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Groups</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<h1 class="bg-red">Список групп</h1>
<a href="{{ route('groups.create') }}"><button>Создать новую группу</button></a>                    
<table class="table">
    <thead>        
        <th>id</th>
        <th>title</th>
        <th>start from</th>
        <th>is active</th>
        <th>created_at</th>
        <th>updated_at</th>
    </thead>
    <tbody>
        @foreach($groups as $group)       
            <tr>
                <td>{{ $group->id }}</td>
                <td>{{ $group->title }}</td>
                <td>{{ $group->start_from }}</td>
                <td>{{ $group->is_active }}</td>
                <td>{{ $group->created_at ?? '-' }}</td>
                <td>{{ $group->updated_at ?? '-'}}</td>
                <td>    
                    <a href="{{ route('groups.details', $group->id) }}"><button>Детали</button></a>
                </td>
            </tr>        
        @endforeach
    </tbody>    
</table>
</body>
</html>
