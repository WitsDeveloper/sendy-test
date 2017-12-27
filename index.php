<?php
//Variables
//$sendy_api_url = "https://api.sendyit.com/v1/";
$sendy_api_url = "https://apitest.sendyit.com/v1/";
$google_maps_api_key = "AIzaSyBAgQ-vCy1106_l1iZFudZeYQGx2ghCS3g";

//Form data
$billing_first_name = isset($_POST['billing_first_name'])?$_POST['billing_first_name']:"";
$billing_last_name = isset($_POST['billing_last_name'])?$_POST['billing_last_name']:"";
$billing_company = isset($_POST['billing_company'])?$_POST['billing_company']:"";
$billing_email = isset($_POST['billing_email'])?$_POST['billing_email']:"";
$billing_phone = isset($_POST['billing_phone'])?$_POST['billing_phone']:"";
$billing_country = isset($_POST['billing_country'])?$_POST['billing_country']:"";
$billing_address_1 = isset($_POST['billing_address_1'])?$_POST['billing_address_1']:"";
$billing_address_2 = isset($_POST['billing_address_2'])?$_POST['billing_address_2']:"";
$billing_city = isset($_POST['billing_city'])?$_POST['billing_city']:"";
$billing_state = isset($_POST['billing_state'])?$_POST['billing_state']:"";
$billing_postcode = isset($_POST['billing_postcode'])?$_POST['billing_postcode']:"";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SENDY TEST</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <form class="" method="post" action="">
      <div class="col-md-6">
        <div class="woocommerce-billing-fields">
          <h3>Billing Details</h3>
          <div class="row">
            <p class="form-group col-sm-6 validate-required woocommerce-validated" id="billing_first_name_field">
              <label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label>
              <input type="text" class="input-text form-control" name="billing_first_name" id="billing_first_name" placeholder="" autocomplete="given-name" value="<?php echo $billing_first_name; ?>" required>
            </p>
            <p class="form-group col-sm-6 validate-required" id="billing_last_name_field">
              <label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label>
              <input type="text" class="input-text form-control" name="billing_last_name" id="billing_last_name" placeholder="" autocomplete="family-name" value="<?php echo $billing_last_name; ?>" required>
            </p>
          </div>
          <div class="clear"></div>
          <p class="form-group form-row-wide" id="billing_company_field">
            <label for="billing_company" class="">Company Name</label>
            <input type="text" class="input-text form-control" name="billing_company" id="billing_company" placeholder="" autocomplete="organization" value="<?php echo $billing_company; ?>">
          </p>
          <div class="row">
            <p class="form-group col-sm-6 validate-required validate-email" id="billing_email_field">
              <label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr></label>
              <input type="email" class="input-text form-control" name="billing_email" id="billing_email" placeholder="" autocomplete="email" value="<?php echo $billing_email; ?>" required>
            </p>
            <p class="form-group col-sm-6 validate-required validate-phone" id="billing_phone_field">
              <label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
              <input type="tel" class="input-text form-control" name="billing_phone" id="billing_phone" placeholder="" autocomplete="tel" value="<?php echo $billing_phone; ?>" required>
            </p>
          </div>
          <div class="clear"></div>
          <p class="form-group form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field">
            <label for="billing_country" class="">Country <abbr class="required" title="required">*</abbr></label>
            <select name="billing_country" id="billing_country" autocomplete="country" class="country_to_state country_select form-control" required>
              <option value="">Select a country…</option>              
              <option value="KE" selected="selected">Kenya</option>              
              <option value="TZ">Tanzania</option>              
              <option value="UG">Uganda</option>              
            </select>
          </p>
          <p class="form-group form-row-wide address-field validate-required woocommerce-validated" id="billing_address_1_field">
            <label for="billing_address_1" class="">Address 1 <abbr class="required" title="required">*</abbr></label>
            <input type="text" class="input-text form-control" name="billing_address_1" id="billing_address_1" placeholder="Street address" autocomplete="address-line1" value="<?php echo $billing_address_1; ?>" data-geo="formatted_address" required>
          </p>
          <p class="form-group form-row-wide address-field" id="billing_address_2_field">
            <label for="billing_address_2" class="">Address 2</label>
            <input type="text" class="input-text form-control" name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" autocomplete="address-line2" value="<?php echo $billing_address_2; ?>" data-geo="name">
          </p>
          <p class="form-group form-row-wide address-field validate-required" id="billing_city_field">
            <label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr></label>
            <input type="text" class="input-text form-control" name="billing_city" id="billing_city" placeholder="" autocomplete="address-level2" value="<?php echo $billing_city; ?>" data-geo="locality" required>
          </p>
          <div class="row">
            <p class="form-group col-sm-6 address-field validate-required validate-state" id="billing_state_field">
              <label for="billing_state" class="">State / County <abbr class="required" title="required">*</abbr></label>
              <input type="text" class="input-text form-control" placeholder="" autocomplete="address-level1" name="billing_state" id="billing_state" value="<?php echo $billing_state; ?>" data-geo="administrative_area_level_1" required>
            </p>
            <p class="form-group col-sm-6 address-field validate-postcode" id="billing_postcode_field">
              <label for="billing_postcode" class="">Postcode / Zip</label>
              <input type="text" class="input-text form-control" name="billing_postcode" id="billing_postcode" placeholder="" autocomplete="postal-code" value="<?php echo $billing_postcode; ?>" data-geo="postal_code">
            </p>
          </div>
          <div class="clear"></div>
          <p class="form-group">
            <input type="submit" class="btn btn-default" name="Submit" value="Submit" id="find">
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Map View</h3>
        <div class="map_canvas" id="map_canvas" style="width: 555px;height: 400px;margin: 20px 0 10px 0;"></div>
        <div class="clear"></div>
        <pre id="logger">Log:</pre>
      </div>
    </form>
  </div>
