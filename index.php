<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The United States of America</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <link rel="shortcut icon" type="image/x-icon" href="images/planet.ico">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <script src="myscripts.js" charset="UTF-8"></script>

        <meta charset="utf-8">

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container" style="background-color:#cce6ff">
            <div class="row">
                <div class="col-sm-12">
                    <h1 style="text-align:center">The United States of America</h1>
                </div>
                <br>
                <table class ="table">
                    <?
                        $x = 1;
                        $state_list = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");
                        foreach ($state_list as $state) {
                            $statereplace = str_replace (" ","_","$state");  
                            $statefinal = strtolower ($statereplace);
                            echo '<td class="text-center">';
                            echo '<a href= "http://david.knowledge27.webfactional.com/state/states/'.$statefinal.'.html" target="_blank"><img src="http://lesson.jaxcode.webfactional.com/stateflags/'.$statereplace.'.svg.png"><br>'.$state.'</a>';
                            echo '</td>';
                            if($x == 5) {
                                echo '</tr><tr>';
                                $x = 0;
                            }
                            $x++;
                            
                            $myfile = fopen("states/".$statefinal.".html", "w") or die("Unable to open file!");
                            $txt = <<<EOT
                            <!DOCTYPE html>
                            <html lang="en">
                                    <head>
                                        <meta charset="UTF-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <title>The United States of America</title>
                                        <meta name="viewport" content="width=device-width, initial-scale=1">
                                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                                        <link rel="shortcut icon" type="image/x-icon" href="images/planet.ico">
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                        <script src="myscripts.js" charset="UTF-8"></script>
                                        <meta charset="utf-8">
                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                                    </head>
                                <body>
                                    <div class="container text-center" style="background-color:#cce6ff">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h1 style="text-align:center"><a href="../index.php">The United States of America</a></h1>
                                            </div>
                                        </div><br><br>
                                    <img src="http://lesson.jaxcode.webfactional.com/stateflags/$statereplace.svg.png" class="img-thumbnail">
                                    <br><br>
                                    <a href="https://en.wikipedia.org/wiki/$statefinal">$state</a>
                                    <br><br>
                                    <iframe src="https://en.wikipedia.org/wiki/$statefinal" width="100%" height="10000" frameborder="0"></iframe>
                                        <br>
                                    </div>
                                </body>
                            </html> 
                            EOT;
                            fwrite($myfile, $txt);
                            fclose($myfile);
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>