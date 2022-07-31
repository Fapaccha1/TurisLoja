<div>
    <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-6 ">

        {{-- Gráfica 1 --}}
        <div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Cantidad de registros por día</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de registros realizados por día.</p>
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
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Número de personas por edad</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de personas que tienen una misma edad.</p>
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

        {{-- Gráfica 2 --}}
        <div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Género</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de días de personas de un mismo género.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:gap-4 sm:px-6">
                            <div style="height: 32rem;">
                                <livewire:livewire-pie-chart key="{{ $pieChartGender->reactiveKey() }}"
                                    :pie-chart-model="$pieChartGender" />
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
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de medios de transporte usados.</p>
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
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Se detalla la cantidad de visitantes organizados por su país de origen.</p>
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
