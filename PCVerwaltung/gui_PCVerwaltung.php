<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Source_Files/styles/guiPC_Verwaltung.css">
    <title>.: PC-Verwaltung :.</title>
  </head>

  <body>
      <form action="index.php" method="get">

      <div class="hauptdiv">
                <h1 class="h1">PC-Verwaltung</h1>
          

          <div class="dateneingabe">
                <h4>Dateneingabe</h4>
                <table>
                    <tr>
                      <td class="label" >ID</td>
                      <td><input type="text" name="txtid" class="textzeile" readonly></td>
                    </tr>
                    <tr>
                      <td class="label">Arbeitsspeicher in GB</td>
                      <td><input type="text" name="txtram" class="textzeile"></td>
                    </tr>
                    <tr>
                      <td class="label">Prozessortakt in GHz</td>
                      <td><input type="text" name="txttakt" class="textzeile"></td>
                    </tr>
                    <tr>
                      <td class="label">Festplattenkapazität in GB</td>
                      <td><input type="text" name="txthdd" class="textzeile"></td>
                    </tr>
                    <tr>
                      <td><button type="submit" class="knopf">DS übernehmen</button>
                      <td><button type="submit" class="knopf">DS löschen</button>
                    </tr>
                </table>
          </div>

          <div class="datenausgabe">
                <h4>Datenausgabe</h4> 
                <div>
                  <textarea class="txtarea"></textarea>
                </div>
          </div> 

          <div class="datensatzsteuerung">
                <h4>Datensatzsteuerung</h4> 
                <div>
                  <button type="submit" class="knoepfelinks">|<</button>
                  <button type="submit" class="knoepfelinks"><</button>
                </div>          
                <div>
                  <button type="submit" class="knoepferechts">></button>
                  <button type="submit" class="knoepferechts">>|</button>
                  <button type="submit" class="knoepferechts">>*</button>
                </div>    
          </div> 

      </div>


  </body>
  
</html>