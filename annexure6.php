<?php
  session_start();

  require_once('configuration/dbConnection.php');

  if(isset($_POST['formSubmit'])) {
    $query = 'INSERT INTO annexure_6 VALUES( 0, '.$_POST['nameOfEnterprise'].', '.$_POST['addressOfEnterprise'].', '.$_POST['letterNo'].', '.$_POST['dtd'].', '.$_POST['disbursedAmt'].', '.
    $_POST['termLoanSancDate'].', '.$_POST['termLoanSancAmt'].', '.$_POST['loanDisbDate'].', '.$_POST['loanDisbAmt'].', '.$_POST['landAppr'].', '.
    $_POST['landActu'].', '.$_POST['buildingAppr'].', '.$_POST['buildingActu'].', '.$_POST['plantAndMachAppr'].', '.$_POST['plantAndMachActu'].', '.
    $_POST['otherAssetsAppr'].', '.$_POST['otherAssetsActu'].', '.$_POST['totalAppr'].', '.$_POST['totalActu'].', '.$_POST['m_s'].', '.
    $_POST['entreLoc'].', '.$_POST['estCost'].', '.$_POST['declarationPlace'].', '.$_POST['declarationDate'].')';
    echo $query;
  }

?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <title>Annexure 6</title>
  </head>
  <body>
    <div class="container">
      <h4 class="annex-number text-right">Annexure - 6</h4>
      <h4 class="annex-head">FIXED INVESTMENT CERTIFICATE FROM THE BANK / FINANCIAL INSTITUTIONS REQUIRED UNDER 2014-19 POLICY</h4>

      <form method="post" >
        <div class="mt-5 certificate">
          <p class="mt-3 mb-5">
            M/S <input type="text" name="nameOfEnterprise" /> (mention name of the enterprise) factory located at <input type="text" name="addressOfEnterprise" /> (mention factory location of the
            enterprise) have been sanctioned term loan under order/letter No: <input type="number" name="letterNo" /> dtd: <input type="number" name="dtd" /> and have been disbursed the amounts of Rs.
            <input type="number" name="disbursedAmt" />. The investment made by the enterprise is as shown below:
          </p>
        </div>

        <table class="table table-bordered">
          <thead>
            <th>SI. No.</th>
            <th>Particulars</th>
            <th>Date</th>
            <th>Amount (in Rs.)</th>
          </thead>
          <tbody>
            <tr>
              <th>a.</th>
              <th>Term loan sanctioned</th>
              <td><input type="date" name="termLoanSancDate" /></td>
              <td><input type="number" name="termLoanSancAmt" /></td>
            </tr>
            <tr>
              <th rowspan="7">b.</th>
              <th rowspan="6">Loan amount disbursed on (mention all the dates and amount of loan disbursed sanctioned as per above letters)</th>
              <td><input type="date" /></td>
              <td><input type="number" /></td>
            </tr>
            <tr>
              <td><input type="date"  /></td>
              <td><input type="number" /></td>
            </tr>
            <tr>
              <td><input type="date" /></td>
              <td><input type="number" /></td>
            </tr>
            <tr>
              <td><input type="date" /></td>
              <td><input type="number" /></td>
            </tr>
            <tr>
              <td><input type="date" /></td>
              <td><input type="number" /></td>
            </tr>
            <tr>
              <td><input type="date" /></td>
              <td><input type="number" /></td>
            </tr>
            <tr>
              <th>Total amount disbursed as on</th>
              <td><input type="date" name="loanDisbDate" /></td>
              <td><input type="number" name="loanDisbAmt" /></td>
            </tr>
            <tr>
              <th>c.</th>
              <th colspan="3">Value of investment in fixed assets</th>
            </tr>
            <tr>
              <th></th>
              <th></th>
              <th>As per project appraisal</th>
              <th>Actual investment including promoter’s investment</th>
            </tr>
            <tr>
              <th></th>
              <th>i) Land (excluding lease hold)</th>
              <td><input type="number" name="landAppr" /></td>
              <td><input type="number" name="landActu" /></td>
            </tr>
            <tr>
              <th></th>
              <th>ii) Building (excluding residential quarters/guest houses).</th>
              <td><input type="number" name="buildingAppr" /></td>
              <td><input type="number" name="buildingActu" /></td>
            </tr>
            <tr>
              <th></th>
              <th>iii) Plant and machinery (excluding technical knowhow, engineering fees, feasibility study, etc.)</th>
              <td><input type="number" name="plantAndMachAppr" /></td>
              <td><input type="number" name="plantAndMachActu" /></td>
            </tr>
            <tr>
              <th></th>
              <th>iv) Other assets, tools, jigsdies, DG sets, boilers, etc. (please specify the items)</th>
              <td><input type="number" name="otherAssetsAppr" /></td>
              <td><input type="number" name="otherAssetsActu" /></td>
            </tr>
            <tr>
              <th></th>
              <th>Total</th>
              <td><input type="number" name="totalAppr" /></td>
              <td><input type="number" name="totalActu" /></td>
            </tr>
          </tbody>
        </table>

        <div class="mt-5 certificate">
          <p class="mt-3">
            Certified that the sanction of financial assistance to M/S <input type="text" name="m_s" /> for the enterprises at <input type="text" name="entreLoc" /> has been considered on the basis of
            the company's assessed requirement of factory buildings and the cost is estimated at Rs. <input type="number" name="estCost" /> as per project report.
          </p>
          <p>
            We certify that this investment certificate is issued after verifying the bills and vouchers made available by the enterprise for purposes of release of Term loan Installments (including promoter's investments and based on the
            physical verification of the inspecting Officers. Items for which subsidy is not admissible are not included in the investment certified above. And also certified that the investment made on second hand plant and machinery is not
            included.
          </p>
          <p>The enterprises is covered/not covered under KVIC/KVIB/PMEGP/KSEP margin money scheme and any other subsidy scheme.</p>
          <p>
            We are in possession of relevant bills and vouchers on which this investment certificate is issued and we agree to make available the same as and when required for any verification purpose, before the loan liability is discharged.
          </p>
          <div class="text-right sign">Signature of the<br/> Branch Manager/Manager<br/>(Name of the Bank/Institution)</div>
          <p>Place: <input type="text" name="declarationPlace" /> </P>
          <p>Date: <input type="date" name="declarationDate" /> </p>
        </div>

        <button class="btn btn-light" onclick="return printPage()">Print Page</button>
        <button class="btn btn-light" onclick="return validatePrint()" type="submit" name="formSubmit" >Submit</button>
      </form>

    </div>
  </body>
  <script>
    //To Do: Change the variable below to false during normal code execution. While testing change it to true
    var inPrintPage = true
    function printPage() {
      window.print()
      inPrintPage = true
      return false
    }

    function validatePrint() {
      if(!inPrintPage){
        alert('We recommend to download or print the page as PDF first.')
        return false
      } else {
        return true
      }
    }

  </script>
</html>
