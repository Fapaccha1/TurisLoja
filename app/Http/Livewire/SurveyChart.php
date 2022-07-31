<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Museum;
use App\Models\MuseumRegister;
use Livewire\Component;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

class SurveyChart extends Component
{

    public $museumId = ["1","2","3","4"];

    public $colors = [
        '1' => '#f6ad55',
        '2' => '#fc8181',
        '3' => '#90cdf4',
        '4' => '#66DA26',
    ];

    public $colorsGender = [
        'Masculino' => '#f6ad55',
        'Femenino' => '#fc8181',
    ];

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

    public $firstRun = true;

    public $showDataLabels = false;


    public function render()
    {
        $museums = MuseumRegister::whereIn('museum_id', $this->museumId)->get();

        $columnChartModel = $museums->groupBy('museum_id')->reduce(
            function ($columnChartModel, $data) {
                $type = $data->first()->museum_id;
                $aux = Museum::where('id', $type)->get()->first();
                $name = $aux->name;
                $value = $data->count('id');
                return $columnChartModel->addColumn($name, $value, $this->colors[$type]);
            },
            LivewireCharts::columnChartModel()
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(false)
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setHorizontal(90)
                ->setColumnWidth(90)
                ->withGrid()
        );

        $pieChartModel = $museums->groupBy('gender')->reduce(
            function ($pieChartModel, $data) {
                $type = $data->first()->gender;
                $value = $data->count('gender');
                return $pieChartModel->addSlice($type, $value, $this->colorsGender[$type]);
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

        $columnChartAge = $museums->groupBy('museum_id')->reduce(
            function ($columnChartAge, $data) {
                $type = $data->first()->museum_id;
                $aux = Museum::where('id', $type)->get()->first();
                $name = $aux->name;
                $value = $data->avg('id');
                return $columnChartAge->addColumn($name, $value, $this->colors[$type]);
            },
            LivewireCharts::columnChartModel()
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(false)
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setColumnWidth(90)
                ->withGrid()
        );

        $multiColumnChartModel = $museums->groupBy('transport')->reduce(
            function ($multiColumnChartModel, $data) {
                $transport = $data->first()->transport;
                $value = $data->count('transport');

                return $multiColumnChartModel->addSeriesColumn($transport, "Medios de transporte", $value);
            },
            LivewireCharts::multiColumnChartModel()
                ->setAnimated($this->firstRun)
                ->setDataLabelsEnabled($this->showDataLabels)
                ->stacked()
                ->withGrid()
        );

        $columnChartCountry = $museums->groupBy('country_id')->reduce(
            function ($columnChartCountry, $data) {
                $country = $data->first()->country_id;
                $aux = Country::where('id', $country)->get()->first();
                $name = $aux->name;
                $value = $data->count('country_id');
                return $columnChartCountry->addColumn($name, $value, $this->randomColor());
            },
            LivewireCharts::columnChartModel()
                ->setTitle('Cantidad de registros por país')
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(false)
                ->setDataLabelsEnabled($this->showDataLabels)
                //->setOpacity(0.25)
                ->setColumnWidth(90)
                ->withGrid()
        );

        $this->firstRun = false;

        return view('livewire.survey-chart')
            ->with([
                'columnChartModel' => $columnChartModel,
                'columnChartAge' => $columnChartAge,
                'columnChartCountry' => $columnChartCountry,
                'multiColumnChartModel' => $multiColumnChartModel,
                'pieChartModel' => $pieChartModel,
            ]);
    }
}
