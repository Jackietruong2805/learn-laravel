@foreach ($results as $item)
    Name: {{$item->student_name}}<br>
    Amount: {{$item->fee_amount}}<br>
    Month: {{$item->fee_month}}<br><br><br>
@endforeach