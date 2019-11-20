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
    <title>Annexure 4</title>
  </head>
  <body>
    <div class="container">
      <h4 class="annex-number text-right">Annexure - 4</h4>
      <h4 class="annex-head" >APPLICATION FOR SANCTION OF INVESTMENT PROMOTION SUBSIDY UNDER 2014-19 POLICY</h4>

      <?php
        require_once('configuration/dbConnection.php');

        function replace_empty_with_zero($var) {
          if(empty($var)){
            return 0;
          }else{
            return $var;
          }
        }

        if(isset($_POST['formSubmit'])) {
          $query = "INSERT INTO annexure_4 VALUES( 0,
            '".$_POST['nameOfEnterprise']."',
            '".$_POST['addressOfEnterprise']."',
            '".$_POST['talukAndZone']."',
            '".$_POST['regNo']."',
            '".$_POST['regDate']."',
            '".$_POST['ESI_EPF_RegNo']."',
            '".$_POST['ESI_EPF_Date']."',
            '".$_POST['VAT_RegNo']."',
            '".$_POST['VAT_Date']."',
            '".$_POST['elecPwrLineConn_rr_no']."',
            '".$_POST['elecPwrLightConn_rr_no']."',
            '".$_POST['sizeOfEnterprise']."',
            '".$_POST['recycling']."',
            '".$_POST['productsManufactured']."',
            '".$_POST['constitutionOfTheIndustry']."',
            '".$_POST['catOfEntrepreneur']."',
            '".$_POST['newOrExist']."',
            '".$_POST['commenceOfProdDate']."',
            ".replace_empty_with_zero($_POST['projCost']).",
            '".$_POST['nameOfFinInst']."',
            ".replace_empty_with_zero($_POST['actualInvstDet']).",
            ".replace_empty_with_zero($_POST['meansOfFin']).",
            ".replace_empty_with_zero($_POST['EmpInNewEnter']).",
            ".replace_empty_with_zero($_POST['AddEmpInCaseExp']).",
            '".$_POST['declarationPlace']."',
            '".$_POST['declarationDate']."')";

          $result = mysqli_query($dbc, $query) or die('<div class="alert alert-warning"><strong>DBError!!</strong> couldn\'t execute query.</div>');

          echo '<button class="btn btn-outline-dark btn-lg mb-2" onclick="location.href=\'annexure4.php\'"><i class="fas fa-backspace"></i></button>';

          if($result)
            echo '<div class="alert alert-success"><strong>Success!!</strong> values stored in database.</div>';

        } else {
      ?>

      <form method="post">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>1.</th>
              <td>Name of the Enterprise</td>
              <td><textarea name="nameOfEnterprise" ></textarea></td>
            </tr>
            <tr>
              <th>2.</th>
              <td>Address of the Enterprise<br/>
                  a. Factory/works<br/>
                  b. Office address
              </td>
              <td><textarea name="addressOfEnterprise"></textarea></td>
            </tr>
            <tr>
              <th>3.</th>
              <td>Taluk and Zone as per 2014-19<br/>
                  Industrial Policy
              </td>
              <td><textarea name="talukAndZone"></textarea></td>
            </tr>
            <tr>
              <th>4(a).</th>
              <td>Registration No. and date<br/>
                  (As mentioned in EM/IEM/IL)
              </td>
              <td>
                <input name="regNo" />
                <input type="date" name="regDate" />
              </td>
            </tr>
            <tr>
              <th>4(b).</th>
              <td>ESI/EPF Registration No. and date.</td>
              <td>
                <input name="ESI_EPF_RegNo" />
                <input type="date" name="ESI_EPF_Date" />
              </td>
            </tr>
            <tr>
              <th>4(c).</th>
              <td>VAT Registration No. and date</td>
              <td>
                <input name="VAT_RegNo" />
                <input type="date" name="VAT_Date" />
              </td>
            </tr>
            <tr>
              <th>4(d).</th>
              <td>Electric Power Connection RR No.<br/>
                  (Power, Line).
              </td>
              <td><input name="elecPwrLineConn_rr_no" /></td>
            </tr>
            <tr>
              <th>4(e).</th>
              <td>Electric Power Connection RR No.<br/>
                  (Lighting).
              </td>
              <td><input name="elecPwrLightConn_rr_no" /></td>
            </tr>
            <tr>
              <th>5.</th>
              <td>Size of the enterprise (mention whether)<br/>
                  Micro/Small/Medium Enterprise
              </td>
              <td>
                <select name="sizeOfEnterprise">
                  <option value="micro">Micro</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                </select>
              </td>
            </tr>
            <tr>
              <th>6.</th>
              <td>Whether the unit established is recycling<br/>
                  electronic waste/plastic waste
              </td>
              <td>
                <select name="recycling">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
              </td>
            </tr>
            <tr>
              <th>7.</th>
              <td>Products Manufactured</td>
              <td><textarea name="productsManufactured"></textarea></td>
            </tr>
            <tr>
              <th>8.</th>
              <td>Constitution of the industry(mention whether<br/>
                  Proprietary/Partnership/Private /Public<br/>
                  Limited Company) or any other<br/>
                  legal entity
              </td>
              <td><textarea name="constitutionOfTheIndustry"></textarea></td>
            </tr>
            <tr>
              <th>9.</th>
              <td>Category to which the entrepreneur<br/>
                  belong (mention whether general;<br/>
                  SC/ST; women; women SC/ST; Minority;<br/>
                  Backward Class [Category 1/2A];<br/>
                  physically challenged; ex-servicemen)
              </td>
              <td><textarea name="catOfEntrepreneur"></textarea></td>
            </tr>
            <tr>
              <th>10.</th>
              <td>Is it new industry or existing industry<br/>
                  undertaken expansion/diversification/<br/>
                  modernization.
              </td>
              <td><textarea name="newOrExist"></textarea></td>
            </tr>
            <tr>
              <th>11.</th>
              <td>Date of commencement of commercial<br/>
                  production (As per first sale invoice)
              </td>
              <td><input type="date" name="commenceOfProdDate"/></td>
            </tr>

            <tr>
              <th rowspan="7">12.</th>
              <td>Project Cost: (Amount in Rs)</td>
              <td></td>
            </tr>
            <tr>
              <td>Land:</td>
              <td><input type="number" class="projCost" oninput="calculateTotal('projCost', 'totalProjCost')"></td>
            </tr>
            <tr>
              <td>Building:</td>
              <td><input type="number" class="projCost" oninput="calculateTotal('projCost', 'totalProjCost')"></td>
            </tr>
            <tr>
              <td>Plant and Machinery:</td>
              <td><input type="number" class="projCost" oninput="calculateTotal('projCost', 'totalProjCost')"></td>
            </tr>
            <tr>
              <td>Others:</td>
              <td><input type="number" class="projCost" oninput="calculateTotal('projCost', 'totalProjCost')"></td>
            </tr>
            <tr>
              <td>Working Capital Margin:</td>
              <td><input type="number" class="projCost" oninput="calculateTotal('projCost', 'totalProjCost')"></td>
            </tr>
            <tr>
              <td>TOTAL (auto calculated)</td>
              <td><input readonly id="totalProjCost" name="projCost" /></td>
            </tr>

            <tr>
              <th rowspan="5">13.</th>
              <td>Name of the term loan lending<br/>
                  financial institution
              </td>
              <td><input name="nameOfFinInst" /></td>
            </tr>
            <tr>
              <td>Date of loan sanctioned:</td>
              <td><input type="date"></td>
            </tr>
            <tr>
              <td>Amount of loan sanctioned:</td>
              <td><input type="number"></td>
            </tr>
            <tr>
              <td>Amount of loan release:</td>
              <td><input type="number"></td>
            </tr>
            <tr>
              <td>Date of 1st installment<br/>
                  of loan released:
              </td>
              <td><input type="date"></td>
            </tr>
            <tr>
              <th rowspan="8">14.</th>
              <td>Actual Investment details:<br/>
                  (Amount in Rs.)
              </td>
              <td></td>
            </tr>
            <tr>
              <td>Land:</td>
              <td><input type="number" class="actualInvst" oninput="calculateTotal('actualInvst', 'totalActu')" /></td>
            </tr>
            <tr>
              <td>Building:</td>
              <td><input type="number" class="actualInvst" oninput="calculateTotal('actualInvst', 'totalActu')" /></td>
            </tr>
            <tr>
              <td>Plant and Machinery:</td>
              <td><input type="number" class="actualInvst" oninput="calculateTotal('actualInvst', 'totalActu')" /></td>
            </tr>
            <tr>
              <td>Transportation:</td>
              <td><input type="number" class="actualInvst" oninput="calculateTotal('actualInvst', 'totalActu')" /></td>
            </tr>
            <tr>
              <td>Electrification:</td>
              <td><input type="number" class="actualInvst" oninput="calculateTotal('actualInvst', 'totalActu')" /></td>
            </tr>
            <tr>
              <td>Erection and Installation<br/>
                  charges of machineries:
              </td>
              <td><input type="number" class="actualInvst" oninput="calculateTotal('actualInvst', 'totalActu')" /></td>
            <tr>
              <td>TOTAL (auto calculated)</td>
              <td><input type= id="totalActu" name="actualInvstDet" /></td>
            </tr>

            <tr>
              <th rowspan="5">15.</th>
              <td>Means of finance:<br/>
                  (Amount in Rs.)
              </td>
              <td></td>
            </tr>
            <tr>
              <td>Own/Share capital:</td>
              <td><input type="number" class="meansOfFinance" oninput="calculateTotal('meansOfFinance', 'totalMeansOfFinance')"></td>
            </tr>
            <tr>
              <td>Term loans:</td>
              <td><input type="number" class="meansOfFinance" oninput="calculateTotal('meansOfFinance', 'totalMeansOfFinance')"></td>
            </tr>
            <tr>
              <td>Others (please specify):</td>
              <td><input type="number" class="meansOfFinance" oninput="calculateTotal('meansOfFinance', 'totalMeansOfFinance')"></td>
            </tr>
            <tr>
              <td>TOTAL:</td>
              <td><input id="totalMeansOfFinance" name="meansOfFin" /></td>
            </tr>

            <tr>
              <th rowspan="6">16.</th>
              <td>Employment provided in<br/>
                  the new enterprises
              </td>
              <td></td>
            </tr>
            <tr>
              <td>Executive/Top level:</td>
              <td><input type="number" class="empProvided" oninput="calculateTotal('empProvided', 'totalEmpProvided')"></td>
            </tr>
            <tr>
              <td>Managerial:</td>
              <td><input type="number" class="empProvided" oninput="calculateTotal('empProvided', 'totalEmpProvided')"></td>
            </tr>
            <tr>
              <td>Supervisory/Skilled:</td>
              <td><input type="number" class="empProvided" oninput="calculateTotal('empProvided', 'totalEmpProvided')"></td>
            </tr>
            <tr>
              <td>Un skilled/ Semi skilled</td>
              <td><input type="number" class="empProvided" oninput="calculateTotal('empProvided', 'totalEmpProvided')"></td>
            <tr>
              <td>TOTAL:</td>
              <td><input type="number" readonly id="totalEmpProvided" name="EmpInNewEnter" ></td>
            </tr>

            <tr>
              <th rowspan="6">17.</th>
              <td>Additional employment in case<br/>
                  of expansion/modernization/diverse
              </td>
              <td></td>
            </tr>
            <tr>
              <td>Executive/Top level:</td>
              <td><input type="number" class="additionalEmp" oninput="calculateTotal('additionalEmp', 'totalAddEmpProvided')"></td>
            </tr>
            <tr>
              <td>Managerial:</td>
              <td><input type="number" class="additionalEmp" oninput="calculateTotal('additionalEmp', 'totalAddEmpProvided')"></td>
            </tr>
            <tr>
              <td>Supervisory/Skilled:</td>
              <td><input type="number" class="additionalEmp" oninput="calculateTotal('additionalEmp', 'totalAddEmpProvided')"></td>
            </tr>
            <tr>
              <td>Un skilled/ Semi skilled</td>
              <td><input type="number" class="additionalEmp" oninput="calculateTotal('additionalEmp', 'totalAddEmpProvided')">
            <tr>
              <td>TOTAL:</td>
              <td><input readonly id="totalAddEmpProvided" name="AddEmpInCaseExp"></td>
            </tr>
          </tbody>
        </table>

        <div class="mt-5 declaration">
          <strong>18. Declaration by the Enterprise:</strong>
          <p class="mt-2">I/We hereby certify that the particulars given above for the purpose of sanction of Investment Promotion Subsidy from the Government of Karnataka are to the best of my/our knowledge and belief, are true and correct.</p>
          <p>Place: <input name="declarationPlace" /> </P>
          <p>Date: <input type="date" name="declarationDate" /> </p>
        </div>

        <div class="mt-5 certificate">
          <strong>19. Certificate by the Assistant Director/Deputy Director/Joint Director of District Industries Centre.</strong>
          <p class="mt-3 mb-1">I hereby certify that the particulars given by the applicant were verified by me with reference to documents furnished by the applicant and found to be true and correct.</P>
          <p class="mb-1">I further certify that the proprietor/all partners/all directors belong to General category/SC/ST/Women/Women (SC/ST)/ Minority/Backward class(Category 1/2A)/Physically Challenged/Ex-servicemen.</p>
          <p class="mb-1">
            I further certify that the total investment in fixed assets in new enterprises/in expansion, diversification, modernization of the existing enterprise could be considered for promotion subsidy is Rs. <input type="number" /> and is
            eligible for 10%/15%/20%/25%/30%/35% investment Promotion Subsidy of Rs. <input type="number" />
          </p>
          <p>A sum of Rs. <input type="number" /> being the investment made on items on which subsidy, is not admissible as per details shown in the Annexure-5 statements are disallowed.</p>
          <p>
            The declaration in Annexure-8 regarding employment of local persons has been verified and certified that the enterprise has provided minimum 70% employment to Kannadigas on an overall basis (including 100% employment to local people
            in Group D employees).
          </p>
          <p>Place: <input /> </P>
          <p>Date: <input type="date" /> </p>
          <div class="text-right sign">Signature & Seal of the Member <br/>Secretary, of DLC /Joint Director DIC.</div>
        </div>

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
