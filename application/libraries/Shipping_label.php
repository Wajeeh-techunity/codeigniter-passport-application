<?php
use FedEx\ShipService;
use FedEx\ShipService\Request;
use FedEx\ShipService\ComplexType;
use FedEx\ShipService\SimpleType;

class Shipping_label {
	protected $senderConfig;

	public function __construct() {
		// Initialize sender configuration
		$this->senderConfig = array(
			'name' => 'H Ray Priest',
			'company' => 'RJR Passports',
			'phone' => '123-456-7890',
			'address' => '5301 Alpha Road Suite 80-13',
			'city' => 'DALLAS',
			'state' => 'TX',
			'postalCode' => '75240',
			'countryCode' => 'US',
			'email_address' => 'ray@rjrpv.com'
		);
	}

	protected function selectServiceType($rateType) {
		// Service type selection logic
		switch ($rateType) {
			case 'FIRST_OVERNIGHT':
				return SimpleType\ServiceType::_FIRST_OVERNIGHT;
			case 'PRIORITY_OVERNIGHT':
				return SimpleType\ServiceType::_PRIORITY_OVERNIGHT;
			case 'STANDARD_OVERNIGHT':
				return SimpleType\ServiceType::_STANDARD_OVERNIGHT;
			case 'FEDEX_GROUND':
				return SimpleType\ServiceType::_FEDEX_GROUND;
			case 'FEDEX_2_DAY_AM':
				return SimpleType\ServiceType::_FEDEX_2_DAY_AM;
			case 'FEDEX_2_DAY':
				return SimpleType\ServiceType::_FEDEX_2_DAY;
			case 'FEDEX_EXPRESS_SAVER':
				return SimpleType\ServiceType::_FEDEX_EXPRESS_SAVER;
			default:
				return SimpleType\ServiceType::_FEDEX_GROUND;
		}
	}

