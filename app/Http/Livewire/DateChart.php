<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Museum;
use App\Models\Reason;
use App\Models\Register;
use App\Models\Transport;
use Livewire\Component;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;

class DateChart extends Component
{
    public $monthId2021 = ['11', '12'];
    public $monthId2022 = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
    public $monthId = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];


    public $month_colors = [
        'Enero' => '#008FFB',
        'Febrero' => '#00E396',
        'Marzo' => '#FEB019',
        'Abril' => '#FF4560',
        'Mayo' => '#775DD0',
        'Junio' => '#3F51B5',
        'Julio' => '#546E7A',
        'Agosto' => '#D4526E',
        'Septiembre' => '#8D5B4C',
        'Octubre' => '#F86624',
        'Noviembre' => '#D7263D',
        'Diciembre' => '#1B998B'
    ];
    public $year_colors = [
        '2021' => '#008FFB',
        '2022' => '#00E396'
    ];

    public $firstRun = true;

    public $showDataLabels = false;

    public function months($month)
    {
        switch ($month) {
            case 1:
                return $name = "Enero";
                break;
            case 2:
                return $name = "Febrero";
                break;
            case 3:
                return $name = "Marzo";
                break;
            case 4:
                return $name = "Abril";
                break;
            case 5:
                return $name = "Mayo";
                break;
            case 6:
                return $name = "Junio";
                break;
            case 7:
                return $name = "Julio";
                break;
            case 8:
                return $name = "Agosto";
                break;
            case 9:
                return $name = "Septiembre";
                break;
            case 10:
                return $name = "Octubre";
                break;
            case 11:
                return $name = "Noviembre";
                break;
            case 12:
                return $name = "Diciembre";
                break;
        }
    }

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
        $year2021 = Register::whereIn('month_of_register', $this->monthId2021)->orderBy('month_of_register', 'asc')->get();

        $columnChart2021 = $year2021->Where('year_of_register', 2021)->groupBy('month_of_register')->reduce(
            function ($columnChart2021, $data) {
                $month = $data->first()->month_of_register;
                $name = $this->months($month);
                $value = $data->sum('number_of_tourist');
                return $columnChart2021->addColumn($name, $value, $this->month_colors[$name]);
            },
            LivewireCharts::columnChartModel()
                ->setTitle('Cantidad de turistas ')
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(true)
                ->setDataLabelsEnabled($this->showDataLabels)
                //->setOpacity(0.25)
                ->setColumnWidth(90)
                ->withGrid()
        );
        $year2022 = Register::whereIn('month_of_register', $this->monthId2022)->orderBy('month_of_register', 'asc')->get();

        $columnChart2022 = $year2022->Where('year_of_register', 2022)->groupBy('month_of_register')->reduce(
            function ($columnChart2022, $data) {
                $month = $data->first()->month_of_register;
                $name = $this->months($month);
                $value = $data->sum('number_of_tourist');
                return $columnChart2022->addColumn($name, $value, $this->month_colors[$name]);
            },
            LivewireCharts::columnChartModel()
                ->setTitle('Cantidad de turistas ')
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(true)
                ->setDataLabelsEnabled($this->showDataLabels)
                //->setOpacity(0.25)
                ->setColumnWidth(90)
                ->withGrid()
        );

        $year = Register::whereIn('year_of_register', ['2021', '2022'])->get();

        $pieChartYears = $year->groupBy('year_of_register')->reduce(
            function ($pieChartYears, $data) {
                $year = $data->first()->year_of_register;
                $value = $data->sum('year_of_register');
                return $pieChartYears->addSlice($year, $value, $this->year_colors[$year]);
            },
            LivewireCharts::pieChartModel()
                //->setTitle('Expenses by Type')
                ->setAnimated($this->firstRun)
                ->setType('pie')
                //->withoutLegend()
                ->legendPositionBottom()
                ->legendHorizontallyAlignedCenter()
                ->setDataLabelsEnabled($this->showDataLabels)
        );

        $general = Register::whereIn('month_of_register', $this->monthId)->orderBy('month_of_register', 'asc')->get();

        $areaChartAll = $general->groupBy('month_of_register')->reduce(
            function ($areaChartAll, $data) {
                $month = $data->first()->month_of_register;
                $name = $this->months($month);
                $value = $data->sum('number_of_tourist');
                return $areaChartAll->addPoint($name, $value);
            },
            LivewireCharts::areaChartModel()
                //->setTitle('Expenses Peaks')
                ->setAnimated($this->firstRun)
                ->setColor('#f6ad55')
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setXAxisVisible(true)
                ->sparklined()
        );

        /* $columnChartPlace = $general->groupBy('month_of_register')->reduce(function ($columnChartPlace, $data) {
            $month = $data->first()->month_of_register;
            $name = $this->months($month);
            $value = $data->sum('days_of_visit');
            return $columnChartPlace->addColumn($name, $value, $this->month_colors[$name]);

        }, LivewireCharts::columnChartModel()
            ->setAnimated($this->firstRun)
            ->setLegendVisibility(false)
            ->setDataLabelsEnabled($this->showDataLabels)
            ->setHorizontal(90)
            ->setColumnWidth(90)
            ->withGrid()
        ); */

        $pieChartDays = $general->groupBy('month_of_register')->reduce(function ($pieChartDays, $data) {
            $month = $data->first()->month_of_register;
            $name = $this->months($month);
            $value = $data->sum('days_of_visit');
            return $pieChartDays->addSlice($name, $value, $this->month_colors[$name]);
        }, LivewireCharts::pieChartModel()
            //->setTitle('Expenses by Type')
            ->setAnimated($this->firstRun)
            ->setType('donut')
            //->withoutLegend()
            ->legendPositionBottom()
            ->legendHorizontallyAlignedCenter()
            ->setDataLabelsEnabled($this->showDataLabels)
        );

        $treeChartReason = $general->groupBy('reason_item_id')->reduce(function (TreeMapChartModel $chartModel, $data) {
            $reason = $data->first()->reason_item_id;
            $aux = Reason::where('id', $reason)->get()->first();
            $name = $aux->name;
            $value = $data->count('reason_item_id');
            return $chartModel->addBlock($name, $value);
        }, LivewireCharts::treeMapChartModel()
            ->setAnimated($this->firstRun)
            ->setDistributed(true)
            ->setColors(['#f6ad55', '#fc8181', '#90cdf4', '#66DA26', '#b01a1b', '#d41b2c', '#ec3c3b',])
        );

        $columnChartCountry = $general->groupBy('country_id')->reduce(function ($columnChartCountry, $data) {
            $country = $data->first()->country_id;
            $aux = Country::where('id', $country)->get()->first();
            $name = $aux->name;
            $value = $data->count('country_id');
            return $columnChartCountry->addColumn($name, $value, $this->randomColor());

        }, LivewireCharts::columnChartModel()
            ->setTitle('Cantidad de turistas ')
            ->setAnimated($this->firstRun)
            ->setLegendVisibility(false)
            ->setDataLabelsEnabled($this->showDataLabels)
            //->setOpacity(0.25)
            ->setColumnWidth(90)
            ->withGrid()
        );

        $multiColumnChartTransport = $general->groupBy('transport_item_id')
        ->reduce(function ($multiColumnChartTransport, $data) {
            $transport = $data->first()->transport_item_id;
            $aux = Transport::where('id', $transport)->get()->first();
            $name = $aux->name;
            $value = $data->count('transport_item_id');

            return $multiColumnChartTransport->addSeriesColumn($name, "Medios de transporte", $value);
        }, LivewireCharts::multiColumnChartModel()
            ->setAnimated($this->firstRun)
            ->setDataLabelsEnabled($this->showDataLabels)
            ->stacked()
            ->withGrid()
        );


        $this->firstRun = false;

        return view('livewire.date-chart')
            ->with([
                'columnChart2021' => $columnChart2021,
                'columnChart2022' => $columnChart2022,
                'columnChartCountry' => $columnChartCountry,
                'multiColumnChartTransport' => $multiColumnChartTransport,
                'treeChartReason' => $treeChartReason,
                'pieChartDays' => $pieChartDays,
                'pieChartYears' => $pieChartYears,
                'areaChartAll' => $areaChartAll
            ]);
    }
}
