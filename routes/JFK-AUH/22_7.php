<?php 
include('validate.php');
include('var.php');

$json = '{"header":{"message":"OK","code":200,"error":false,"bodyType":"Content"},"body":{"data":{"sessionId":"4EAFF48804A14EBE886F86B8212EA696","availabilityId":"493497260","locale":"en","marketCode":"ES","swirt":true,"switax":true,"swisdto":false,"adultPax":1,"childPax":0,"infantPax":0,"adultPaxResident":0,"childPaxResident":0,"infantPaxResident":0,"messageItemization":[],"serviceFee":0,"serviceFeeDiscount":0,"serviceFeeResidentDiscount":0,"totalAvailabilities":[{"recommendationId":1,"total":4368.48},{"recommendationId":2,"total":4439.48},{"recommendationId":3,"total":6223.58}],"journeys":[{"recommendationId":1,"identity":0,"direction":"I","cabinClass":"BUS","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":572.86,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"C","farebasisCode":"CYYRAE","promotionLabel":null,"flights":[{"number":"92","airportDeparture":{"code":"JFK","description":"New York (JFK)","resident":false,"type":"AIR","zone":"AME","image":"https://www.aireuropa.com/img_mob/airports/JFK.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"'.$depart.' 22:05","dateArrival":"'.$depart1.' 11:10","gmtDateDeparture":"'.$depart1.' 03:05","gmtDateArrival":"'.$depart1.' 10:10","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"4","terminalArrival":"1","cabinClass":{"code":"BUS","description":"Business"}},{"number":"2703","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"AUH","description":"Abu Dhabi","resident":false,"type":"AIR","zone":"AFR","image":"https://www.aireuropa.com/img_mob/airports/AUH.jpg"},"dateDeparture":"'.$depart1.' 14:00","dateArrival":"'.$depart1.' 23:40","gmtDateDeparture":"'.$depart1.' 13:00","gmtDateArrival":"'.$depart1.' 19:40","companyCode":"UX","operator":"ETIHAD AIRLINES","flote":{"code":"789","description":"789"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"4","terminalArrival":"3","cabinClass":{"code":"BUS","description":"Business"}}],"businessJourneys":[],"passengersAvailable":2,"fareFamily":{"code":"BUSFLEX","description":"FLEX"},"franchiseInformation":{"franchise":3,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 3 piece(s) of 23 kg"},"cabinInformation":{"number":2,"baggageWeight":{"amount":9.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 2 piece(s) of  9 kg"}},{"recommendationId":1,"identity":0,"direction":"V","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":226.62,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"L","farebasisCode":"LKYRAE","promotionLabel":null,"flights":[{"number":"2702","airportDeparture":{"code":"AUH","description":"Abu Dhabi","resident":false,"type":"AIR","zone":"AFR","image":"https://www.aireuropa.com/img_mob/airports/AUH.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"'.$return.' 07:30","dateArrival":"'.$return.' 12:30","gmtDateDeparture":"'.$return.' 03:30","gmtDateArrival":"'.$return.' 11:30","companyCode":"UX","operator":"ETIHAD AIRLINES","flote":{"code":"789","description":"789"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"3","terminalArrival":"4","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"91","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"JFK","description":"New York (JFK)","resident":false,"type":"AIR","zone":"AME","image":"https://www.aireuropa.com/img_mob/airports/JFK.jpg"},"dateDeparture":"'.$return.' 15:50","dateArrival":"'.$return.' 18:05","gmtDateDeparture":"'.$return.' 14:50","gmtDateArrival":"'.$return.' 23:05","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"1","terminalArrival":"4","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"ECONOMY","description":"STANDARD"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":2,"identity":0,"direction":"I","cabinClass":"BUS","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":572.86,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"C","farebasisCode":"CYYRAE","promotionLabel":null,"flights":[{"number":"92","airportDeparture":{"code":"JFK","description":"New York (JFK)","resident":false,"type":"AIR","zone":"AME","image":"https://www.aireuropa.com/img_mob/airports/JFK.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"'.$depart.' 22:05","dateArrival":"'.$depart1.' 11:10","gmtDateDeparture":"'.$depart1.' 03:05","gmtDateArrival":"'.$depart1.' 10:10","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"4","terminalArrival":"1","cabinClass":{"code":"BUS","description":"Business"}},{"number":"2703","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"AUH","description":"Abu Dhabi","resident":false,"type":"AIR","zone":"AFR","image":"https://www.aireuropa.com/img_mob/airports/AUH.jpg"},"dateDeparture":"'.$depart1.' 14:00","dateArrival":"'.$depart1.' 23:40","gmtDateDeparture":"'.$depart1.' 13:00","gmtDateArrival":"'.$depart1.' 19:40","companyCode":"UX","operator":"ETIHAD AIRLINES","flote":{"code":"789","description":"789"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"4","terminalArrival":"3","cabinClass":{"code":"BUS","description":"Business"}}],"businessJourneys":[],"passengersAvailable":2,"fareFamily":{"code":"BUSFLEX","description":"FLEX"},"franchiseInformation":{"franchise":3,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 3 piece(s) of 23 kg"},"cabinInformation":{"number":2,"baggageWeight":{"amount":9.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 2 piece(s) of  9 kg"}},{"recommendationId":2,"identity":0,"direction":"V","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":226.62,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"L","farebasisCode":"LKYR7H","promotionLabel":null,"flights":[{"number":"2702","airportDeparture":{"code":"AUH","description":"Abu Dhabi","resident":false,"type":"AIR","zone":"AFR","image":"https://www.aireuropa.com/img_mob/airports/AUH.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"'.$return.' 07:30","dateArrival":"'.$return.' 12:30","gmtDateDeparture":"'.$return.' 03:30","gmtDateArrival":"'.$return.' 11:30","companyCode":"UX","operator":"ETIHAD AIRLINES","flote":{"code":"789","description":"789"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"3","terminalArrival":"4","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"91","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"JFK","description":"New York (JFK)","resident":false,"type":"AIR","zone":"AME","image":"https://www.aireuropa.com/img_mob/airports/JFK.jpg"},"dateDeparture":"'.$return.' 15:50","dateArrival":"'.$return.' 18:05","gmtDateDeparture":"'.$return.' 14:50","gmtDateArrival":"'.$return.' 23:05","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"1","terminalArrival":"4","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":3,"identity":0,"direction":"I","cabinClass":"BUS","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":572.86,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"C","farebasisCode":"CYYRAE","promotionLabel":null,"flights":[{"number":"92","airportDeparture":{"code":"JFK","description":"New York (JFK)","resident":false,"type":"AIR","zone":"AME","image":"https://www.aireuropa.com/img_mob/airports/JFK.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"'.$depart.' 22:05","dateArrival":"'.$depart1.' 11:10","gmtDateDeparture":"'.$depart1.' 03:05","gmtDateArrival":"'.$depart1.' 10:10","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"4","terminalArrival":"1","cabinClass":{"code":"BUS","description":"Business"}},{"number":"2703","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"AUH","description":"Abu Dhabi","resident":false,"type":"AIR","zone":"AFR","image":"https://www.aireuropa.com/img_mob/airports/AUH.jpg"},"dateDeparture":"'.$depart1.' 14:00","dateArrival":"'.$depart1.' 23:40","gmtDateDeparture":"'.$depart1.' 13:00","gmtDateArrival":"'.$depart1.' 19:40","companyCode":"UX","operator":"ETIHAD AIRLINES","flote":{"code":"789","description":"789"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"4","terminalArrival":"3","cabinClass":{"code":"BUS","description":"Business"}}],"businessJourneys":[],"passengersAvailable":2,"fareFamily":{"code":"BUSFLEX","description":"FLEX"},"franchiseInformation":{"franchise":3,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 3 piece(s) of 23 kg"},"cabinInformation":{"number":2,"baggageWeight":{"amount":9.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 2 piece(s) of  9 kg"}},{"recommendationId":3,"identity":0,"direction":"V","cabinClass":"BUS","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":606.72,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"C","farebasisCode":"CYYRAE","promotionLabel":null,"flights":[{"number":"2702","airportDeparture":{"code":"AUH","description":"Abu Dhabi","resident":false,"type":"AIR","zone":"AFR","image":"https://www.aireuropa.com/img_mob/airports/AUH.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"'.$return.' 07:30","dateArrival":"'.$return.' 12:30","gmtDateDeparture":"'.$return.' 03:30","gmtDateArrival":"'.$return.' 11:30","companyCode":"UX","operator":"ETIHAD AIRLINES","flote":{"code":"789","description":"789"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"3","terminalArrival":"4","cabinClass":{"code":"BUS","description":"Business"}},{"number":"91","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"JFK","description":"New York (JFK)","resident":false,"type":"AIR","zone":"AME","image":"https://www.aireuropa.com/img_mob/airports/JFK.jpg"},"dateDeparture":"'.$return.' 15:50","dateArrival":"'.$return.' 18:05","gmtDateDeparture":"'.$return.' 14:50","gmtDateArrival":"'.$return.' 23:05","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"1","terminalArrival":"4","cabinClass":{"code":"BUS","description":"Business"}}],"businessJourneys":[],"passengersAvailable":2,"fareFamily":{"code":"BUSFLEX","description":"FLEX"},"franchiseInformation":{"franchise":3,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 3 piece(s) of 23 kg"},"cabinInformation":{"number":2,"baggageWeight":{"amount":9.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 2 piece(s) of  9 kg"}}],"calendarJourneys":[],"journeyConstraint":[],"blockType":"P","availabilityFactor":{"availabilityProviderType":"O","availabilityProviderReasonType":"U"},"showDiscounts":true,"discountLabel":"","swiservicefee":false,"availabilityZoneType":"LDI"}}}';

isJson($json);
echo $json;
?>