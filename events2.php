<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';


$connection = Connection::getInstance();
$gateway = new EventTableGateway($connection);

$statement = $gateway->getEvents();

start_session();

if (!is_logged_in()) {
    header("Location: login_form.php");
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What's On</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--event content-->
                <section>
                <?php
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        while ($row) {
                            $Title= $row['Title'];
                            $Description= $row['Description'];                    
                            $EventDate= $row['StartDate'];
                            $EventId=$row['EventID'];
                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        ?>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month"><?php echo $EventDate; ?></span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/birthday2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title"><?php echo $Title;?></h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            UrbanXchange Private Dining Room, The Rocks 12 Argyle Street
                            </p>
                            <p class="definition"><!--event content definition-->
                            <?php echo $Description;?>
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <a class="btn btn-default btn-lg" href="deleteEvent.php?id=<?php echo $EventId;?>">
                            
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            
                    </a>
                    </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            <hr>
                    <?php }?>
                        
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">APR</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">20</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/birthday2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Dress to Impress</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            Ananas Bar & Brasserie, The Rocks 18 Argyle Street
                            </p>
                            <p class="definition"><!--event content definition-->
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">JUN</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">20</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/birthday2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Our 2nd Anniversary</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            Munich Brauhaus South Wharf, 45 South Wharf Promenade
                            </p>
                            <p class="definition"><!--event content definition-->
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">AUG</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">20</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/birthday2.jpg" class = "img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Career Talk</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            UrbanXchange Private Dining Room, The Rocks 12 Argyle Street
                            </p>
                            <p class="definition"><!--event content definition-->
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                                View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                       </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
