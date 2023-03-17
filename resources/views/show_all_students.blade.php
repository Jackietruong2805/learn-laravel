@foreach ($students as $item)
    Name: {{$item->rStudent->student_name}}<br>
    Phone: {{$item->phone}}<br><br><br>
    
@endforeach