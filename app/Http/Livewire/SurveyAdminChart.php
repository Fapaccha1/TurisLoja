<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\MuseumRegister;
use Livewire\Component;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;


class SurveyAdminChart extends Component
{

    public $colors = [
        '1' => '#f6ad55',
        '2' => '#fc8181',
        '3' => '#90cdf4',
        '4' => '#66DA26',
        '5' => '#775DD0',
        '6' => '#3F51B5',
        '7' => '#546E7A',
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

    public function days($day)
    {
        switch ($day) {
            case 1:
                return $name = "Lunes";
                break;
            case 2:
                return $name = "Martes";
                break;
            case 3:
                return $name = "Miércoles";
                break;
            case 4:
                return $name = "Jueves";
                break;
            case 5:
                return $name = "Viernes";
                break;
            case 6:
                return $name = "Sábado";
                break;
            case 7:
                return $name = "Domingo";
                break;
        }
    }

    public $firstRun = true;
    public $showDataLabels = false;

    public function render()
    {
        $museums = MuseumRegister::where('user_id', auth()->user()->id)->orderBy('day', 'asc')->get();

        $columnChartModel = $museums->groupBy('day')->reduce(
            function ($columnChartModel, $data) {
                $day = $data->first()->day;
                $name = $this->days($day);
                $value = $data->count('day');
                return $columnChartModel->addColumn($name, $value, $this->colors[$day]);
            },
            LivewireCharts::columnChartModel()
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(false)
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setHorizontal(90)
                ->setColumnWidth(90)
                ->withGrid()
        );

        $pieChartModel = $museums->groupBy('age')->reduce(
            function ($pieChartModel, $data) {
                $type = $data->first()->age;
                $value = $data->count('age');
                return $pieChartModel->addSlice($type, $value, $this->randomColor());
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

        $pieChartGender = $museums->groupBy('gender')->reduce(
            function ($pieChartGender, $data) {
                $type = $data->first()->gender;
                $value = $data->count('gender');
                return $pieChartGender->addSlice($type, $value, $this->colorsGender[$type]);
            },
            LivewireCharts::pieChartModel()
                //->setTitle('Expenses by Type')
                ->setAnimated($this->firstRun)
                //->withoutLegend()
                ->legendPositionBottom()
                ->legendHorizontallyAlignedCenter()
                ->setDataLabelsEnabled($this->showDataLabels)
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
                ->setTitle('Cantidad de turistas ')
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(false)
                ->setDataLabelsEnabled($this->showDataLabels)
                //->setOpacity(0.25)
                ->setColumnWidth(90)
                ->withGrid()
        );

        return view('livewire.survey-admin-chart')
            ->with([
                'columnChartModel' => $columnChartModel,
                'columnChartCountry' => $columnChartCountry,
                'multiColumnChartModel' => $multiColumnChartModel,
                'pieChartModel' => $pieChartModel,
                'pieChartGender' => $pieChartGender
            ]);
    }
}
