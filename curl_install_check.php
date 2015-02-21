<?php
function _is_curl_installed() {
    if  (in_array  ('curl', get_loaded_extensions())) {
        return true;
    }
    else {
        return false;
    }
}


// Ouput text to user based on test
if (_is_curl_installed()) {
  echo "cURL is <span style=\"color:blue\">installed</span> on this server";
} else {
  echo "cURL is NOT <span style=\"color:red\">installed</span> on this server";
}






/*date=2014-11-13&time=15:08:38.000000&c2c_uuid=d4f986be-6b18-11e4-944e-22000a968650&agent_list=2012345678&agent_status=Connected&customer_number=+919996662222&customer_status=Connected&connected_to=2012345678&customer_callduration=0:08:13&agent_callduration=0:08:21&total_billed_pulse=34&recording_url=http://www.smartivr.in/sounds/voicemail/download/38b95a9a-6385-43e5-bde9-9edfa3e83999_0_1&param1=None&param2=None&param3=None&param4=None&param5=None


9820544600*/
?>

