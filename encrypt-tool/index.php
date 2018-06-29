
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Encryption Tool</title>
</head>
<body>
    <heading>
        <div class="heading">
            <div class="row">
                <div class="heading__logo">
                    <h1>Encryption Tool</h1>
                </div>
                <div class="heading__text">
                    Based 64 Encoding & Decoding made by Karamella Ali
                </div>
            </div>
        </div>
    </heading>
    <main>
        <div class="main-area">
            <div class="row">
                <form action="index.php" method="post">
                <div class="col-1-of-2">
                    <div class="main-area__work">
                        <h2>Encryption</h2>
                        <textarea class="textarea" name="encrypt" id="encrypt" cols="30" rows="10" placeholder="Please enter your encrypt text here to bedecrypted..."></textarea>
                        <input type="submit"  name="submit1" value="encrypt">
                    </div> 
                </div>
                <div class="col-1-of-2">
                    <div class="main-area__work">
                        <h2>Decryption</h2>
                        <textarea class="textarea" name="decrypt" id="decrypt" cols="30" rows="10" placeholder="Please enter your encrypt text here to be decrypted..."></textarea>
                        <input type="submit" name="submit2" value="decrypt">
                    </div> 
                </div>
                </form>
                <div class="clearfix"></div>
            </div>
<?php

if(isset($_POST['submit1'])){
$encrypt=($_POST['encrypt']);
if($encrypt){
    $encoded = base64_encode($encrypt);//function to encrypt string
    $str=strlen($encoded);//length of encrypt string
    echo  "<textarea class='display'  readonly='readonly' name='encrypt' cols='70' rows='10'>".$encoded."\n\r"."length of string:".$str."</textarea>";  
}   
}

            
//Decrypt here....
if(isset($_POST['submit2'])){
$decrypt=$_POST['decrypt'];
if($decrypt)
{
    $decoded = base64_decode($decrypt);//function to decrypt string.
    $str=strlen($decoded);//length of decrypt string.
    echo  "<textarea class='display' readonly='readonly' name='decrypt' cols='70' rows='10'>".$decoded."\n\r"."length of string:".$str."</textarea>";
    
}
}

?>

            <div class="row">
                <div class="main-area__gaidlines">
                    <h2>Gaidlines</h2>
                    <ul class="gidelines__text">
                        <li>- type your text to one of the textearas above</li>
                        <li>- hit the Encypt button to encrypt your text</li>
                        <li>- hit the Decrypt button to decrypt your text</li>
                        <li>- and thats it ... hope you enjoy</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>
</html>