<?php

class DatumEN extends Datum
{
    public function trenutni()
    {
        parent::trenutni();
        $time = date("Y-m-d");

        return $time;
    }
}



?>