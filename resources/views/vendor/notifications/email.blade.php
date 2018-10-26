@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# @lang('Whoops!')
@else
{{--# @lang('Hello!')--}}
# @lang('Hola!')
@endif
@endif

{{-- Intro Lines --}}
{{--@foreach ($introLines as $line)--}}
{{--{{ $line }}--}}

{{--@endforeach--}}
<p>Estas recibiendo este mensaje porque recibimos una solicitud para restablecer la contraseña de esta cuenta.</p>

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
{{--@foreach ($outroLines as $line)--}}
{{--{{ $line }}--}}

{{--@endforeach--}}
<p>Si no realizaste la solicitud, hacer caso omiso a este correo.</p>

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
{{--@lang('Regards'),<br>{{ config('app.name') }}--}}
@lang('Atentamente'),<br>Localizaciones
@endif

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
{{--@lang(--}}
    {{--"If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\n".--}}
    {{--'into your web browser: [:actionURL](:actionURL)',--}}
    {{--[--}}
        {{--'actionText' => $actionText,--}}
        {{--'actionUrl' => $actionUrl--}}
    {{--]--}}
{{--)--}}
@lang(
    "Si estas teniendo problemas con el boton \":actionText\", copia y pega en tu navegador\n".
    'la siguiente URL: [:actionURL](:actionURL)',
    [
        'actionText' => $actionText,
        'actionUrl' => $actionUrl
    ]
)
@endcomponent
@endisset
@endcomponent
