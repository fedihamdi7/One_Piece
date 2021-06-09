@component('mail::message')
# Request Accepted

Hello **{{$clubUser->name}}** <br>
We are happy to inform you that your club request has been accepted <br>
Now you can use this [link](http://127.0.0.1:8000/ClubModel) To see how your Club Template going to look like.
<br>Feel Free to change and update your club informations via this [link](http://127.0.0.1:8000/responsable)
{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
