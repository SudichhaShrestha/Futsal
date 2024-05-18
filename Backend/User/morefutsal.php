<?php
    include_once './assets/includes/header.php';
    include './assets/includes/connect.php';
?>
  
<?php
global $con;
$sql = "SELECT * FROM futsal_info";
$result = mysqli_query($con, $sql); ?>

<div class="futsal-container">
    <div class="futsal-demo">
        <div class="nearfutsal">
            <h1 class="futsalheading">Futsals</h1>
        </div>
    </div>
    <div class="img-wrap">
        <?php
        if (mysqli_num_rows($result) > 0) {
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($count < 8) {
                    echo '<div class="nearby">';
                } else {
                    echo '<div class="nearby more-content">';
                }
                ?>
                <figure>
                    <a href="futsal.php?id=<?php echo $row['id']; ?>">
                        <img src="<?php echo $row['img_path']; ?>" alt="<?php echo $row['name']; ?>" />
                    </a>
                </figure>
                <?php
                echo '<h5>' . $row['name'] . '</h5>';
                echo '</div>';
                $count++;
            }
        } else {
            echo "No Futsal found.";
        }
        ?>
    </div>
</div>

<?php
include_once './assets/includes/footer.php';
?>
</body>
</html>
