<?php

namespace Paljet;

use Paljet\Error as Errors;

/**
 * Class Client
 *
 * @package Paljet
 */
class Client {
	public function request($method, $path, $access, $data = NULL, $format = NULL) {
		try {
			$url = untrailingslashit( $access->url ) . $path;
			$options = [ 'timeout' => 120, 'auth' => [ $access->user, $access->pass ] ];
			$headers = [
				'Content-Type'	=> 'application/json',
				'Accept'		=> 'application/json',
				'EmpID'			=> $access->emp,
			];

			if($method == "GET") {

				if( ! is_null( $format ) ) {
					$tempData = $data;

					foreach( $tempData as $key => $value ) {
						if( ! isset( $format[ $key ] ) )
							continue;

						switch( $format[ $key ] ) {
							case '%d' : $data[ $key ] = intval( $value ); break;
							case '%f' : $data[ $key ] = floatval( $value ); break;
							case '%b' : $data[ $key ] = ! empty( $value ) ? 'true' : 'false'; break;
							default : $data[ $key ] = strval( $value ); break;
						}
					}
				}

				$url = ! empty( $data ) ? $url . '?' . http_build_query( $data ) : $url;
				$response = \Requests::get( $url, $headers, $options );
				
			} else if($method == "POST") {
				$response = \Requests::post( $url, $headers, json_encode( $data ), $options );
			} else if($method == "PATCH") {
				$response = \Requests::patch( $url, $headers, json_encode( $data ), $options );
			} else if($method == "DELETE") {
				$response = \Requests::delete( $url, $headers, $options );
			}

		} catch (\Exception $e) {
			throw new Errors\UnableToConnect();
		}
		if ($response->status_code >= 200 && $response->status_code <= 206) {
			return json_decode($response->body);
		}
		if ($response->status_code == 400) {
			throw new Errors\UnhandledError($response->body, $response->status_code);
		}
		if ($response->status_code == 401) {
			throw new Errors\AuthenticationError();
		}
		if ($response->status_code == 404) {
			throw new Errors\NotFound();
		}
		if ($response->status_code == 403) {
			throw new Errors\InvalidOptions();
		}
		if ($response->status_code == 405) {
			throw new Errors\MethodNotAllowed();
		}
		throw new Errors\UnhandledError($response->body, $response->status_code);
	}
}
