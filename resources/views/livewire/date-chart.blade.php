<div>
    <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-6">

        {{-- Gráfica total users --}}
        <div class="col-span-3">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg ">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Visitantes por mes</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de visitantes por mes.</p>
                    
                    <ul class="flex sm:flex-row sm:space-x-8 sm:items-center justify-center pt-2">
                        <li>
                            <input type="checkbox" value="1" wire:model="monthId" />
                            <span>Enero</span>
                        </li>
                        <li>
                            <input type="checkbox" value="2" wire:model="monthId" />
                            <span>Febrero</span>
                        </li>
                        <li>
                            <input type="checkbox" value="3" wire:model="monthId" />
                            <span>Marzo</span>
                        </li>
                        <li>
                            <input type="checkbox" value="4" wire:model="monthId" />
                            <span>Abril</span>
                        </li>
                        <li>
                            <input type="checkbox" value="5" wire:model="monthId" />
                            <span>Mayo</span>
                        </li>
                        <li>
                            <input type="checkbox" value="6" wire:model="monthId" />
                            <span>Junio</span>
                        </li>
                        <li>
                            <input type="checkbox" value="7" wire:model="monthId" />
                            <span>Julio</span>
                        </li>
                        <li>
                            <input type="checkbox" value="8" wire:model="monthId" />
                            <span>Agosto</span>
                        </li>
                        <li>
                            <input type="checkbox" value="9" wire:model="monthId" />
                            <span>Septiembre</span>
                        </li>
                        <li>
                            <input type="checkbox" value="10" wire:model="monthId" />
                            <span>Octubre</span>
                        </li>
                        <li>
                            <input type="checkbox" value="11" wire:model="monthId" />
                            <span>Noviembre</span>
                        </li>
                        <li>
                            <input type="checkbox" value="12" wire:model="monthId" />
                            <span>Diciembre</span>
                        </li>
                        <li>
                            <input type="checkbox" wire:model="showDataLabels" />
                            <span>Mostrar valores</span>
                        </li>
                    </ul>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-area-chart key="{{ $areaChartAll->reactiveKey() }}"
                                    :area-chart-model="$areaChartAll" />
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        {{-- Fin gráfica total users --}}

        {{-- Gráfica Reasons --}}
        <div class="col-span-2">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Razón de visita</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de razones registradas por mes.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-tree-map-chart key="{{ $treeChartReason->reactiveKey() }}"
                                    :tree-map-chart-model="$treeChartReason" />
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        {{-- Fin gráfica Reasons --}}

        {{-- Gráfica Days --}}
        <div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Dias de visita</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de dias de visita distribuida en meses.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-pie-chart key="{{ $pieChartDays->reactiveKey() }}"
                                    :pie-chart-model="$pieChartDays" />
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        {{-- Fin gráfica Days --}}

        {{-- Gráfica Transport --}}
        <div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Medios de transporte utilizados</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla el medio de transporte usado por meses.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-column-chart key="{{ $multiColumnChartTransport->reactiveKey() }}"
                                    :column-chart-model="$multiColumnChartTransport" />
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        {{-- Fin gráfica Transport --}}

        {{-- Gráfica country --}}
        <div class="col-span-2">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Lugar de residencia</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de visitantes registrados de un mismo país por meses.</p>
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
        {{-- Fin gráfica country --}}

        {{-- Gráfica Years --}}
        <div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Visitantes por año</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de visitantes en los años 2021 y 2022.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-pie-chart key="{{ $pieChartYears->reactiveKey() }}"
                                    :pie-chart-model="$pieChartYears" />
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        {{-- Fin gráfica Years --}}

    
        {{-- Gráfica 2021 --}}
        <div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Visitantes 2021</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de visitantes por mes en el año 2021.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-column-chart key="{{ $columnChart2021->reactiveKey() }}"
                                    :column-chart-model="$columnChart2021" />
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        {{-- Fin gráfica 2021 --}}

        {{-- Gráfica 2022 --}}
        <div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Visitantes 2022</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de visitantes por mes en el año 2022.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-column-chart key="{{ $columnChart2022->reactiveKey() }}"
                                    :column-chart-model="$columnChart2022" />
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        {{-- Fin gráfica 2022 --}}


        

    </div>
</div>