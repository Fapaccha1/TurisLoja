<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;
use App\Models\Place;
use App\Models\Reason;
use App\Models\Register;
use App\Models\Transport;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;

class VisitorsChart extends Component
{
    public $placesId = ['22', '24', '640', '647'];

    public $colors = [
        'VILCABAMBA' => '#f6ad55',
        'CENTRAL' => '#fc8181',
        'TERMINAL TERRESTRE' => '#90cdf4',
        'PUERTA DE LA CIUDAD' => '#66DA26',
    ];

    public $firstRun = true;

    public $showDataLabels = false;

    function randomColor()
    {
        $str = "#";
        for ($i = 0; $i < 6; $i++) {
            $randNum = rand(0, 15);
            switch ($randNum) {
                case 10:
                    $randNum = "A";
                    break;
                case 11:
                    $randNum = "B";
                    break;
                case 12:
                    $randNum = "C";
                    break;
                case 13:
                    $randNum = "D";
                    break;
                case 14:
                    $randNum = "E";
                    break;
                case 15:
                    $randNum = "F";
                    break;
            }
            $str .= $randNum;
        }
        return $str;
    }

    public function render()
    {
        $visitors = Register::whereIn('place_item_id', $this->placesId)->get();

        $columnChartModel = $visitors->groupBy('place_item_id')->reduce(
            function ($columnChartModel, $data) {
                $type = $data->first()->place_item_id;
                $aux = Place::where('id', $type)->get()->first();
                $name = $aux->name;
                $value = $data->sum('number_of_tourist');
                return $columnChartModel->addColumn($name, $value, $this->colors[$name]);
            },
            LivewireCharts::columnChartModel()
                ->setTitle('Cantidad de turistas ')
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(false)
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setHorizontal(90)
                ->setColumnWidth(90)
                ->withGrid()
        );

        $pieChartModel = $visitors->groupBy('place_item_id')->reduce(
            function ($pieChartModel, $data) {
                $type = $data->first()->place_item_id;
                $aux = Place::where('id', $type)->get()->first();
                $name = $aux->name;
                $value = $data->sum('days_of_visit');
                return $pieChartModel->addSlice($name, $value, $this->colors[$name]);
            },
            LivewireCharts::pieChartModel()
                //->setTitle('Expenses by Type')
                ->setAnimated($this->firstRun)
                ->setType('donut')
                //->withoutLegend()
                ->legendPositionBottom()
                ->legendHorizontallyAlignedCenter()
                ->setDataLabelsEnabled($this->showDataLabels)
        );

        $treeChartModel = $visitors->groupBy('reason_item_id')->reduce(
            function (TreeMapChartModel $chartModel, $data) {
                $reason = $data->first()->reason_item_id;
                $aux = Reason::where('id', $reason)->get()->first();
                $name = $aux->name;
                $value = $data->count('reason_item_id');

                return $chartModel->addBlock($name, $value);
            },
            LivewireCharts::treeMapChartModel()
                ->setAnimated($this->firstRun)
                ->setDistributed(true)
                ->setColors(['#f6ad55', '#fc8181', '#90cdf4', '#66DA26', '#b01a1b', '#d41b2c', '#ec3c3b',])
        );

        $columnChartCountry = $visitors->groupBy('country_id')->reduce(
            function ($columnChartCountry, $data) {
                $country = $data->first()->country_id;
                $aux = Country::where('id', $country)->get()->first();
                $name = $aux->name;
                $value = $data->count('country_id');
                return $columnChartCountry->addColumn($name, $value, $this->randomColor());
            },
            LivewireCharts::columnChartModel()
                ->setTitle('Cantidad de turistas ')
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(false)
                ->setDataLabelsEnabled($this->showDataLabels)
                //->setOpacity(0.25)
                ->setColumnWidth(90)
                ->withGrid()
        );

        $multiColumnChartModel = $visitors->groupBy('transport_item_id')
            ->reduce(
                function ($multiColumnChartModel, $data) {
                    $transport = $data->first()->transport_item_id;
                    $aux = Transport::where('id', $transport)->get()->first();
                    $name = $aux->name;
                    $value = $data->count('transport_item_id');

                    return $multiColumnChartModel->addSeriesColumn($name, "Medios de transporte", $value);
                },
                LivewireCharts::multiColumnChartModel()
                    ->setAnimated($this->firstRun)
                    ->setDataLabelsEnabled($this->showDataLabels)
                    ->stacked()
                    ->withGrid()
            );


        $this->firstRun = false;

        return view('livewire.visitors-chart')
            ->with([
                'columnChartModel' => $columnChartModel,
                'columnChartCountry' => $columnChartCountry,
                'multiColumnChartModel' => $multiColumnChartModel,
                'pieChartModel' => $pieChartModel,
                'treeChartModel' => $treeChartModel,
            ]);
    }
}
