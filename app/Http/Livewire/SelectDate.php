<?php

namespace App\Http\Livewire;

use CalendR\Calendar;
use Livewire\Component;

class SelectDate extends Component
{
    public $selectedDate;

    public $year;
    public $useYear;
    public $month;
    public $useMonth;
    public $day;

    public function mount(string $selectedDate)
    {
        $this->selectedDate = $selectedDate;

        [$year, $month, $day] = explode('-', $selectedDate);

        $this->year = $this->useYear = $year;
        $this->month = $this->useMonth = $month;
        $this->day = $day;
    }

    public function onPreviousMonth()
    {
        $this->useMonth--;

        if ($this->useMonth <= 0) {
            $this->useMonth = 12;
            $this->useYear--;
        }
    }

    public function onNextMonth()
    {
        $this->useMonth++;

        if ($this->useMonth >= 13) {
            $this->useMonth = 1;
            $this->useYear++;
        }
    }

    public function onToday()
    {
        [$year, $month, $day] = explode('-', $this->selectedDate);

        $this->year = $this->useYear = $year;
        $this->month = $this->useMonth = $month;
        $this->day = $day;
    }

    public function render()
    {
        $calendar = new Calendar;

        $calendarMonth = $calendar->getMonth($this->useYear, $this->useMonth);

        $dates = auth()->user()->answers()->pluck('answered_for')->map(function($date) {
            return $date->format('Y-m-d');
        });

        return view('livewire.select-date', [
            'calendarMonth' => $calendarMonth,
            'dates' => $dates,
        ]);
    }
}