</div>
</body>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_maps_api_key; ?>&libraries=places"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="geocomplete/jquery.geocomplete.js"></script>
<script src="geocomplete/logger.js"></script>
<script>
jQuery(document).ready(function ($) {
	
	var billing_country = $("#billing_country").val();
	var country = (typeof billing_country === 'undefined') ? toLowerCase(billing_country) : 'ke';
	$.log(country);
	
	var center = new google.maps.LatLng(-1.2920659,36.82194619999996);
	
	$("#billing_address_1").geocomplete({
	  country: country,
	  map: ".map_canvas",
	  details: "form",
	  detailsAttribute: "data-geo",
	  types: ["geocode", "establishment"],
	  mapOptions: {
		zoom: 14,
		center: center,
		scrollwheel: false,
		mapTypeId: "roadmap"
	  },
	}).bind("geocode:error", function(event, error){
		$.log(error);
	});

	$("#billing_address_1").on('change', function(e){
		//$(this).trigger("geocode");
	});
        
});
</script>
</html>
<?php
function sendy_wc_curl_exec( $url, $command, $data ) {
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	
	curl_setopt($ch, CURLOPT_POST, TRUE);
	# Setup request to send json via POST.
	$payload = json_encode(array('command' => $command, 'data' => $data));
	
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	
	# Send request.
	$result = curl_exec($ch);
	curl_close($ch);
	
	return $result;
}

function google_maps_api_curl_exec( $url ) {
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_HEADER, FALSE);

	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	
	# Send request.
	$result = curl_exec($ch);
	curl_close($ch);
	
	return $result;
}

if( isset($_POST['Submit']) ){
	//$fullAddress = $billing_address_1.",".$billing_city.",".$billing_state;
	$fullAddress = $billing_address_1;
	$prepAddr = str_replace(" ", "+", $fullAddress);
	$prepURL = "https://maps.google.com/maps/api/geocode/json?address=$prepAddr&components=country:$billing_country&key=$google_maps_api_key";
	
	// Convert an address to geocode Latitude/Longitude positioning with Google Maps.
	// Example http://maps.google.com/maps/api/geocode/json?address=Kindaruma+Rd+Nairobi+Kenya&sensor=false
	//$geocode = file_get_contents($prepURL);
	$geocode = google_maps_api_curl_exec( $prepURL );
	$georesults = json_decode($geocode, true);
	
	echo "<pre>";
	echo "<h1>GOOGLE MAP API RESPONSE</h1>";
	//echo "URL:".$prepURL."<br/>";
	print_r($georesults);	
	
	$geo_lat = $georesults["results"][0]["geometry"]["location"]["lat"];
	$geo_long = $georesults["results"][0]["geometry"]["location"]["lng"];
	$geo_addr = $georesults["results"][0]["formatted_address"];
	
	if( !empty($sendy_api_url) && !empty($geo_lat) && !empty($geo_long) ){
				
		$api_key = "WSqQYBZSn8R99QGtE69Z";
		$api_username = "cantinadifrascatiltd";
		$command = 'request';
		$from_name = "Test Shop";
		$from_lat = -1.3370364;
		$from_long = 36.7081472;
		$from_address = "Marula Ln, Nairobi, Kenya";
		$from_description = "To be picked from $from_address ($from_lat,$from_long)";
		$to_name = 'Customer';
		$to_lat = floatval($geo_lat);
		$to_long = floatval($geo_long);
		$to_address = $geo_addr;
		$to_description = "To be delivered to $to_address ($to_lat,$to_long).";
		$recepient_name = "Test User";
		$recepient_phone = "0711222333";
		$recepient_email = "test@domain.com";
		$pick_up_date = date('Y-m-d', strtotime("+1 week"));
		$status = false;
		$pay_method = 1;
		$amount = 0;
		$return = true;
		$note = $from_description." ".$to_description;
		$note_status = true;
		$request_type = "quote";
								
		$data = array(
			"api_key" => "".$api_key."",
			"api_username" => "".$api_username."",
			"from" => array(
				'from_name' => "".$from_name."",
				'from_lat' => $from_lat,
				'from_long' => $from_long,
				'from_description' => "".$from_description."",
			),
			"to" => array(
				'to_name' => "".$to_name."",
				'to_lat' => $to_lat,
				'to_long' => $to_long,
				'to_description' => "".$to_description."",
			),
			"recepient" => array(
				'recepient_name' => "".$recepient_name."",
				'recepient_phone' => "".$recepient_phone."",
				'recepient_email' => "".$recepient_email."",
			),
			"delivery_details" => array(
				"pick_up_date" => "".$pick_up_date."",
				"collect_payment" => array(
					"status" => $status,
					"pay_method" => $pay_method,
					"amount" => $amount,
				),
				"return" => $return,
				"note" => "".$note."",
				"note_status" => $note_status,
				"request_type" => "".$request_type.""
			),
		);
		
		echo "<h1>DATA SENT TO SENDY API</h1>";
		echo "URL:".$sendy_api_url."<br/>";
		print_r($data);
		
		# Execute the curl command
		$result = sendy_wc_curl_exec( $sendy_api_url, $command, $data );
		
		# Print response
		$result = json_decode($result, true);
		
		echo "<br/><h1>DATA RECEIVED FROM SENDY API</h1>";
		print_r($result);
	
	}else{
		echo "<h1>ERROR</h1>";
		echo "Check ";
	}
	echo "</pre>";
}
?>