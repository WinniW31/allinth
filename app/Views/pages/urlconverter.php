<div class="container">
  <h2>URL Converter</h2>
  <?php if($error_message != ""):?>
    <div class="error bg-danger text-white"><?php echo $error_message;?></div>
  <?php endif;?>
  <div class="row">
    <div class="col">
      <form class="mb-3" action="<?php echo base_url('urlconverter');?>" method="post">
        <input type="hidden" value="1" name="convertType" />
        <div class="mb-3">
          <label for="inputURL" class="form-label">Text:</label>
          <input type="text" class="form-control" id="inputURL" name="inputURL" placeholder="all.in.th" value="<?php echo $inputURL;?>">
        </div>
         <button type="submit" class="btn btn-primary">Convert to Punycode</button>
      </form>
    </div>
    <div class="col">
      <form class="mb-3" action="<?php echo base_url('urlconverter');?>" method="post">
        <input type="hidden" value="2" name="convertType" />
        <div class="mb-3">
          <label for="convertURL" class="form-label">Punycode:</label>
          <input type="text" class="form-control" id="convertURL" name="convertURL" value="<?php echo $convertURL;?>">
        </div>
         <button type="submit" class="btn btn-primary">Convert to Text</button>
      </form>
    </div>
  </div>
</div>
