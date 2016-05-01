<!DOCTYPE html>
<html>
    <head>
        <title>Peter Sells Peppers - Red Bell Pepper</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../stylesheets/home.css">
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
		<script src="../scripts/jquery_2.2.3.min.js"></script>
		<script type="text/javascript" src="../scripts/validate_form.js"></script>
		<script type="text/javascript" src="../scripts/autocomplete.js"></script>			
    </head>
    <body>
        <h1>Peter sells peppers</h1>
        <h2 id="pepper-name">Red Bell Pepper</h2>
		<hr>
        <div class='prod-info'>
            <div class='float-img inline'>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div class='product-img'>
                                <img src='../images/red_bell_pepper.png' alt='Guantanamo Pepper'
                     height="180" width="300" >
                                </div>
                                <div class='product-img'>
                <img src='../images/red_bell_pepper1.jpg' alt='Guantanamo Pepper'
                     height="180" width="300" > 
                                </div>
                                </td>
                        </tr>
                    </tbody>
                </table>   
            </div>
            <div class="prod-detail inline">
                <div class='description'>
                A baby could eat this. If you're reading this we're going to assume that you're a baby, because this pepper is meant for babies! Goo Goo Gaa Gaa!
                </div>
            <div class='price'> 
                Price: $9.99
            </div>
            </div>
        </div>
        <div class='order'>
		<hr>
            <form method='post' id='order-form' onsubmit='return processForm();' action="../php/form.php">
                <input type="hidden" name="pepper_id" value="7"/>
                <table class='ship-form'>
                    <tbody>
                        <tr>
                            <td>First Name:</td>
                            <td><input type="text" class="in_txt" id="first-name" name="first_name" onkeyup="checkFirstNameWhileTyping()">
							<img src="../images/red_x.gif" alt="Error!" style="width: 20px; height: 20px;" class="hidden" id="first-name-good"></img>
							<img src="../images/green_check.png" alt="Success!" style="width: 20px; height: 20px;" class="hidden" id="first-name-bad"></img>
                        </td>
                        </tr>
                        <tr>
                            <td>Last Name:</td>
                            <td><input type="text" class="in_txt" id="last-name" name="last_name" onkeyup="checkLastNameWhileTyping()">
							<img src="../images/red_x.gif" alt="Error!" style="width: 20px; height: 20px;" class="hidden" id="last-name-good"></img>
							<img src="../images/green_check.png" alt="Success!" style="width: 20px; height: 20px;" class="hidden" id="last-name-bad"></img>
							</td>
                        </tr>
                        <tr>
                            <td>Credit Card:</td>
                            <td><input type="text" class="in_txt" id="credit-card" name="credit_card" onkeyup="checkCreditCardWhileTyping()">
							<img src="../images/red_x.gif" alt="Error!" style="width: 20px; height: 20px;" class="hidden" id="credit-card-good"></img>
							<img src="../images/green_check.png" alt="Success!" style="width: 20px; height: 20px;" class="hidden" id="credit-card-bad"></img>
							</td>
                        </tr>
                        <tr>
                            <td>Street Address:</td>
                            <td><input type="text" class="in_txt" id="address" name="address" onkeyup="checkAddressWhileTyping()">
							<img src="../images/red_x.gif" alt="Error!" style="width: 20px; height: 20px;" class="hidden" id="address-good"></img>
							<img src="../images/green_check.png" alt="Success!" style="width: 20px; height: 20px;" class="hidden" id="address-bad"></img>
							</td>
                        </tr>
						<tr>
                            <td>Phone Number:</td>
                            <td><input type="text" class="in_txt" id="phone" name="phone" onkeyup="checkPhoneWhileTyping()">
							<img src="../images/red_x.gif" alt="Error!" style="width: 20px; height: 20px;" class="hidden" id="phone-good"></img>
							<img src="../images/green_check.png" alt="Success!" style="width: 20px; height: 20px;" class="hidden" id="phone-bad"></img>
							</td>
                        </tr>
                        <tr>
                            <td>Zip code:</td>
                            <td><input list="zip-results" type="text" class="in_txt" id="zip-code" name="zip_code" onkeyup="checkZipCodeWhileTyping()">
							<img src="../images/red_x.gif" alt="Error!" style="width: 20px; height: 20px;" class="hidden" id="zip-code-good"></img>
							<img src="../images/green_check.png" alt="Success!" style="width: 20px; height: 20px;" class="hidden" id="zip-code-bad"></img>
                            <datalist id="zip-results"></datalist>
							</td>
                        </tr>
                        <tr>
                            <td>State:</td>
                            <td><input list="state-results" type="text" class="in_txt" id="state" name="state" onkeyup="checkStateWhileTyping()">
							<img src="../images/red_x.gif" alt="Error!" style="width: 20px; height: 20px;" class="hidden" id="state-good"></img>
							<img src="../images/green_check.png" alt="Success!" style="width: 20px; height: 20px;" class="hidden" id="state-bad"></img>
                            <datalist id="state-results"></datalist>
							</td>
                        </tr>
                        <tr>
                            <td>Quantity:</td>
                            <td><input type="text" class="in_txt" id="quantity" name="quantity" onkeyup="checkQuantityWhileTyping()">
							<img src="../images/red_x.gif" alt="Error!" style="width: 20px; height: 20px;" class="hidden" id="quantity-good"></img>
							<img src="../images/green_check.png" alt="Success!" style="width: 20px; height: 20px;" class="hidden" id="quantity-bad"></img>
							</td>
                        </tr>
                        <tr>
                            <td>Shipping speed:</td>
                            <td>
                                <input type="radio" name="ship" name="ship" value="1"> Burn my mouth tomorrow<br>
                                <input type="radio" name="ship" name="ship" value="2"> Burn my mouth two days from now<br>
                                <input type="radio" name="ship" name="ship" value="3" checked="checked"> Burn my mouth whenever it gets here
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div id='submit-btn-div'>
                    <input type='submit' value='Purchase' id='submit-btn'>
				<hr>
                </div>
            </form>
        </div>
        
        <br><br>
                <div class='center-div' id='management' >
                    <a href='../management/management.html'>Management Team</a> | <a href='/index.html'>Home</a>
                </div>
            </a>
    </body>
</html>
