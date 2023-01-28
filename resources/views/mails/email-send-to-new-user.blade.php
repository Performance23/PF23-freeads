<x-mail::message>
    # Code de vérification

    @if ($code)
        <x-mail::panel>
            {{ $code }}
        </x-mail::panel>
    @endif

    Merci,<br>
    {{ config('app.name') }}
</x-mail::message>
