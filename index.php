<!DOCTYPE html>
<html>
    <head>
        <title>Twilio Message Log Exporter</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

         <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">

        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <!-- Custom JS scripts -->
        <script src="prog.js"></script>

    </head>
    <body>
        
        <div class="container">
           
            <div class="jumbotron">
             <div class="header clearfix">
                <h2>Use this form to generate a .csv file of your Twilio message logs</h2>
            </div>
                
                <form action="exportlog.php" method="POST">
                    <div class="form-group">
                        <p>
                            Below please enter your Live Twilio Account SID and AuthToken, then click the Submit button to download a CSV file of ALL message logs from your Twilio account. <br> Or, be reasonable and select a date range. 
                        </p>
                    </div>
                    
                    <div class="form-group">
                        <label for="sid">Please enter your <a href="https://www.twilio.com/console/account/settings">Live Twilio Account SID</a></label>
                        <input type="text" class="form-control" id="sid" name="sid" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="authToken">Please enter your <a href="https://www.twilio.com/console/account/settings">Live Twilio Authentaction Token</a></label>
                        <input type="text" class="form-control" id="authToken" name="authToken" required>
                    </div>
                    
                    <label>If your message logs are massive, consider using a Date Range:</label>
                    
                    <div class="form-group">
                        Messages sent <strong>on and after</strong> this date:
                        <input type="text" id="from" name="from"> <br>
                       
                    </div>
                    <div class="form-group">
                        Messages send <strong>on and before</strong> this date:
                        <input type="text" id="to" name="to">
                    </div>

                    <div class="form-group"> 
                        <small><strong>Note</strong>: This app outputs message logs one account at a time. If you have subaccounts you can get those logs by entering the subaccount's AccountSid and AuthToken separately and clicking the Submit button.</small>
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