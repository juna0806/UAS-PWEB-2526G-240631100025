<?php

function formatTanggal($tanggal)
{
    return date("d-m-Y", strtotime($tanggal));
}

function stokStatus($stok)
{
    if($stok > 10){
        return "Tersedia";
    }elseif($stok > 0){
        return "Stok Menipis";
    }else{
        return "Habis";
    }
}

?>