@component('mail::message')
# Introduction

This is {{$name}} <br>
From {{$email}} <br>
Mail message {{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
