<?php $paperWidth = "290px"; ?>
<div id="receiptContainer">
<div class="ticket" style="margin: 5px 7px;width: <?php echo $paperWidth;?>;">
  <div style="margin: auto; width: <?php echo $paperWidth;?>; text-align: center;">
    <span><strong><?php echo $tpl['location_arr'][0]['name'];?></strong></span><br/>
    <span style="text-align: center; font-size:15px"><?php echo $tpl['location_arr'][0]['address'];?></span><br/>
    <span style="font-size:15px">TEL : <?php echo WEB_CONTACT_NO; ?></span><br/>
    <span style="font-size:15px">OrderID : <?php echo $tpl['arr']['order_id']; ?></span>
    <span style="margin-top: 0px;margin-bottom: 0px; font-size:14px">&nbsp; <?php echo date('d-m-Y H:i:s', time()); ?></span><br/>
    <span><strong>Order No: <?php echo $tpl['arr']['order_count_of_the_day'];?></strong></span>
  </div>
  <table class="table table-borderless" style="width: <?php echo $paperWidth;?>;">
    <thead>
      <tr>
        <td colspan="2"><hr/></td>
      </tr>
      <tr>
        <td class="kitchen" width="60%">Name</th>
        <td class="kitchen headerTD" width="40%">Amount</th>
      </tr>
      <tr>
        <td colspan="2"><hr/></td>
      </tr>
    </thead>
    <tbody>   
       <?php include PJ_VIEWS_PATH . 'pjAdminPosOrders/elements/print_receipt_items.php'; ?>
      <tr>
       <td colspan="2"><hr/></td>
     </tr>
      <tr>
       <td><strong>Total</strong></td>
       <td class="itemTD"><strong><?php echo pjCurrency::formatPrice($tpl['arr']['total']); ?></strong></td>
      </tr>
      <?php if ($tpl['arr']['payment_method'] == 'split') { ?>
      <tr>
        <td><strong>Cash Tendered</strong></td>
        <td class="itemTD"><strong>
          <?php echo pjCurrency::formatPrice($tpl['arr']['cash_amount']); ?>
          </strong>
        </td>
      </tr>
      <tr>
        <td><strong>Card </strong></td>
        <td class="itemTD"><strong>
          <?php echo pjCurrency::formatPrice(($tpl['arr']['total'] - $tpl['arr']['cash_amount'])); ?>
          </strong>
        </td>
      </tr>
      <tr>
        <td colspan="2"><hr/></td>
      </tr>
      <tr>
        <td><strong>Balance</strong></td>
        <td class="itemTD"><strong><?php echo pjCurrency::formatPrice($tpl['arr']['customer_paid'] - $tpl['arr']['total']); ?></strong></td>
      </tr>
      <?php // } elseif ($tpl['arr']['payment_method'] != 'bank') { ?>
      <?php } elseif (!(in_array(strtolower($tpl['arr']['payment_method']), array('bank', 'card')))) { ?>
      <tr>
        <td><strong>Cash Tendered</strong></td>
        <td class="itemTD"><strong>
          <?php echo pjCurrency::formatPrice($tpl['arr']['customer_paid']); ?>
          </strong>
        </td>
      </tr>
      <tr>
        <td colspan="2"><hr/></td>
      </tr>
      <tr>
        <td><strong>Balance</strong></td>
        <td class="itemTD"><strong><?php echo pjCurrency::formatPrice($tpl['arr']['customer_paid'] - $tpl['arr']['total']); ?></strong></td>
      </tr>
      <?php } else { ?>
      <tr>
        <td colspan="2"><strong>
          <?php echo "Card Payment"; ?>
          </strong>
        </td>
      </tr>
      <?php } ?>
      <tr>
        <td colspan="2"><hr/></td>
      </tr>
      <tr>
        <td colspan="2" style="font-size:14px"></siv><img height="150" width="150" src='<?php echo APP_URL."/app/web/upload/qrcode/QrCodeScanImage.png" ?>'><br/>QR Menu<br/><br/>Click & Collect<br/><br/>Thank you for ordering from<br/> <?php echo $tpl['location_arr'][0]['name'];?>!</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<div id="noPrint">
  <div class="ticket">
    <div>
      <span>&nbsp;</span><br/><br/>
    </div>
  </div>
</div>
<br/><br/>
<div class="hidden-print" style="margin: 5px 10px; width: 500px;">
  <button class="btn btn-primary printbutton" onClick="printDivLocal('receiptContainer')">Receipt Print</button>
  <button class="btn btn-primary printbutton" id="btn-openDrawer">Topen</button>
  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminPosOrders&amp;action=<?php echo $tpl['action']; ?>" class="btn btn-primary nextbutton"><i class="fa fa-plus"></i> <?php echo "Close" ?></a>
</div>
<script type="text/javascript">
  var autoRPrint = '<?php echo AUTO_RECEIPT_PRINT; ?>';
  function printDivLocal(divName) {
    $("#btn-openDrawer").trigger("click");
    //  var printContents = document.getElementById(divName).innerHTML;
    //  var originalContents = document.body.innerHTML;
    //  document.body.innerHTML = printContents;
    //  console.log(printContents);
     window.print();
    //  document.body.innerHTML = originalContents;
  }

  $(document).ready(function(){
    $("#btn-openDrawer").click(function(){
       $.ajax({
        type: "POST",
        async: false,
        url: "index.php?controller=pjAdminPosOrders&action=pjActionOpenDrawer",
        success: function (msg) {
          console.log(msg);
        },
      });
    });
    if (autoRPrint == 1) {
      printDivLocal();
    }
  });
 
</script>
