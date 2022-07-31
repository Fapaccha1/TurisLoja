<div>
    <div>
        <div class="sticky top-0 p-4 z-50 ">
            <ul class="flex sm:flex-row sm:space-x-8 sm:items-center justify-center">
                <li>
                    <input type="checkbox" value="22" wire:model="placesId" />
                    <span>Vilcabamba</span>
                </li>
                <li>
                    <input type="checkbox" value="24" wire:model="placesId" />
                    <span>Central</span>
                </li>
                <li>
                    <input type="checkbox" value="640" wire:model="placesId" />
                    <span>Terminal Terrestre</span>
                </li>
                <li>
                    <input type="checkbox" value="647" wire:model="placesId" />
                    <span>Puerta de la ciudad</span>
                </li>
                <li>
                    <input type="checkbox" wire:model="showDataLabels" />
                    <span>Mostrar valores</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-6 ">
        {{-- Gráfica 1 --}}
        <div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Cantidad de visitantes</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de usuarios por lugar.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-column-chart key="{{ $columnChartModel->reactiveKey() }}"
                                    :column-chart-model="$columnChartModel" />
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        {{-- Fin gráfica 1 --}}
         {{-- Gráfica 1 --}}
         <div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Medios de transporte usados</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de medios de transporte usados por lugar.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-column-chart key="{{ $multiColumnChartModel->reactiveKey() }}"
                                    :column-chart-model="$multiColumnChartModel" />
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        {{-- Fin gráfica 1 --}}

        {{-- Gráfica 1 --}}
        <div class="col-span-2">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Pais de origen</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de visitantes organizados por su país de origen y lugar.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-column-chart key="{{ $columnChartCountry->reactiveKey() }}"
                                    :column-chart-model="$columnChartCountry" />
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        {{-- Fin gráfica 1 --}}

        {{-- Gráfica 2 --}}
        <div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Días de visita</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de días de visita en el
                        lugar.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}"
                                    :pie-chart-model="$pieChartModel" />
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        {{-- Fin gráfica 2 --}}

        {{-- Gráfica 3 --}}
        <div >
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Razón de visita</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de usuarios que han
                        registrado su visita por una misma razón.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-tree-map-chart key="{{ $treeChartModel->reactiveKey() }}"
                                    :tree-map-chart-model="$treeChartModel" />
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
   
</div>