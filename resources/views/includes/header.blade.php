<div class="flex justify-center p-6">
    <h1>ONLINE SUPPORT TICKET SYSTEM</h1>
</div>

<div class="flex items-center justify-center p-6">


   <a href="{{route('new-ticket')}}" class="m-3"><x-filament::button   >
           Add New Ticket
       </x-filament::button></a>


    <a href="{{route('ticket-status')}}" class="m-3"><x-filament::button   >
           Check Ticket Status
        </x-filament::button></a>

    <a href="/admin" class="m-3"><x-filament::button   >
            Log In
        </x-filament::button></a>


</div>
