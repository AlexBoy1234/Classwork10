<!DOCTYPE html>
<html lang="en">
    <?php 
        function dateF(){
        return date('l jS \of F Y h:i:s A');
        }
    ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <form method="get">
        <label for="fname">Name:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
        <label for="lname">Surname:</label><br>
        <input type="text" id="lname" name="lname" value=""><br>
        <label for="dateOfBirth">Date of birth:</label><br>
        <input type="text" id="dateOfBirth" name="dateOfBirth" value=""><br>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
            <p><?php echo $_GET['fname']; ?></p>
            <p><?php echo $_GET['lname']; ?></p>
            <p><?php echo $_GET['dateOfBirth']; ?></p>
        </li>
    </ul>
    <footer><?php echo "Copyright " , dateF() ?><footer>
</html>