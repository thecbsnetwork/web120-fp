<?php include 'includes/fp-config.php'?>
<?php include 'includes/fp-header.php'?>
<!--header ends here-->
<?php
//email3.php from ITC240
if(isset($_POST['Submit']))
{//send email?
    
    $to = "catherineblakesmith@gmail.com";
    
    $subject = "The Stay-Up Late Show " . date("m/d/y, G:i:s");
    
    //collect and clean post data
    $FirstName = stayup_clean_post('FirstName');
    $LastName = stayup_clean_post('LastName');
    $Email = stayup_clean_post('Email');
    $Perform = stayup_clean_post('Perform');
    $Ticketing = stayup_clean_post('Ticketing');
    $Merch = stayup_clean_post('Merch');
    $Photos = stayup_clean_post('Photos');
    $Question = stayup_clean_post('Question');
    $Love = stayup_clean_post('Love');
    $Comments = stayup_clean_post('Comments');
    
    //build body of email
    $text = '';//initialize variable
    $text .= 'First Name: ' . $FirstName . PHP_EOL . PHP_EOL;
    $text .= 'Last Name: ' . $LastName . PHP_EOL . PHP_EOL;
    $text .= 'Email: ' . $Email . PHP_EOL . PHP_EOL;
    $text .= 'A potential new act! ' . $Perform . PHP_EOL . PHP_EOL;
    $text .= 'Ticketing: ' . $Ticketing . PHP_EOL . PHP_EOL;
    $text .= 'Merch: ' . $Merch . PHP_EOL . PHP_EOL;
    $text .= 'Photos: ' . $Question . PHP_EOL . PHP_EOL;
    $text .= 'Somebody loves you! ' . $Love . PHP_EOL . PHP_EOL;
    $text .= 'Comments: ' . $Comments . PHP_EOL . PHP_EOL;
    
    $headers = 'From: noreply@growlingwillow.com' . PHP_EOL .
    'Reply-To: ' . $Email . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
    
    mail($to,$subject,$text,$headers);
    
    echo '<div>
        <h3>Message Sent</h3>
        <p>Thank you for your interest. We will get back to you as soon as we can!</p>
        </div>';
        
}else{//show form!
    echo '<form action="contact.php" method="post">
    <fieldset>
        <legend>Tell us about yourself: </legend>
        <label for="FirstName">First Name: </label>
        <input type="text" name="FirstName" id="FirstName" placeholder="First Name" autofocus required ><br />
        <label for="LastName">Last Name: </label>
        <input type="text" name="LastName" id="LastName" placeholder="Last Name" required ><br />
        <label for="Email">Email Address: </label>
        <input type="email" name="Email" id="Email" placeholder="Email Address" required >
    </fieldset>
    <fieldset>
        <legend>Tell the Stay-Up Late Show that you: </legend>
        <input type="checkbox" name="Perform" value="I am interested in performing at the Stay-Up Late Show.">want to perform!<br />
        <input type="checkbox" name="Ticketing" value="I have a ticketing issue that needs to be addressed.">have a ticketing issue.<br />
        <input type="checkbox" name="Merch" value="I have a merch issue that needs to be addressed.">have a merch issue.<br />
        <input type="checkbox" name="Photos" value="I have photos from old shows to share!">have photos to share.<br />
        <input type="checkbox" name="Question" value="I have a question not answered here.">have a question not answered here.<br />
        <input type="checkbox" name="Love" value="I just want to show some love!">want to show some love!<br />
    </fieldset>
    <fieldset>
        <legend>Please include some details: </legend>
        <textarea name="Comments" id="Comments" placeholder="Give us some details!" required></textarea>
    </fieldset>
        <div class="button"><button type="submit" id="sendMessageButton" name="Submit">Submit</button></div>
    </form>
    '; 
}
?>
<?php include 'includes/fp-footer.php'; 
    function stayup_clean_post($key)
{
        if(isset($_POST[$key])){
            return strip_tags(trim($_POST[$key]));
        }else{
            return '';
        }
}
?>