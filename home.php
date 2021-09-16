<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Web API Tutorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div id="left">
                    <div class="container">
                        <form action="">
                            <input type="hidden" id='hidden_token'>
                            <label for="Genre" class="">Genre:</label>
                            <select name="" id="select_genre" class="form-control">
                                <option>Select...</option>
                            </select><br>


                            <label for="Genre" class="">Playlists:</label>
                            <select name="" id="select_playlist" class="form-control">
                                <option>Select...</option>
                            </select><br>
                            <button type="submit" id="btn_submit" class="btn  col-sm-12">Search</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="container">
                <div class="row">
                    <div id="right">
                        <div class="container">
                            <div class="col-sm-3" id="song-detail">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="middle">
                        <div class="list-group song-list">

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>














    <script src="./ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./ajax/libs/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="app.js" type="text/javascript"></script>
</body>

</html>










<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div id="left">
            <div class="container">
            <form action="">
                <input type="hidden" id='hidden_token'>
                <label for="Genre" class="">Genre:</label>
                    <select name="" id="select_genre" class="form-control">
                        <option>Select...</option>                    
                    </select><br>


                    <label for="Genre" class="">Playlists:</label>
                    <select name="" id="select_playlist" class="form-control">
                        <option>Select...</option>                    
                    </select><br>
                    
                    
                    <button type="submit" id="btn_submit" class="btn  col-sm-12">Search</button>         
            </form> 
            </div>
            </div>
        </div>
        <div class="col-md-5">
            <div id="middle">
                <div class="list-group song-list">
                            
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div id="right">
                <div class="container">
                <div class="col-sm-3" id="song-detail"> 

                </div>
                </div>
            </div>
        </div>
    </div>
    </div> -->