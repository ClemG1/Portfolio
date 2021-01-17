<?php
function read_csv($file_name, $home_url)
{
    $file = $file_name . '.csv';
    $path = $home_url . 'matrix/' . $file;
    echo $path;
    if (($file_pointer = fopen($path,'r')) != FALSE) {
        ?><table class="matrix">
            <tbody><?php
                while (($line = fgets($file_pointer)) != FALSE) {
                    $line_data = explode(';',$line);
                    $skills = explode('|', $line_data[1]);
                    ?><tr>
                        <td class="<?php if($line_data[1] == '') {echo 'title';}else {echo 'skill';};?>"><?php echo $line_data[0];?></td>
                        <td class="experience"><?php foreach($skills as $skill){echo $skill . "<br />\n<br />\n";};?></td>
                        <td class="mark"><?php echo $line_data[2];?></td>
                        <td class="mark"><?php echo $line_data[3];?></td>
                    </tr><?php
                }
            ?></tbody>
        </table><?php
    }
    else {
        echo "not open";
    }
}

?>