<?php
$cols = 5; #столбцы
$rows = 5; #строки
$color = 'blue';
echo "<table border='1'>";
for($i = 1;$i <= $rows; $i++){
    echo "<tr>";
    for ($j = 1; $j <= $cols; $j++) { 
        $multi = $i * $j;
        if ($i === 1 or $j === 1):
            echo "<th style='color:$color'>{$multi}</th>";
        else:
            echo "<td align='center'>{$multi}</td>";
        endif;
        
    }
    echo "</tr>";
}
echo "</table>";

?>

  <div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Таблица -->
    <table border='1' width="200">
      <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
      </tr>
      <tr>
        <td>2</td>
        <td>4</td>
        <td>6</td>
        <td>8</td>
        <td>10</td>
      </tr>
      <tr>
        <td>3</td>
        <td>6</td>
        <td>9</td>
        <td>12</td>
        <td>15</td>
      </tr>
      <tr>
        <td>4</td>
        <td>8</td>
        <td>12</td>
        <td>16</td>
        <td>10</td>
      </tr>
      <tr>
        <td>5</td>
        <td>10</td>
        <td>15</td>
        <td>20</td>
        <td>25</td>
      </tr>
    </table>
</div>