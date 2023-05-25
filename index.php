<?php

include('config/db_connect.php');

$query = "SELECT * FROM restaurant ORDER BY name ASC";
$result = mysqli_query($conn, $query);
$restaurants = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.ph'); ?>
 
<div class="container">
    <div class="row">
        <?php foreach ($restaurants as $restaurant) : ?>
            <div class="col s12 m6 l4 xl3">
                <div class="card z-depth-0 radius-card">
                    <img src="img/icon.png" alt="icon" class="icon-card">
                    <div class="card-content center">
                        <h5><?php echo htmlspecialchars($restaurant['name']); ?></h5>
                    </div>
                    <div class="card-action right-align radius-card">
                        <a href="restaurant.php?id=<?php echo $restaurant['id']; ?>" class="red-text text-darken-2">
                            More Info
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include('templates/footer.php'); ?>

</html>