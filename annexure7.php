<?php
  session_start();
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://kit.fontawesome.com/c1a14cb4ed.js" crossorigin="anonymous"></script>
    <title>Annexure 7</title>
  </head>
  <body>
    <div class="container">

      <h4 class="annex-number text-right">Annexure - 7</h4>
      <h4 class="annex-head">CIVIL ENGINEER / ARCHITECT'S CERTIFICATE FOR INVESTMENT IN BUILDING AND OTHER CIVIL WORKS UNDER 2014-19 POLICY</h4>

      <?php
        require_once('configuration/dbConnection.php');

        if(isset($_POST['formSubmit'])) {

          $query = "INSERT INTO annexure_7 VALUES(0,
            ".$_POST['estCost'].",
            '".$_POST['nameOfEnterprise']."',
            '".$_POST['addressOfEnterprise']."',
            ".$_POST['completedCivilWorksEstimates'].",
            ".$_POST['amntCertifiedToContractors'].",
            ".$_POST['retentionMoney'].",
            ".$_POST['amntOfMaterialsUtilized'].",
            '".$_POST['declarationPlace']."',
            '".$_POST['declarationDate']."')";

          $result = mysqli_query($dbc, $query) or die('<div class="alert alert-warning"><strong>DBError!!</strong> couldn\'t execute query.</div>');

          echo '<button class="btn btn-outline-dark btn-lg mb-2" onclick="location.href=\'annexure7.php\'"><i class="fas fa-backspace"></i></button>';

          if($result)
            echo '<div class="alert alert-success"><strong>Success!!</strong> values stored in database.</div>';

        }

      ?>

      <form method="post" >
        <div class="mt-5 certificate">
          <p class="mt-3 mb-5">
            I, heareby certify thata as against the estimated cost of Rs. <input   type="number" value=0 name="estCost" /> of the building and civil works for M/s <input   type="text" name="nameOfEnterprise" /> (mention the enterprise
            name) for their project at <input  type="text" name="addressOfEnterprise" /> (mention the location of the enterprise). The enterprise has completed the civil works and the particulars are as under:
          </p>
        </div>

        <table class="table table-bordered">
          <thead>
            <th>SI. No.</th>
            <th>Particulars</th>
            <th>Amount (in Rs.)</th>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>Value of completed civil works as per estimates</td>
              <td><input  type="number" value=0 name="completedCivilWorksEstimates" /></td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Amount certified for payment to the building (civil and structural) contractors</td>
              <td><input  type="number" value=0 name="amntCertifiedToContractors" /></td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Retention money (from civil contractor)</td>
              <td><input  type="number" value=0 name="retentionMoney" /></td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Value of materials utilized for the completed portion of building</td>
              <td><input  type="number" value=0 name="amntOfMaterialsUtilized" /></td>
            </tr>
          </tbody>
        </table>

        <div class="mt-5 certificate">
          <p class="mt-3">The value of completed building certified above do not involve the area built for guest houses, and residential building in the factory site.</p>
          <p>It is further certified that built area of the building is absolutely essential for the manufacturing/processing activity of the industry.</p>
          <div class="text-right sign">Signature and full address Civil engineer/<br />chartered engineer's/architect's</div>
          <p>Place: <input  type="text" name="declarationPlace" /> </P>
          <p>Date: <input  type="date" name="declarationDate" /> </p>
        </div>

        <button class="btn btn-light" onclick="return printPage()">Print Page</button>
        <button class="btn btn-light" onclick="return validatePrint()" type="submit" name="formSubmit" >Submit</button>
      </form>
    </div>
  </body>
</html>
