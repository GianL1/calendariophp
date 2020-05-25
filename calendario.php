<table border="1">
    <tr>
        <th>DOM</th>
        <th>SEG</th>
        <th>TER</th>
        <th>QUA</th>
        <th>QUI</th>
        <th>SEX</th>
        <th>SAB</th>
    </tr>

    <?php for ($i=0; $i<5; $i++): ?>
        <tr>
        
            <?php for ($j=0; $j <7; $j++): ?>
                    <?php $w = date('d/m',strtotime(($j + ($i*7))." days",  strtotime('2019-07-01'))   ); ?>
                    <td><?php echo $w; ?></td>
            <?php endfor; ?>
            
        </tr> 
    <?php endfor; ?>
</table>   

<?php 
    echo date ('d/m/Y', strtotime('3 days'));
?>