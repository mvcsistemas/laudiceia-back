<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('mvc.front_url')">
    <img style="width:  14rem" src="https://api.laudiceiapodologia.com/assets/images/logo.png" alt="{{config("mvc.nome_clinica")}}">
</x-mail::header>
</x-slot:header>

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
{{ $subcopy }}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
