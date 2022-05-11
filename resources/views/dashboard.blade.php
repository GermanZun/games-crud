<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    @livewire('game-form')
    @livewire('game-list')

</x-app-layout>
