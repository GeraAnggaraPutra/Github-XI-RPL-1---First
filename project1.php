<html>
  <head>
    <title>Project</title>
    <style>
      label{
        display: block;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <form method="post">
      <label>Program 1</label>
      <input type="number" name="satu">
      <input type="submit" name="kesatu" value="OK">
      <?php
      if(isset($_POST['kesatu'])){
        $angka = $_POST['satu'];
        
        echo "<br>";
        $x = 1;
        while($x <= $angka){
          $y = 1;
          while($y <= $x){
            echo "$y ";
            $y++;
          }
          echo "<br>";
          $x++;
        }
      }
      ?>
      
      <label>Program 2</label>
      <input type="number" name="dua">
      <input type="submit" name="kedua" value="OK">
      <?php
      if(isset($_POST['kedua'])){
        $angka = $_POST['dua'];
        
        echo "<br>";
        $a = $angka;
        while($a >= 1){
          $b = $angka;
          while($b > $a){
            echo "&nbsp";
            $b--;
          }
          $c = 1;
          while($c <= $a){
            echo "$c ";
            $c++;
          }
          $a--;
          echo "<br>";
        }
      }
      ?>
      
      <label>Program 3</label>
      <input type="number" name="tiga">
      <input type="submit" name="ketiga" value="OK">
      <?php
      if(isset($_POST['ketiga'])){
        $angka = $_POST['tiga'];
        
        echo "<br>";
        $x = $angka;
        while($x >= 1){
          $y = $angka;
          while($y >= $x){
            echo "$y ";
            $y--;
          }
          echo "<br>";
          $x--;
        }
      }
      ?>
    </form>
  </body>
</html>