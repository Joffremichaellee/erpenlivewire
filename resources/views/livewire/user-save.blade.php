<div>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>



    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    
    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-card-component>
                @slot('title')

                <h1>Lista de usuarios</h1>
    
               <!--  <input type="text" wire:model="name"> -->
               
            
                                
               
                @endslot

                @slot('html')

                    <form wire:submit.prevent="submit">
                        <x-jet-input type="text" wire:model="name" aria-placeholder="nombre"/>
                        <x-jet-input type="email" wire:model="email" aria-placeholder="email"/>
                        <x-jet-input type="password" wire:model="password" aria-placeholder="password"/>

                        <x-jet-danger-button type="submit">
                            
                            gravar
                            
                        </x-jet-danger-button>
                    </form>
   
                @endslot

            </x-card-component>

            
        </div>
    </div>
    
</div>


