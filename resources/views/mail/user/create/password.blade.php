@component('mail::message')
Ваш пароль для входа в систему :  {{$data['password']}}

@component('mail::button', ['url' => "http://poligon.local"])
Перейти на сайт
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
