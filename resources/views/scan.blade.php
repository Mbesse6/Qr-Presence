<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="/jQuery.js"></script>
    <script src="/intascan.js"></script> --}}
    <script src="{{ asset('js/unpkg.js') }}"></script>
    <title>SCANNER</title>
</head>
    <body>
            <h1>Marquer son arrivee</h1>
            <p>Centrez la camera sur le code QR pour le scanner</p>


            <div id="reader" width="600px"></div>

          <script>
              function onScanSuccess(decodedText, decodedResult) {
                // handle the scanned code as you like, for example:
                    console.log(`Code matched = ${decodedText}`, decodedResult);
              }

              function onScanFailure(error) {
                // handle scan failure, usually better to ignore and keep scanning.
                // for example:
                    console.warn(`Code scan error = ${error}`);
              }

              let html5QrcodeScanner = new Html5QrcodeScanner(
                "reader",
                { fps: 10, qrbox: {width: 250, height: 250} },
                /* verbose= */ false);
              html5QrcodeScanner.render(onScanSuccess, onScanFailure);
          </script>

     </body>
</html>
