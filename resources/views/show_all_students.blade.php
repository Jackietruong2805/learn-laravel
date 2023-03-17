@foreach ($students as $item)
    Name: {{$item->student_name}}<br>
    @foreach ($item->rPhone as $single)
        Phone: {{$single->phone}}<br>
    @endforeach
    <br><br>
@endforeach