<?php
if (!function_exists('callAPI')) {
	/**
	 * Function to call a REST API using cURL
	 *
	 * @param string $method The HTTP method ('GET', 'POST', 'PUT', 'DELETE')
	 * @param string $url The URL of the API endpoint
	 * @param array|bool $data Data to be sent in the request, should be an array or false if no data
	 * @param array $headers Optional headers to include in the request
	 * @return array|mixed|null The decoded JSON response or null if the request fails
	 */
	function callAPI($method, $url, $data = false, $headers = [])
	{
		$curl = curl_init();

		switch (strtoupper($method)) {
			case "POST":
				curl_setopt($curl, CURLOPT_POST, 1);
				if ($data) {
					curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
				}
				break;
			case "PUT":
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
				if ($data) {
					curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
				}
				break;
			case "DELETE":
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
				if ($data) {
					$url = sprintf("%s?%s", $url, http_build_query($data));
				}
				break;
			default: // GET
				if ($data && is_array($data)) {
					$url = sprintf("%s?%s", $url, http_build_query($data));
				}
				break;
		}

		// Set the URL
		curl_setopt($curl, CURLOPT_URL, $url);
		// Return the response as a string instead of outputting it
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		// Set headers if provided
		curl_setopt($curl, CURLOPT_HTTPHEADER, array_merge([
			'Content-Type: application/json',
		], $headers));

		// Execute the request and get the response
		$result = curl_exec($curl);
		// Check for errors
		if (curl_errno($curl)) {
			// Handle the error
			curl_close($curl);
			return null;
		}

		// Close the cURL session
		curl_close($curl);

		// Decode the JSON response into an array and return it
		return json_decode($result, true);
	}
}
