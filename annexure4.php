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
    <title>Annexure 4</title>
  </head>
  <body>
    <div class="container">
      <h4 class="annex-number text-right">Annexure - 4</h4>
      <h4 class="annex-head" >APPLICATION FOR SANCTION OF INVESTMENT PROMOTION SUBSIDY UNDER 2014-19 POLICY</h4>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th>1.</th>
            <td>Name of the Enterprise</td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <th>2.</th>
            <td>Address of the Enterprise<br/>
                a. Factory/works<br/>
                b. Office address
            </td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <th>3.</th>
            <td>Taluk and Zone as per 2014-19<br/>
                Industrial Policy
            </td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <th>4(a).</th>
            <td>Registration No. and date<br/>
                (As mentioned in EM/IEM/IL)
            </td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <th>4(b).</th>
            <td>ESI/EPF Registration No. and date.</td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <th>4(c).</th>
            <td>VAT Registration No. and date</td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <th>4(d).</th>
            <td>Electric Power Connection RR No.<br/>
                (Power, Line).
            </td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <th>4(e).</th>
            <td>Electric Power Connection RR No.<br/>
                (Lighting).
            </td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <th>5.</th>
            <td>Size of the enterprise (mention whether)<br/>
                Micro/Small/Medium Enterprise
            </td>
            <td>
              <select>
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
              <select>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </td>
          </tr>
          <tr>
            <th rowspan="3">7.</th>
            <td rowspan="3">Products Manufactured</td>
            <td>i)<textarea></textarea></td>
          </tr>
          <tr>
            <td>ii)<textarea></textarea></td>
          </tr>
          <tr>
            <td>iii)<textarea></textarea></td>
          </tr>
          <tr>
            <th>8.</th>
            <td>Constitution of the industry(mention whether<br/>
                Proprietary/Partnership/Private /Public<br/>
                Limited Company) or any other<br/>
                legal entity
            </td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <th>9.</th>
            <td>Category to which the entrepreneur<br/>
                belong (mention whether general;<br/>
                SC/ST; women; women SC/ST; Minority;<br/>
                Backward Class [Category 1/2A];<br/>
                physically challenged; ex-servicemen)
            </td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <th>10.</th>
            <td>Is it new industry or existing industry<br/>
                undertaken expansion/diversification/<br/>
                modernization.
            </td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <th>11.</th>
            <td>Date of commencement of commercial<br/>
                production (As per first sale invoice)
            </td>
            <td><textarea></textarea></td>
          </tr>

          <tr>
            <th rowspan="7">12.</th>
            <td>Project Cost: (Amount in Rs)</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Land:</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Building:</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Plant and Machinery:</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Others:</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Working Capital Margin:</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>TOTAL (auto calculated)</td>
            <td><span id="projCostTot"></span></td>
          </tr>

          <tr>
            <th rowspan="5">13.</th>
            <td>Name of the term loan lending<br/>
                financial institution
            </td>
            <td><textarea></textarea></td>
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
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Land:</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Building:</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Plant and Machinery:</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Transportation:</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Electrification:</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Erection and Installation<br/>
                charges of machineries:
            </td>
            <td><input type="number" />
          <tr>
            <td>TOTAL (auto calculated)</td>
            <td><span id="actuInvstTot"></span></td>
          </tr>

          <tr>
            <th rowspan="5">15.</th>
            <td>Means of finance:<br/>
                (Amount in Rs.)
            </td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Own/Share capital:</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Term loans:</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>Others (please specify):</td>
            <td><input type="number"></td>
          </tr>
          <tr>
            <td>TOTAL:</td>
            <td><span id="mnsOfFincTot"></span></td>
          </tr>

          <tr>
            <th rowspan="6">16.</th>
            <td>Employment provided in<br/>
                the new enterprises
            </td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <td>Executive/Top level:</td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <td>Managerial:</td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <td>Supervisory/Skilled:</td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <td>Un skilled/ Semi skilled</td>
            <td><textarea></textarea>
          <tr>
            <td>TOTAL:</td>
            <td><input type="number"></td>
          </tr>

          <tr>
            <th rowspan="6">17.</th>
            <td>Additional employment in case<br/>
                of expansion/modernization/diverse
            </td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <td>Executive/Top level:</td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <td>Managerial:</td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <td>Supervisory/Skilled:</td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <td>Un skilled/ Semi skilled</td>
            <td><textarea></textarea>
          <tr>
            <td>TOTAL:</td>
            <td><input type="number"></td>
          </tr>
        </tbody>
      </table>

      <div class="mt-5 declaration">
        <strong>18. Declaration by the Enterprise:</strong>
        <p class="mt-2">I/We hereby certify that the particulars given above for the purpose of sanction of Investment Promotion Subsidy from the Government of Karnataka are to the best of my/our knowledge and belief, are true and correct.</p>
        <p>Place: <input /> </P>
        <p>Date: <input type="date" /> </p>
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
    </div>
  </body>
</html>
