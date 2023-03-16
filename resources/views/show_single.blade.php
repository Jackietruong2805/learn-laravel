@foreach ($single_data as $item)
    Name: {{$item->student_name}}<br>
    Email: {{$item->student_email}}<br><br><br>
@endforeach