<?php 

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="data_tugas.csv"');

$fp = fopen('php://output', 'w');
foreach ( $detail as $line ) {
    $val = explode(",", $line['tugas'] . ',' . html_entity_decode(trim(strip_tags($line['deskripsi'])),ENT_QUOTES) . ',' .$line['prioritas']);
    fputcsv($fp, $val);
}

fclose($fp);

?>