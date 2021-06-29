<?php

namespace App;

class JsonFile implements IData
{
    public function formatData()
    {
        $json = file_get_contents(__DIR__ . '/to_upload.json');
        $data = json_decode($json, true);

        echo '<table width="100%">';
        echo '<tr bgcolor=#8DD35F ><th>login</th><th>title</th><th>lastname</th><th>firstname</th><th>gender</th>
              <th>email</th><th>picture</th><th>address</th></tr>';
        foreach ( $data  as $item) {
            echo '<tr bgcolor=#E0FFFF>';
            echo '<td>' . $item['login'] . '</td>';
            echo '<td>' . $item['title'] . '</td>';
            echo '<td>' . $item['lastname'] . '</td>';
            echo '<td>' . $item['firstname'] . '</td>';
            echo '<td>' . $item['gender'] . '</td>';
            echo '<td>' . $item['email'] . '</td>';
            echo '<td>' . $item['picture'] . '</td>';
            echo '<td>' . $item['address'] . '</td>';
            echo '</tr>';


        }
        echo '</table>';
    }
}
