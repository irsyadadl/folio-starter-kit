<?php

use function Livewire\Volt\{state};

state(['count' => 0]);

$increment = fn () => $this->count++;
$decrement = fn () => $this->count--;
?>

<div class="bg-white p-12 h-96 shadow-lg grid place-content-center rounded-2xl">
    <div class="text-7xl mx-auto text-center">
        {{ $count }}
    </div>
    <div class="flex justify-center mt-6 gap-2">
        <x-primary-button wire:click="decrement" type="button">
            Decrement
        </x-primary-button>
        <x-primary-button wire:click="increment" type="button">
            Increment
        </x-primary-button>
    </div>
</div>
