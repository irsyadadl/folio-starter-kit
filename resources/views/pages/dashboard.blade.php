<?php
    \Laravel\Folio\middleware(['auth', 'verified'])
?>
<x-app-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>
</x-app-layout>
