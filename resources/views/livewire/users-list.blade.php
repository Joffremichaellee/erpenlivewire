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
                <x-jet-input wire:model="name" class="block w-full mt-1"/>

                <x-jet-secondary-button wire:click="cleanFilter">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                      </svg>
                </x-jet-secondary-button>

                <table>
                    <thead>
                        <tr>
                            <th class="p-3">Nombre</th>
                            <th class="p-3">Email</th>
                            <th class="p-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $u)
                        <tr>
                            <td class="p-3 border">{{ $u->name }}</td>
                            <td class="p-3 border">{{ $u->email }}</td>
                            <td class="p-3 border">
                                <x-a class="p-1">
                                   
                                     <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 bg-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                      </svg>
                                </x-a>
                                <x-jet-danger-button wire:click="delete({{ $u}})">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                      </svg>
                                </x-jet-danger-button>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="3">
                                    <p> No Hay Registros</p>
                                </td>
                            </tr>

                        @endforelse
                    </tbody>
                    
                </table>
                {{ $users->links() }}    
                @endslot
            </x-card-component>

            
        </div>
    </div>
    
</div>



