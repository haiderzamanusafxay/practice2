
<?php
if($_GET['search']){
require_once('config.php');
        $filtervalues = $_GET['search'];           
        $query = "SELECT data.countryName AS country,data.longitude AS lon,data.latitude AS lat, data.ip AS ip, data.city AS city, data.id AS id
        FROM data JOIN cities
        ON data.id=cities.cityid 
        WHERE data.id LIKE '%$filtervalues%'
        OR data.ip LIKE '%$filtervalues%'
        OR data.city LIKE '%$filtervalues%'
        OR data.countryName LIKE '%$filtervalues%'
        OR data.longitude LIKE '%$filtervalues%'
        OR data.latitude LIKE '%$filtervalues%'";
        $result= mysqli_query($conn,$query);

        if($result){
          header('loation:php.php;');
        }
      }
    ?>