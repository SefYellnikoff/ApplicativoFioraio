<div class="padding">
    <table class="table table-hover table-dark ">
        <tr class="table-danger color">
            <th>Flowers</th>
            <th>Special Occasion</th>
            <th>Description</th>
        </tr>
        <?php
            foreach ($query as $row) {
                echo "<tr class=\"table-info  color\">";
                echo "<td>" . $row->name . "</td>";
                echo "<td>" . $row->Opportunities['name'] . "</td>";
                echo "<td>" . $row->Opportunities['description'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</div>