<?php 
include('validate.php');
include('var.php');

$json = '{"header":{"message":"OK","code":200,"error":false,"bodyType":"Content"},"body":{"data":{"sessionId":"43A45F15A52F4C6E8BCEB8F1B7E4C5E1","availabilityId":"493708629","locale":"en","marketCode":"ES","swirt":true,"switax":true,"swisdto":false,"adultPax":1,"childPax":0,"infantPax":0,"adultPaxResident":0,"childPaxResident":0,"infantPaxResident":0,"messageItemization":[],"serviceFee":0,"serviceFeeDiscount":0,"serviceFeeResidentDiscount":0,"totalAvailabilities":[{"recommendationId":19,"total":750.84},{"recommendationId":22,"total":768.84},{"recommendationId":24,"total":785.84},{"recommendationId":32,"total":803.84}],"journeys":[{"recommendationId":19,"identity":7,"direction":"I","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":20.56,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"B","farebasisCode":"BJYYEH","promotionLabel":null,"flights":[{"number":"9118","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"dateDeparture":"'.$depart.' 11:40","dateArrival":"'.$depart.' 13:35","gmtDateDeparture":"'.$depart.' 10:40","gmtDateArrival":"'.$depart.' 13:35","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"2","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"2139","airportDeparture":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"airportArrival":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"dateDeparture":"'.$depart.' 15:20","dateArrival":"'.$depart.' 16:10","gmtDateDeparture":"'.$depart.' 15:20","gmtDateArrival":"'.$depart.' 16:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":19,"identity":0,"direction":"V","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":8.28,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"H","farebasisCode":"HJYYEE","promotionLabel":null,"flights":[{"number":"2122","airportDeparture":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"airportArrival":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"dateDeparture":"'.$return.' 10:30","dateArrival":"'.$return.' 11:10","gmtDateDeparture":"'.$return.' 10:30","gmtDateArrival":"'.$return.' 11:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"9165","airportDeparture":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"'.$return.' 18:00","dateArrival":"'.$return.' 21:50","gmtDateDeparture":"'.$return.' 18:00","gmtDateArrival":"'.$return.' 20:50","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"2","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"ECONOMY","description":"STANDARD"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":false,"description":"This fare or flight does not permit purchase of additional baggage"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":22,"identity":7,"direction":"I","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":20.56,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"B","farebasisCode":"BJYYEH","promotionLabel":null,"flights":[{"number":"9118","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"dateDeparture":"'.$depart.' 11:40","dateArrival":"'.$depart.' 13:35","gmtDateDeparture":"'.$depart.' 10:40","gmtDateArrival":"'.$depart.' 13:35","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"2","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"2139","airportDeparture":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"airportArrival":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"dateDeparture":"'.$depart.' 15:20","dateArrival":"'.$depart.' 16:10","gmtDateDeparture":"'.$depart.' 15:20","gmtDateArrival":"'.$depart.' 16:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":22,"identity":0,"direction":"V","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":8.28,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"V","farebasisCode":"VJYYEE","promotionLabel":null,"flights":[{"number":"2120","airportDeparture":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"airportArrival":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"dateDeparture":"'.$return.' 08:10","dateArrival":"'.$return.' 08:50","gmtDateDeparture":"'.$return.' 08:10","gmtDateArrival":"'.$return.' 08:50","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"9161","airportDeparture":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"'.$return.' 10:00","dateArrival":"'.$return.' 13:45","gmtDateDeparture":"'.$return.' 10:00","gmtDateArrival":"'.$return.' 12:45","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"2","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"ECONOMY","description":"STANDARD"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":false,"description":"This fare or flight does not permit purchase of additional baggage"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":24,"identity":7,"direction":"I","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":20.56,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"B","farebasisCode":"BJYYEH","promotionLabel":null,"flights":[{"number":"9118","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"dateDeparture":"'.$depart.' 11:40","dateArrival":"'.$depart.' 13:35","gmtDateDeparture":"'.$depart.' 10:40","gmtDateArrival":"'.$depart.' 13:35","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"2","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"2139","airportDeparture":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"airportArrival":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"dateDeparture":"'.$depart.' 15:20","dateArrival":"'.$depart.' 16:10","gmtDateDeparture":"'.$depart.' 15:20","gmtDateArrival":"'.$depart.' 16:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":24,"identity":0,"direction":"V","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":8.28,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"H","farebasisCode":"HJYY5H","promotionLabel":null,"flights":[{"number":"2122","airportDeparture":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"airportArrival":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"dateDeparture":"'.$return.' 10:30","dateArrival":"'.$return.' 11:10","gmtDateDeparture":"'.$return.' 10:30","gmtDateArrival":"'.$return.' 11:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"9165","airportDeparture":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"'.$return.' 18:00","dateArrival":"'.$return.' 21:50","gmtDateDeparture":"'.$return.' 18:00","gmtDateArrival":"'.$return.' 20:50","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"2","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":24,"identity":5,"direction":"V","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":8.28,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"H","farebasisCode":"HDUS","promotionLabel":null,"flights":[{"number":"2122","airportDeparture":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"airportArrival":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"dateDeparture":"'.$return.' 10:30","dateArrival":"'.$return.' 11:10","gmtDateDeparture":"'.$return.' 10:30","gmtDateArrival":"'.$return.' 11:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"9165","airportDeparture":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"'.$return.' 18:00","dateArrival":"'.$return.' 21:50","gmtDateDeparture":"'.$return.' 18:00","gmtDateArrival":"'.$return.' 20:50","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"2","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":32,"identity":7,"direction":"I","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":20.56,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"B","farebasisCode":"BJYYEH","promotionLabel":null,"flights":[{"number":"9118","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"dateDeparture":"'.$depart.' 11:40","dateArrival":"'.$depart.' 13:35","gmtDateDeparture":"'.$depart.' 10:40","gmtDateArrival":"'.$depart.' 13:35","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"2","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"2139","airportDeparture":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"airportArrival":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"dateDeparture":"'.$depart.' 15:20","dateArrival":"'.$depart.' 16:10","gmtDateDeparture":"'.$depart.' 15:20","gmtDateArrival":"'.$depart.' 16:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":32,"identity":0,"direction":"V","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":8.28,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"V","farebasisCode":"VJYY5H","promotionLabel":null,"flights":[{"number":"2120","airportDeparture":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"airportArrival":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"dateDeparture":"'.$return.' 08:10","dateArrival":"'.$return.' 08:50","gmtDateDeparture":"'.$return.' 08:10","gmtDateArrival":"'.$return.' 08:50","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"9161","airportDeparture":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"'.$return.' 10:00","dateArrival":"'.$return.' 13:45","gmtDateDeparture":"'.$return.' 10:00","gmtDateArrival":"'.$return.' 12:45","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"2","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}}],"calendarJourneys":[],"journeyConstraint":[],"blockType":"P","availabilityFactor":{"availabilityProviderType":"O","availabilityProviderReasonType":"U"},"showDiscounts":true,"discountLabel":"","swiservicefee":false,"availabilityZoneType":"NAC"}}}';

isJson($json);
echo $json;
?>