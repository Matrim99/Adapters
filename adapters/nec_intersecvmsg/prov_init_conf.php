<?php

// -------------------------------------------------------------------------------------
// UPDATE CONFIGURATION
// -------------------------------------------------------------------------------------
function prov_init_conf($sms_csp, $sdid, $sms_sd_info, &$err)
{
  $conf = new nec_intersecvmsg_configuration($sdid, true);

  return $conf->provisioning();
}

?>