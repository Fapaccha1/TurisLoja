<div>
    <div>
        <div class="sticky top-0 p-4 z-50 ">
            <ul class="flex sm:flex-row sm:space-x-8 sm:items-center justify-center">
                <li>
                    <input type="checkbox" value="1" wire:model="museumId" />
                    <span>Museo1</span>
                </li>
                <li>
                    <input type="checkbox" value="2" wire:model="museumId" />
                    <span>Museo2</span>
                </li>
                <li>
                    <input type="checkbox" value="3" wire:model="museumId" />
                    <span>Museo3</span>
                </li>
                <li>
                    <input type="checkbox" value="4" wire:model="museumId" />
                    <span>Museo4</span>
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
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Cantidad de registros</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de registros realizados por museo.</p>
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
        <div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Promedio de edad</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla el promedio de edad de visitante por museo.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-column-chart key="{{ $columnChartAge->reactiveKey() }}"
                                    :column-chart-model="$columnChartAge" />
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
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Cantidad de registros por país</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de registros realizados por país de procedencia.</p>
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
        
    </div>
</div>
