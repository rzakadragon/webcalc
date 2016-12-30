<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>VAT Calc</title>
    <meta name="description" content="The VAT Calc">
    <meta name="author" content="Ziankevich">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
    
    <div class="vrapper">
        <div class="inputbox">
            <div class="border">
            
                <h2>pln vat calc v1.0</h2>
                <div class="tableCover">
                    <table>
                        <tr>
                            <td>
                                <input type="number" id="plnWithVAT" placeholder="PLN"></input>
                                <span>Zl</span>
                            </td>
                            <td>
                                <input type="number" id="plnWithoutVAT" placeholder="PLN"></input>
                                <span>Zl</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" id="usdWithVAT" placeholder="USD"></input>    
                                <span>$</span>    
                            </td>
                            <td>
                                <input type="number" id="usdWithoutVAT" placeholder="USD"></input>  
                                <span>$</span>       
                            </td>
                        </tr>
                        <tfoot>
                            <tr>
                                <td>+ VAT</td>
                                <td>- VAT</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <br/>
                <br/>
                <br/>
                <span>Zl per $</span>   
                <input type="number" id="usdValue" value="4.226">(Zl)</input>
                
            </div>
        </div>
    </div>

    <script src="js/index.js"></script>
</body>
</html>

