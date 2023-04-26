<form wire:submit.prevent="submit" class="w-[50%]">
    {{ $this->form }}

    <x-filament::button type="submit"  class="w-full mt-4">
        Check
    </x-filament::button>
</form>
