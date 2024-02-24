<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groups list</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Все группы</h1>
    
    @foreach($data as $el)
        <div>                        
            <p>{{$el->title}} ({{$el->start_from}}) 
                {{--<a href="{{ route('edit1', $el->id) }}"> --}}
                    <button>Редактировать</button>
                    <button>Удалить</button>
                {{--</a>--}}
            </p>            
        </div>
    @endforeach    
</body>
</html>