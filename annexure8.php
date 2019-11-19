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
    <title>Annexure 8</title>
  </head>
  <body>
    <div class="container">

      <h4 class="annex-number text-right">Annexure - 8</h4>
      <h4 class="annex-head">FORM OF DECLARATION REGARDING EMPLOYMENT OF 'LOCAL PERSONS' REQUIRED UNDER 2014-19 POLICY</h4>

      <?php
        require_once('configuration/dbConnection.php');

        function replace_empty_with_zero($var) {
          if(empty($var)){
            return 0;
          }else{
            return $var;
          }
        }

        if(isset($_POST['formSubmit'])){
          $query = "INSERT INTO annexure_8 VALUES(0,
            '".$_POST['nameOfEnterprise']."',
            '".$_POST['addressOfEnterprise']."',
            '".$_POST['prodOffice']."',
            '".$_POST['prodFactory']."',
            ".replace_empty_with_zero($_POST['yearOfEstOffice']).",
            ".replace_empty_with_zero($_POST['yearOfEstFactory']).",
            '".$_POST['propOffice']."',
            '".$_POST['propFactory']."',
            '".$_POST['inchargeOffice']."',
            '".$_POST['inchargeFactory']."',
            '".$_POST['regOffice']."',
            '".$_POST['regFactory']."',
            ".replace_empty_with_zero($_POST['totEmpNoGrpA']).",
            ".replace_empty_with_zero($_POST['totEmpNoGrpB']).",
            ".replace_empty_with_zero($_POST['totEmpNoGrpC']).",
            ".replace_empty_with_zero($_POST['totEmpNoGrpD']).",
            ".replace_empty_with_zero($_POST['localEmpNoGrpA']).",
            ".replace_empty_with_zero($_POST['localEmpNoGrpB']).",
            ".replace_empty_with_zero($_POST['localEmpNoGrpC']).",
            ".replace_empty_with_zero($_POST['localEmpNoGrpD']).",
            '".$_POST['declarationPlace']."',
            '".$_POST['declarationDate']."')";

            $result = mysqli_query($dbc, $query) or die('<div class="alert alert-warning"><strong>DBError!!</strong> couldn\'t execute query.</div>');

            echo '<button class="btn btn-outline-dark btn-lg mb-2" onclick="location.href=\'annexure8.php\'"><i class="fas fa-backspace"></i></button>';

            if($result)
              echo '<div class="alert alert-success"><strong>Success!!</strong> values stored in database.</div>';

        } else {

      ?>

      <form method="post" >
        <table class="table table-bordered">
          <tbody>
            <th>1.</th>
            <th>Name of the Industrial enterprises</th>
            <td colspan="5">M/s.<input name="nameOfEnterprise" /></td>
          </tbody>
          <tbody>
            <tr>
              <th>2.</th>
              <th>Address: Village/town/taluk/district</th>
              <td colspan="5"><input name="addressOfEnterprise" /></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td colspan="3">Office</td>
              <td colspan="2">Factory</td>
            </tr>
            <tr>
              <th>3.</th>
              <th>Product</th>
              <td colspan="3"><input name="prodOffice" /></td>
              <td colspan="2"><input name="prodFactory" /></td>
            </tr>
            <tr>
              <th>4.</th>
              <th>Year of establishment</th>
              <td colspan="3"><input name="yearOfEstOffice" /></td>
              <td colspan="2"><input name="yearOfEstFactory" /></td>
            </tr>
            <tr>
              <th>5.</th>
              <th>Proprietor/partnership/Pvt. ltd./Ltd</th>
              <td colspan="3"><input name="propOffice" /></td>
              <td colspan="2"><input name="propFactory" /></td>
            </tr>
            <tr>
              <th>6.</th>
              <th>Name of the Administrative Officer in charge of recruitment (Kannadiga or Non - Kannadiga)</th>
              <td colspan="3">
                <select name="inchargeOffice">
                  <option value="kannadiga">Kannadiga</option>
                  <option value="non-kannadiga">Non - Kannadiga</option>
                </select>
              </td>
              <td colspan="2">
                <select name="inchargeFactory">
                  <option value="kannadiga">Kannadiga</option>
                  <option value="non-kannadiga">Non - Kannadiga</option>
                </select>
              </td>
            </tr>
            <tr>
              <th>7.</th>
              <th>Registered as MSM E, large/mega projects No. and date</th>
              <td colspan="3"><input name="regOffice" /></td>
              <td colspan="2"><input name="regFactory" /></td>
            </tr>
            <tr>
              <th>8.</th>
              <th colspan="6">Employement details (excluding Casual worker and 'Badli' workers)</th>
            </tr>
            <tr>
              <th></th>
              <th>Particulars</th>
              <th>Group A</th>
              <th>Group B</th>
              <th>Group C</th>
              <th>Group D</th>
              <th>Total</th>
            </tr>
            <tr>
              <th>A.</th>
              <th>Total no. employees</th>
              <td><input name="totEmpNoGrpA" oninput="calculateTotal('noEmp','totalNoEmp'); calculatePercentage('A','percentLocalsGrpA')" type="number" class="noEmp A" name="noEmpGrpA" /></td>
              <td><input name="totEmpNoGrpB" oninput="calculateTotal('noEmp','totalNoEmp'); calculatePercentage('B','percentLocalsGrpB')" type="number" class="noEmp B" name="noEmpGrpB" /></td>
              <td><input name="totEmpNoGrpC" oninput="calculateTotal('noEmp','totalNoEmp'); calculatePercentage('C','percentLocalsGrpC')" type="number" class="noEmp C" name="noEmpGrpC" /></td>
              <td><input name="totEmpNoGrpD" oninput="calculateTotal('noEmp','totalNoEmp'); calculatePercentage('D','percentLocalsGrpD')" type="number" class="noEmp D" name="noEmpGrpD" /></td>
              <td><input type="number" disabled id="totalNoEmp" /></td>
            </tr>
            <tr>
              <th>B.</th>
              <th>No. of local persons(Kannadigas) therein</th>
              <td><input name="localEmpNoGrpA" oninput="calculateTotal('noLocals','totalNoLocals'); calculatePercentage('A','percentLocalsGrpA')" type="number" class="noLocals A" name="noLocalsGrpA" /></td>
              <td><input name="localEmpNoGrpB" oninput="calculateTotal('noLocals','totalNoLocals'); calculatePercentage('B','percentLocalsGrpB')" type="number" class="noLocals B" name="noLocalsGrpA" /></td>
              <td><input name="localEmpNoGrpC" oninput="calculateTotal('noLocals','totalNoLocals'); calculatePercentage('C','percentLocalsGrpC')" type="number" class="noLocals C" name="noLocalsGrpA" /></td>
              <td><input name="localEmpNoGrpD" oninput="calculateTotal('noLocals','totalNoLocals'); calculatePercentage('D','percentLocalsGrpD')" type="number" class="noLocals D" name="noLocalsGrpA" /></td>
              <td><input type="number" disabled id="totalNoLocals" /></td>
            </tr>
            <tr>
              <th>C.</th>
              <th>Percentage of local persons(Kannadigas) to total</th>
              <td><input disabled id="percentLocalsGrpA" /></td>
              <td><input disabled id="percentLocalsGrpB" /></td>
              <td><input disabled id="percentLocalsGrpC" /></td>
              <td><input disabled id="percentLocalsGrpD" /></td>
              <td></td>
            </tr>
            <tr>
              <th>9.</th>
              <th colspan="6">I/We understand that the percentage of local people (Kannadigas) is not less than 70% on an overall basis and 100% in case of Group D categories employees.
                  I/We hereby undertake to make up the deficiency before the disbursement of subsidy.
              </th>
            </tr>
            <tr>
              <th>10.</th>
              <th colspan="6">I/We further understand that eligibility of my/our industrial enterprises, undertaking for incentives and concessions from the Government of Karnataka is contingent upon my fulfilling minimum local employment as per the Dr. Sarojini Mahishi Report to the satisfaction of the State Government.</th>
            </tr>
          </tbody>
        </table>
        <p>Place: <input required type="text" name="declarationPlace" /> </P>
        <p>Date: <input required type="date" name="declarationDate" /> </p>
        <div class="text-right sign">Signature of authorized person</div>
        <button class="btn btn-light" onclick="return printPage()">Print Page</button>
        <button class="btn btn-light" onclick="return validatePrint()" type="submit" name="formSubmit" >Submit</button>
      </form>

      <?php
        }
      ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>

  </body>
</html>
