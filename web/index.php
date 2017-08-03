<!DOCTYPE html>
<html>
    <head>
        <title>Title of the document</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

         <!-- Custom styles for this template -->
        <link href="web/style.css" rel="stylesheet">


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <div class="container">
            <div class="header clearfix">
                <h2>Use this form to generate a CSV of all your</h2>
            </div>
            <div class="jumbotron">
                
                <form action="exportlog.php" method="POST">
                    <div class="form-group">
                        <label for="sid">Your Twilio Account SID</label>
                        <input type="text" class="form-control" id="sid" name="sid">
                    </div>
                    <div class="form-group">
                        <label for="authToken">Your Twilio Authentaction Token</label>
                        <input type="text" class="form-control" id="authToken" name="authToken">
                    </div>
                    
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            <div class="row marketing">
            </div>

            <footer class="footer">
            </footer>
        
        </div>
    </body>
</html>