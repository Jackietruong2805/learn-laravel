@foreach ($students as $item)
    Name: {{$item->student_name}}<br>
    Phone: {{@$item->rPhone->phone}}<br><br><br>
    
@endforeach