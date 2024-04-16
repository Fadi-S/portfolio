<x-mail::message>
# Message

You have a new message from **{{ $message->first_name }} {{ $message->last_name }}**.

## Details
Name: **{{ $message->first_name }} {{ $message->last_name }}**<br>
Phone: [{{ $message->phone }}](tel:{{ $message->phone }})<br>
Email: [{{ $message->email }}](mailto:{{ $message->email }})<br>
### Message
{{ $message->message }}<br>

</x-mail::message>
