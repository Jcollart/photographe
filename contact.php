<!DOCTYPE html>
    <html>
        <head>
            <title>Contact</title>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

 
            <link rel="stylesheet" href ="contact.css">
            <link rel ="stylesheet" href ="header.css">
            <link rel ="stylesheet" href ="footer.css">
          
        </head>
    <body>
        <?php include('header.php'); ?>
        

        <div class="prout">
            <div class= "container">
                <div class= "row">
                    <div class="col-lg-4">
                    <div class="top">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.5451618734523!2d-74.01100988495048!3d40.70601387933248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a165bedccab%3A0x2cb2ddf003b5ae01!2sWall+St%2C+New+York%2C+NY%2C+%C3%89tats-Unis!5e0!3m2!1sfr!2sfr!4v1552662403592" width="1600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
         <!--   <div class="map">
                <button type="button">V</button>
            </div>      -->
        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class= "contact">
                            <div>
                                <label for="name">Nom</label><br>
                                <input type="text" id="name" name="user_name">
                            </div><br>
                            <div>
                                <label for="mail">e-mail</label><br>
                                <input type="email" id="mail" name="user_mail">
                            </div><br>
                            <div>
                                <label for="mail">sujet</label><br>
                                <input type="sujet" id="sujet" name="user_sujet">
                            </div><br>
                            <div>
                                <label for="msg">Message</label><br>
                                <textarea id="msg" name="user_message"></textarea>
                            </div><br>
                                <div class="button">
                                <button type="submit">Envoyer le message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br><br>
        </div>

        <?php include('footer.php'); ?>
    
        <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
        <script src="app.js"></script>
    </body>
</html>
