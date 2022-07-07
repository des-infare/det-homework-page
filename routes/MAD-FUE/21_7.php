<?php 
include('validate.php');
include('var.php');

$json = '{"header":{"message":"OK","code":200,"error":false,"bodyType":"Content"},"body":{"data":{"sessionId":"EE8D8B7602B841DA8B979B83F993EA10","availabilityId":"493708627","locale":"en","marketCode":"ES","swirt":true,"switax":true,"swisdto":false,"adultPax":1,"childPax":0,"infantPax":0,"adultPaxResident":0,"childPaxResident":0,"infantPaxResident":0,"messageItemization":[],"serviceFee":0,"serviceFeeDiscount":0,"serviceFeeResidentDiscount":0,"totalAvailabilities":[{"recommendationId":46,"total":630.84},{"recommendationId":58,"total":665.84},{"recommendationId":59,"total":665.84},{"recommendationId":78,"total":700.84}],"journeys":[{"recommendationId":46,"identity":0,"direction":"I","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":20.56,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"L","farebasisCode":"LJYYEE","promotionLabel":null,"flights":[{"number":"9059","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"dateDeparture":"20/12/2021 07:05","dateArrival":"20/12/2021 09:00","gmtDateDeparture":"20/12/2021 06:05","gmtDateArrival":"20/12/2021 09:00","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"2","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"2139","airportDeparture":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"airportArrival":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"dateDeparture":"20/12/2021 15:20","dateArrival":"20/12/2021 16:10","gmtDateDeparture":"20/12/2021 15:20","gmtDateArrival":"20/12/2021 16:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":7,"fareFamily":{"code":"ECONOMY","description":"STANDARD"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":false,"description":"This fare or flight does not permit purchase of additional baggage"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":46,"identity":1,"direction":"I","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":20.56,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"L","farebasisCode":"LJYYEE","promotionLabel":null,"flights":[{"number":"9118","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"dateDeparture":"20/12/2021 11:40","dateArrival":"20/12/2021 13:35","gmtDateDeparture":"20/12/2021 10:40","gmtDateArrival":"20/12/2021 13:35","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"2","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"2139","airportDeparture":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"airportArrival":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"dateDeparture":"20/12/2021 15:20","dateArrival":"20/12/2021 16:10","gmtDateDeparture":"20/12/2021 15:20","gmtDateArrival":"20/12/2021 16:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":7,"fareFamily":{"code":"ECONOMY","description":"STANDARD"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":false,"description":"This fare or flight does not permit purchase of additional baggage"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":46,"identity":0,"direction":"V","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":8.28,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"H","farebasisCode":"HJYYEE","promotionLabel":null,"flights":[{"number":"2120","airportDeparture":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"airportArrival":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"dateDeparture":"27/12/2021 08:10","dateArrival":"27/12/2021 08:50","gmtDateDeparture":"27/12/2021 08:10","gmtDateArrival":"27/12/2021 08:50","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"9161","airportDeparture":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"27/12/2021 10:00","dateArrival":"27/12/2021 13:45","gmtDateDeparture":"27/12/2021 10:00","gmtDateArrival":"27/12/2021 12:45","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"2","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"ECONOMY","description":"STANDARD"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":false,"description":"This fare or flight does not permit purchase of additional baggage"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":58,"identity":0,"direction":"I","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":20.56,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"L","farebasisCode":"LJYYEE","promotionLabel":null,"flights":[{"number":"9059","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"dateDeparture":"20/12/2021 07:05","dateArrival":"20/12/2021 09:00","gmtDateDeparture":"20/12/2021 06:05","gmtDateArrival":"20/12/2021 09:00","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"2","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"2139","airportDeparture":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"airportArrival":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"dateDeparture":"20/12/2021 15:20","dateArrival":"20/12/2021 16:10","gmtDateDeparture":"20/12/2021 15:20","gmtDateArrival":"20/12/2021 16:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":7,"fareFamily":{"code":"ECONOMY","description":"STANDARD"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":false,"description":"This fare or flight does not permit purchase of additional baggage"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":58,"identity":1,"direction":"I","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":20.56,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"L","farebasisCode":"LJYYEE","promotionLabel":null,"flights":[{"number":"9118","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"dateDeparture":"20/12/2021 11:40","dateArrival":"20/12/2021 13:35","gmtDateDeparture":"20/12/2021 10:40","gmtDateArrival":"20/12/2021 13:35","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"2","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"2139","airportDeparture":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"airportArrival":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"dateDeparture":"20/12/2021 15:20","dateArrival":"20/12/2021 16:10","gmtDateDeparture":"20/12/2021 15:20","gmtDateArrival":"20/12/2021 16:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":7,"fareFamily":{"code":"ECONOMY","description":"STANDARD"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":false,"description":"This fare or flight does not permit purchase of additional baggage"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":58,"identity":0,"direction":"V","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":8.28,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"H","farebasisCode":"HJYY5H","promotionLabel":null,"flights":[{"number":"2120","airportDeparture":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"airportArrival":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"dateDeparture":"27/12/2021 08:10","dateArrival":"27/12/2021 08:50","gmtDateDeparture":"27/12/2021 08:10","gmtDateArrival":"27/12/2021 08:50","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"9161","airportDeparture":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"27/12/2021 10:00","dateArrival":"27/12/2021 13:45","gmtDateDeparture":"27/12/2021 10:00","gmtDateArrival":"27/12/2021 12:45","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"2","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":59,"identity":0,"direction":"I","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":20.56,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"L","farebasisCode":"LJYY5H","promotionLabel":null,"flights":[{"number":"9059","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"dateDeparture":"20/12/2021 07:05","dateArrival":"20/12/2021 09:00","gmtDateDeparture":"20/12/2021 06:05","gmtDateArrival":"20/12/2021 09:00","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"2","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"2139","airportDeparture":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"airportArrival":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"dateDeparture":"20/12/2021 15:20","dateArrival":"20/12/2021 16:10","gmtDateDeparture":"20/12/2021 15:20","gmtDateArrival":"20/12/2021 16:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":7,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":59,"identity":1,"direction":"I","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":20.56,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"L","farebasisCode":"LJYY5H","promotionLabel":null,"flights":[{"number":"9118","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"dateDeparture":"20/12/2021 11:40","dateArrival":"20/12/2021 13:35","gmtDateDeparture":"20/12/2021 10:40","gmtDateArrival":"20/12/2021 13:35","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"2","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"2139","airportDeparture":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"airportArrival":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"dateDeparture":"20/12/2021 15:20","dateArrival":"20/12/2021 16:10","gmtDateDeparture":"20/12/2021 15:20","gmtDateArrival":"20/12/2021 16:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":7,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":59,"identity":0,"direction":"V","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":8.28,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"H","farebasisCode":"HJYYEE","promotionLabel":null,"flights":[{"number":"2120","airportDeparture":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"airportArrival":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"dateDeparture":"27/12/2021 08:10","dateArrival":"27/12/2021 08:50","gmtDateDeparture":"27/12/2021 08:10","gmtDateArrival":"27/12/2021 08:50","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"9161","airportDeparture":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"27/12/2021 10:00","dateArrival":"27/12/2021 13:45","gmtDateDeparture":"27/12/2021 10:00","gmtDateArrival":"27/12/2021 12:45","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"2","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"ECONOMY","description":"STANDARD"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":false,"description":"This fare or flight does not permit purchase of additional baggage"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":78,"identity":0,"direction":"I","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":20.56,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"L","farebasisCode":"LJYY5H","promotionLabel":null,"flights":[{"number":"9059","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"dateDeparture":"20/12/2021 07:05","dateArrival":"20/12/2021 09:00","gmtDateDeparture":"20/12/2021 06:05","gmtDateArrival":"20/12/2021 09:00","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"2","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"2139","airportDeparture":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"airportArrival":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"dateDeparture":"20/12/2021 15:20","dateArrival":"20/12/2021 16:10","gmtDateDeparture":"20/12/2021 15:20","gmtDateArrival":"20/12/2021 16:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":7,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":78,"identity":1,"direction":"I","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":20.56,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"L","farebasisCode":"LJYY5H","promotionLabel":null,"flights":[{"number":"9118","airportDeparture":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"airportArrival":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"dateDeparture":"20/12/2021 11:40","dateArrival":"20/12/2021 13:35","gmtDateDeparture":"20/12/2021 10:40","gmtDateArrival":"20/12/2021 13:35","companyCode":"UX","operator":"0","flote":{"code":"73H","description":"73H"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"2","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"2139","airportDeparture":{"code":"TFN","description":"North Tenerife","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/TFN.jpg"},"airportArrival":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"dateDeparture":"20/12/2021 15:20","dateArrival":"20/12/2021 16:10","gmtDateDeparture":"20/12/2021 15:20","gmtDateArrival":"20/12/2021 16:10","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":7,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}},{"recommendationId":78,"identity":0,"direction":"V","cabinClass":"TUR","importChild":0.00,"importInfant":0.00,"importAdultResident":0,"importChildResident":0,"importInfantResident":0,"discountAdultResident":0,"discountChildResident":0,"discountInfantResident":0,"importTaxAdl":8.28,"importTaxChd":0.00,"importTaxInf":0.00,"classCode":"H","farebasisCode":"HJYY5H","promotionLabel":null,"flights":[{"number":"2120","airportDeparture":{"code":"FUE","description":"Fuerteventura","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/FUE.jpg"},"airportArrival":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"dateDeparture":"27/12/2021 08:10","dateArrival":"27/12/2021 08:50","gmtDateDeparture":"27/12/2021 08:10","gmtDateArrival":"27/12/2021 08:50","companyCode":"UX","operator":"Canaryfly","flote":{"code":"AT7","description":"AT7"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"Unique","cabinClass":{"code":"TUR","description":"Economy"}},{"number":"9161","airportDeparture":{"code":"LPA","description":"Gran Canaria","resident":true,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/LPA.jpg"},"airportArrival":{"code":"MAD","description":"Madrid","resident":false,"type":"AIR","zone":"NAC","image":"https://www.aireuropa.com/img_mob/airports/MAD.jpg"},"dateDeparture":"27/12/2021 10:00","dateArrival":"27/12/2021 13:45","gmtDateDeparture":"27/12/2021 10:00","gmtDateArrival":"27/12/2021 12:45","companyCode":"UX","operator":"0","flote":{"code":"788","description":"788"},"technicalStop":{"numberStops":0,"airportStops":[]},"terminalDeparture":"Unique","terminalArrival":"2","cabinClass":{"code":"TUR","description":"Economy"}}],"businessJourneys":[],"passengersAvailable":9,"fareFamily":{"code":"FLEX","description":"FLEX"},"franchiseInformation":{"franchise":1,"baggageWeight":{"amount":23.0,"measurementType":{"code":"KG","description":"kg"}},"hiringSupported":true,"description":"The checked baggage in hold allowed by your fare is 1 piece(s) of 23 kg"},"cabinInformation":{"number":1,"baggageWeight":{"amount":10.0,"measurementType":{"code":"KG","description":"kg"}},"description":"Hand Baggage in cabin allowed by your fare is 1 piece(s) of  10 kg"}}],"calendarJourneys":[],"journeyConstraint":[],"blockType":"P","availabilityFactor":{"availabilityProviderType":"O","availabilityProviderReasonType":"U"},"showDiscounts":true,"discountLabel":"","swiservicefee":false,"availabilityZoneType":"NAC"}}}';

isJson($json);
echo $json;
?>