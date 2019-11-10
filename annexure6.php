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
    <title>Annexure 6</title>
  </head>
  <body>
    <div class="container">
      <h4 class="annex-number text-right">Annexure - 6</h4>
      <h4 class="annex-head">FIXED INVESTMENT CERTIFICATE FROM THE BANK / FINANCIAL INSTITUTIONS REQUIRED UNDER 2014-19 POLICY</h4>

      <div class="mt-5 certificate">
        <p class="mt-3 mb-5">
          M/S <input type="text" /> (mention name of the enterprise) factory located at <input type="text" /> (mention factory location of the enterprise) have been sanctioned term loan under order/letter No: <input type="number" /> dtd:
          <input type="number" /> and have been disbursed the amounts of Rs. <input type="number" />. The investment made by the enterprise is as shown below:
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
            <td><input type="date" /></td>
            <td><input type="number" /></td>
          </tr>
          <tr>
            <th rowspan="7">b.</th>
            <th rowspan="6">Loan amount disbursed on (mention all the dates and amount of loan disbursed sanctioned as per above letters)</th>
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
            <td><input type="date" /></td>
            <td><input type="number" /></td>
          </tr>
          <tr>
            <td><input type="date" /></td>
            <td><input type="number" /></td>
          </tr>
          <tr>
            <th>Total amount disbursed as on</th>
            <td><input type="date" /></td>
            <td><input type="number" /></td>
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
            <td><input type="number" /></td>
            <td><input type="number" /></td>
          </tr>
          <tr>
            <th></th>
            <th>ii) Building (excluding residential quarters/guest houses).</th>
            <td><input type="number" /></td>
            <td><input type="number" /></td>
          </tr>
          <tr>
            <th></th>
            <th>iii) Plant and machinery (excluding technical knowhow, engineering fees, feasibility study, etc.)</th>
            <td><input type="number" /></td>
            <td><input type="number" /></td>
          </tr>
          <tr>
            <th></th>
            <th>iv) Other assets, tools, jigsdies, DG sets, boilers, etc. (please specify the items)</th>
            <td><input type="number" /></td>
            <td><input type="number" /></td>
          </tr>
          <tr>
            <th></th>
            <th>Total</th>
            <td><input type="number" /></td>
            <td><input type="number" /></td>
          </tr>
        </tbody>
      </table>

      <div class="mt-5 certificate">
        <p class="mt-3">
          Certified that the sanction of financial assistance to M/S <input type="text" /> for the enterprises at <input type="text" /> has been considered on the basis of the company's assessed requirement of factory buildings and the cost
          is estimated at Rs. <input type="number" /> as per project report.
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
        <p>Place: <input /> </P>
        <p>Date: <input type="date" /> </p>
      </div>
    </div>
  </body>
</html>
