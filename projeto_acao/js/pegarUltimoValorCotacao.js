function buildUrl(symbol, interval)
{
	
	var url = 'https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol='+ symbol +'&interval='+ interval + '&apikey=J6NCCZ9CWN2QDCAT';
	return url;
	
}

function sendRequest(symbol, interval)
{
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open( "GET", buildUrl(symbol, interval), false );
	xmlHttp.send( null );
	return xmlHttp.responseText;
}

function showLastClose(symbol, interval, htmlID)
{
	
	let data = sendRequest(symbol, interval);
	let jsonData = JSON.parse(data);
	let aux = jsonData['Time Series (Daily)'];
	var lastValue = 0;
	for ( const field in aux ) 
	{
		lastValue = parseFloat(aux[field]['4. close'])
		break;
	}
	console.log(lastValue)
	document.getElementById(htmlID).innerHTML = "R$"+lastValue
}
