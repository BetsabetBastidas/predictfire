<?php

function getRegion($satelite_, $region_, $time_){
    $dummy = null;
    if ($satelite_=='MODIS_C6' & $region_ == 'Global' & $time_ == '24h')
    {
        $dummy= 1;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Global' & $time_ == '48h')
    {
        $dummy= 2;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Global' & $time_ == '7d')
    {
        $dummy= 3;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Alaska' & $time_ == '24h')
    {
        $dummy= 4;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Alaska' & $time_ == '48h')
    {
        $dummy= 5;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Alaska' & $time_ == '7d')
    {
        $dummy= 6;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Australia_and_New_Zealand' & $time_ == '24h')
    {
        $dummy= 7;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Australia_and_New_Zealand' & $time_ == '48h')
    {
        $dummy= 8;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Australia_and_New_Zealand' & $time_ == '7d')
    {
        $dummy= 9;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Canada' & $time_ == '24h')
    {
        $dummy= 10;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Canada' & $time_ == '48h')
    {
        $dummy= 11;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Canada' & $time_ == '7d')
    {
        $dummy= 12;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Central_America' & $time_ == '24h')
    {
        $dummy= 13;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Central_America' & $time_ == '48h')
    {
        $dummy= 14;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Central_America' & $time_ == '7d')
    {
        $dummy= 15;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Europe' & $time_ == '24h')
    {
        $dummy= 16;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Europe' & $time_ == '48h')
    {
        $dummy= 17;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Europe' & $time_ == '7d')
    {
        $dummy= 18;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Northern_and_Central_Africa' & $time_ == '24h')
    {
        $dummy= 19;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Northern_and_Central_Africa' & $time_ == '48h')
    {
        $dummy= 20;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Northern_and_Central_Africa' & $time_ == '7d')
    {
        $dummy= 21;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Russia_and_Asia' & $time_ == '24h')
    {
        $dummy= 22;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Russia_and_Asia' & $time_ == '48h')
    {
        $dummy= 23;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Russia_and_Asia' & $time_ == '7d')
    {
        $dummy= 24;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'South_America' & $time_ == '24h')
    {
        $dummy= 25;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'South_America' & $time_ == '48h')
    {
        $dummy= 26;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'South_America' & $time_ == '7d')
    {
        $dummy= 27;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'South_Asia' & $time_ == '24h')
    {
        $dummy= 28;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'South_Asia' & $time_ == '48h')
    {
        $dummy= 29;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'South_Asia' & $time_ == '7d')
    {
        $dummy= 30;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'SouthEast_Asia' & $time_ == '24h')
    {
        $dummy= 31;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'SouthEast_Asia' & $time_ == '48h')
    {
        $dummy= 32;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'SouthEast_Asia' & $time_ == '7d')
    {
        $dummy= 33;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Southern_Africa' & $time_ == '24h')
    {
        $dummy= 34;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Southern_Africa' & $time_ == '48h')
    {
        $dummy= 35;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Southern_Africa' & $time_ == '7d')
    {
        $dummy= 36;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Southern_Africa' & $time_ == '24h')
    {
        $dummy= 34;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Southern_Africa' & $time_ == '48h')
    {
        $dummy= 35;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'Southern_Africa' & $time_ == '7d')
    {
        $dummy= 36;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'USA_contiguous_and_Hawaii' & $time_ == '24h')
    {
        $dummy= 37;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'USA_contiguous_and_Hawaii' & $time_ == '48h')
    {
        $dummy= 38;
    }
    elseif ($satelite_=='MODIS_C6' & $region_ == 'USA_contiguous_and_Hawaii' & $time_ == '7d')
    {
        $dummy= 39;
    }


//------------------MODIS_C6------------

    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Global' & $time_ == '24h')
    {
        $dummy= 40;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Global' & $time_ == '48h')
    {
        $dummy= 41;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Global' & $time_ == '7d')
    {
        $dummy= 42;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Alaska' & $time_ == '24h')
    {
        $dummy= 43;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Alaska' & $time_ == '48h')
    {
        $dummy= 44;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Alaska' & $time_ == '7d')
    {
        $dummy= 45;
    }

    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Australia_and_New_Zealand' & $time_ == '24h')
    {
        $dummy= 46;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Australia_and_New_Zealand' & $time_ == '48h')
    {
        $dummy= 47;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Australia_and_New_Zealand' & $time_ == '7d')
    {
        $dummy= 48;
    }

    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Canada' & $time_ == '24h')
    {
        $dummy= 49;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Canada' & $time_ == '48h')
    {
        $dummy= 50;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Canada' & $time_ == '7d')
    {
        $dummy= 51;
    }

    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Central_America' & $time_ == '24h')
    {
        $dummy= 52;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Central_America' & $time_ == '48h')
    {
        $dummy= 53;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Central_America' & $time_ == '7d')
    {
        $dummy= 54;
    }

    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Europe' & $time_ == '24h')
    {
        $dummy= 55;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Europe' & $time_ == '48h')
    {
        $dummy= 56;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Europe' & $time_ == '7d')
    {
        $dummy= 57;
    }

    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Northern_and_Central_Africa' & $time_ == '24h')
    {
        $dummy= 58;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Northern_and_Central_Africa' & $time_ == '48h')
    {
        $dummy= 59;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Northern_and_Central_Africa' & $time_ == '7d')
    {
        $dummy= 60;
    }

    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Russia_and_Asia' & $time_ == '24h')
    {
        $dummy= 61;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Russia_and_Asia' & $time_ == '48h')
    {
        $dummy= 62;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Russia_and_Asia' & $time_ == '7d')
    {
        $dummy= 63;
    }

    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'South_America' & $time_ == '24h')
    {
        $dummy= 64;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'South_America' & $time_ == '48h')
    {
        $dummy= 65;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'South_America' & $time_ == '7d')
    {
        $dummy= 66;
    }

    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'South_Asia' & $time_ == '24h')
    {
        $dummy= 67;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'South_Asia' & $time_ == '48h')
    {
        $dummy= 68;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'South_Asia' & $time_ == '7d')
    {
        $dummy= 69;
    }

    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'SouthEast_Asia' & $time_ == '24h')
    {
        $dummy= 70;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'SouthEast_Asia' & $time_ == '48h')
    {
        $dummy= 71;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'SouthEast_Asia' & $time_ == '7d')
    {
        $dummy= 72;
    }

    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Southern_Africa' & $time_ == '24h')
    {
        $dummy= 73;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Southern_Africa' & $time_ == '48h')
    {
        $dummy= 74;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'Southern_Africa' & $time_ == '7d')
    {
        $dummy= 75;
    }

    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'USA_contiguous_and_Hawaii' & $time_ == '24h')
    {
        $dummy= 76;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'USA_contiguous_and_Hawaii' & $time_ == '48h')
    {
        $dummy= 77;
    }
    elseif ($satelite_=='VNP14IMGTDL_NRT' & $region_ == 'USA_contiguous_and_Hawaii' & $time_ == '7d')
    {
        $dummy= 78;
    }

//--------------VISS-----------------
    return $dummy;
}