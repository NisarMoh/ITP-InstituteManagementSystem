<?php

//interface for the ITimetableCellService implementation
interface ITimetableCellService
{
    public function addTimetableCell();

    public function updateTimetableCell($timetableCellMainId,$subject,$tutor,$day,$startTime);

    public function viewAllTimetableCells($timetableCellMainId,$day,$startTime);

}