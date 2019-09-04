<?php



class TimetableCell
{
    private static $timeId;
    //tutor id refers to the tutor identification by name
    private static $tutorId;
    //subject id refers to the subject identification by the subject name
    private static $subjectId;
    private static $startTime;
    private static $endTime;
    private static $day;
    private static $tcInitialized = false;


    private static function timetableCellInitialize($timeId,$tutor,$subject,$start,$end,$day1){
        if(self::$tcInitialized){
            return;
        }
        self::$timeId = $timeId;
        self::$tutorId = $tutor;
        self::$subjectId = $subject;
        self::$startTime = $start;
        self::$endTime = $end;
        self::$day = $day1;
    }

    /**
     * @return mixed
     */
    public static function getTimeId()
    {
        return self::$timeId;
    }

    /**
     * @param mixed $timeId
     */
    public static function setTimeId($timeId)
    {
        self::$timeId = $timeId;
    }


    /**
     * @return mixed
     */
    public static function getTutorId()
    {
        return self::$tutorId;
    }

    /**
     * @param mixed $tutorId
     */
    public static function setTutorId($tutorId)
    {
        self::$tutorId = $tutorId;
    }

    /**
     * @return mixed
     */
    public static function getSubjectId()
    {
        return self::$subjectId;
    }

    /**
     * @param mixed $subjectId
     */
    public static function setSubjectId($subjectId)
    {
        self::$subjectId = $subjectId;
    }

    /**
     * @return mixed
     */
    public static function getStartTime()
    {
        return self::$startTime;
    }

    /**
     * @param mixed $startTime
     */
    public static function setStartTime($startTime)
    {
        self::$startTime = $startTime;
    }

    /**
     * @return mixed
     */
    public static function getEndTime()
    {
        return self::$endTime;
    }

    /**
     * @param mixed $endTime
     */
    public static function setEndTime($endTime)
    {
        self::$endTime = $endTime;
    }

    /**
     * @return mixed
     */
    public static function getDay()
    {
        return self::$day;
    }

    /**
     * @param mixed $day
     */
    public static function setDay($day)
    {
        self::$day = $day;
    }

}