	protected function createFedExRequest($shipperParty, $recipientParty, $selectedServiceType, $payorParty) {
		// Create FedEx API authentication credentials, client details, and version
		$userCredential = new ComplexType\WebAuthenticationCredential();
		$userCredential->setKey('fdb8xgLWPCo6zPWO')->setPassword('REgmsp6Tfpc8MF1TpvcZaYtJw');

		$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
		$webAuthenticationDetail->setUserCredential($userCredential);

		$clientDetail = new ComplexType\ClientDetail();
		$clientDetail->setAccountNumber('179030616')->setMeterNumber('108956126');

		$version = new ComplexType\VersionId();
		$version->setMajor(23)->setIntermediate(0)->setMinor(0)->setServiceId('ship');

		// Create label specification
		$labelSpecification = new ComplexType\LabelSpecification();
		$labelSpecification->setLabelStockType(SimpleType\LabelStockType::_PAPER_7X4POINT75)
			->setImageType(SimpleType\ShippingDocumentImageType::_PDF)
			->setLabelFormatType(SimpleType\LabelFormatType::_COMMON2D);

		// Create package details
		$packageLineItem = new ComplexType\RequestedPackageLineItem();
		$packageLineItem->setSequenceNumber(1)->setItemDescription('Passport')
			->setDimensions(new ComplexType\Dimensions(array(
				'Width' => 10, 'Height' => 10, 'Length' => 25, 'Units' => SimpleType\LinearUnits::_IN)))
			->setWeight(new ComplexType\Weight(array(
				'Value' => 2, 'Units' => SimpleType\WeightUnits::_LB)));

		// Create shipment request
		$requestedShipment = new ComplexType\RequestedShipment();
		$requestedShipment->setShipTimestamp(date('c'))->setDropoffType(SimpleType\DropoffType::_REGULAR_PICKUP)
			->setServiceType($selectedServiceType)->setPackagingType(SimpleType\PackagingType::_YOUR_PACKAGING)
			->setShipper($shipperParty)->setRecipient($recipientParty)->setLabelSpecification($labelSpecification)
			->setRateRequestTypes([SimpleType\RateRequestType::_PREFERRED])
			->setPackageCount(1)->setRequestedPackageLineItems([$packageLineItem]);

		// Create shipping charges payment
		$shippingChargesPayor = new ComplexType\Payor();
		$shippingChargesPayor->setResponsibleParty($payorParty);

		$shippingChargesPayment = new ComplexType\Payment();
		$shippingChargesPayment->setPaymentType(SimpleType\PaymentType::_SENDER)
			->setPayor($shippingChargesPayor);

		$requestedShipment->setShippingChargesPayment($shippingChargesPayment);

		// Create process shipment request
		$processShipmentRequest = new ComplexType\ProcessShipmentRequest();
		$processShipmentRequest->setWebAuthenticationDetail($webAuthenticationDetail)
			->setClientDetail($clientDetail)->setVersion($version)
			->setRequestedShipment($requestedShipment);

		// Send the request to FedEx API and receive the response
		$shipService = new \FedEx\ShipService\Request();
		$shipService->getSoapClient()->__setLocation(Request::PRODUCTION_URL);
		$result = $shipService->getProcessShipmentReply($processShipmentRequest);

		// Check if the response is valid and contains completed shipment details
		if ($result && isset($result->CompletedShipmentDetail)) {
			$completedShipmentDetail = $result->CompletedShipmentDetail;

			if (isset($completedShipmentDetail->CompletedPackageDetails[0]) &&
				isset($completedShipmentDetail->CompletedPackageDetails[0]->Label) &&
				isset($completedShipmentDetail->CompletedPackageDetails[0]->Label->Parts[0]) &&
				isset($completedShipmentDetail->CompletedPackageDetails[0]->Label->Parts[0]->Image)) {

				$trackingNumber = $completedShipmentDetail->CompletedPackageDetails[0]->TrackingIds[0]->TrackingNumber;
				$imageData = $completedShipmentDetail->CompletedPackageDetails[0]->Label->Parts[0]->Image;

				// Generate a unique filename for the PDF
				$random_number = rand(100000, 999999);
				$timestamp = round(microtime(true) * 1000);
				$hash = md5($random_number . $timestamp);
				$unique_url = $hash;
				$filename = $unique_url;
				$pdfFolder = FCPATH . '/pdf/';
				$pdfFilePath = $pdfFolder . $filename . '_shipping_label.pdf';
				$mainfile = basename($pdfFilePath);
				// Ensure the PDF folder exists, if not, create it
				if (!is_dir($pdfFolder)) {
					mkdir($pdfFolder, 0777, true);
				}

				// Attempt to save the label image data into a PDF file
				$pdfFile = fopen($pdfFilePath, 'wb');
				fwrite($pdfFile, $imageData);
				fclose($pdfFile);

				// Check if the PDF file was successfully created
				if (file_exists($pdfFilePath)) {
					return array('trackingNumber' => $trackingNumber, 'pdfFilePath' => $pdfFilePath ,'filename'=> $mainfile);
				} else {
					return false;
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function generateLabelFromOriginToRecipient($origin, $recipient, $selectedServiceType) {
		// Create shipper (origin) address
		$shipperAddress = new ComplexType\Address();
		$shipperAddress->setStreetLines($this->senderConfig['address'])->setCity($this->senderConfig['city'])
			->setStateOrProvinceCode($this->senderConfig['state'])->setPostalCode($this->senderConfig['postalCode'])->setCountryCode('US');

		$shipperContact = new ComplexType\Contact();
		$shipperContact->setCompanyName($this->senderConfig['company'])->setEMailAddress($this->senderConfig['email_address'])
			->setPersonName($this->senderConfig['name'])->setPhoneNumber($this->senderConfig['phone']);

		$shipperParty = new ComplexType\Party();
		$shipperParty->setAccountNumber('179030616')->setAddress($shipperAddress)->setContact($shipperContact);

		// Create recipient (destination) address
		$recipientAddress = new ComplexType\Address();
		$recipientAddress->setStreetLines($recipient['address'])->setCity($recipient['city'])
			->setStateOrProvinceCode($recipient['state'])->setPostalCode($recipient['zipcode'])->setCountryCode('US');

		$recipientContact = new ComplexType\Contact();
		$recipientContact->setPersonName($recipient['person_name'])->setPhoneNumber($recipient['contact_number']);

		$recipientParty = new ComplexType\Party();
		$recipientParty->setAddress($recipientAddress)->setContact($recipientContact);

		// Create shipping charges payment
		$payorParty = new ComplexType\Party();
		$payorParty->setAccountNumber('179030616')->setAddress($shipperAddress)->setContact($shipperContact);

		return $this->createFedExRequest($shipperParty, $recipientParty, $selectedServiceType, $payorParty);
	}

	public function generateLabelFromRecipientToOrigin($recipient, $origin, $selectedServiceType) {
		// Create recipient (origin) address
		$recipientAddress = new ComplexType\Address();
		$recipientAddress->setStreetLines($recipient['address'])->setCity($recipient['city'])
			->setStateOrProvinceCode($recipient['state'])->setPostalCode($recipient['zipcode'])->setCountryCode('US');

		$recipientContact = new ComplexType\Contact();
		$recipientContact->setPersonName($recipient['person_name'])->setPhoneNumber($recipient['contact_number']);

		$recipientParty = new ComplexType\Party();
		$recipientParty->setAddress($recipientAddress)->setContact($recipientContact);

		// Create shipper (destination) address
		$shipperAddress = new ComplexType\Address();
		$shipperAddress->setStreetLines($this->senderConfig['address'])->setCity($this->senderConfig['city'])
			->setStateOrProvinceCode($this->senderConfig['state'])->setPostalCode($this->senderConfig['postalCode'])->setCountryCode('US');

		$shipperContact = new ComplexType\Contact();
		$shipperContact->setCompanyName($this->senderConfig['company'])->setEMailAddress($this->senderConfig['email_address'])
			->setPersonName($this->senderConfig['name'])->setPhoneNumber($this->senderConfig['phone']);

		$shipperParty = new ComplexType\Party();
		$shipperParty->setAccountNumber('179030616')->setAddress($shipperAddress)->setContact($shipperContact);

		// Create shipping charges payment
		$payorParty = new ComplexType\Party();
		$payorParty->setAccountNumber('179030616')->setAddress($shipperAddress)->setContact($shipperContact);

		return $this->createFedExRequest($recipientParty, $shipperParty, $selectedServiceType, $payorParty);
	}
}
