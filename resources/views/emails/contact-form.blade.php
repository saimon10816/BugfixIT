@component('mail::message')
 <strong>Name</strong> {{$contact['contactName']}} <br>
 <strong>Email</strong> {{$contact['contactEmail']}} <br>
 <strong>Subject</strong> {{$contact['contactSubject']}} <br>
 <strong>Message</strong> {{$contact['contactMessage']}} <br>
@endcomponent
