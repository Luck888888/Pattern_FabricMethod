<?php
namespace App;

class CsvFile implements IData
{
    public function formatData($header = true)
    {
        //Преобразование csv-файла(удаление пустых строк)
        $lines = file(__DIR__ . '/to_upload.csv', FILE_SKIP_EMPTY_LINES );
        foreach ($lines as $lineNo => $line) {
            $csv = str_getcsv($line);
            if (count(array_filter($csv)) == 0) {
                unset($lines[$lineNo]);
            }
        }
        file_put_contents(__DIR__ . '/to_upload.csv', $lines);

        //Вывод на экран
        $handle = fopen(__DIR__ . '/to_upload.csv', "r");
        echo '<table width="100%" border="14px">';
//display header row if true
        if ($header) {
            $csvcontents = fgetcsv($handle);
            echo '<tr bgcolor=#FFCD43>';
            foreach ($csvcontents as $headercolumn) {
                echo "<th>$headercolumn</th>";
            }
            echo '</tr>';
        }
// displaying contents
        while ($csvcontents = fgetcsv($handle)) {
            echo '<tr bgcolor=#C4F4CA>';
            foreach ($csvcontents as $column) {
                echo "<td>$column</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
        fclose($handle);
 }
}

