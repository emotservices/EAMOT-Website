<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel UI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/controller.css">
</head>
<body>
    <div class="container panel">
        <div class="bezel">
            <div class="row">
                <!-- Display screen -->
                <div class="col-md-6 display-screen">
                    <div class="screen-header">
                        <h3>Off</h3>
                        <p>Home (1/1)</p>
                    </div>
                    <div class="screen-content">
                        <div class="left">
                            <p class="selected">Genset Data</p>
                            <p>Engine Data</p>
                            <p>Alternator Data</p>
                            <p>History-About</p>
                            <p>Adjust</p>
                        </div>
                        <div class="right">
                            <p>Basic Setup</p>
                            <p>Paralleling</p>
                            <p>Save-Restore</p>
                        </div>
                    </div>
                    <div class="screen-footer">
                        <p>Help</p>
                    </div>
                    <!-- Navigation buttons -->
                    <div class="controls">
                        <button class="btn btn-outline-secondary">&#x25C0;</button>
                        <button class="btn btn-outline-secondary">&#x25B2;</button>
                        <button class="btn btn-outline-secondary">&#x25BC;</button>
                        <button class="btn btn-outline-secondary">&#x25B6;</button>
                        <button class="btn btn-primary">OK</button>
                    </div>
                </div>
                <!-- Indicators and buttons -->
                <div class="col-md-6 indicators">
                    <div class="row status-lights">
                        <div class="col-6">
                            <p><span class="green-light">&#9679;</span> Genset Running</p>
                            <p><span class="gray-light">&#9679;</span> Remote Start</p>
                            <p><span class="red-light">&#9679;</span> Not in Auto</p>
                        </div>
                        <div class="col-6">
                            <p><span class="red-light">&#9679;</span> Shutdown</p>
                            <p><span class="yellow-light">&#9679;</span> Warning</p>
                            <button class="btn btn-outline-secondary reset-btn">Reset</button>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="btn manual-btn">Manual</button>
                        <button class="btn btn-success start-btn">Start</button>
                        <button class="btn auto-btn">Auto</button>
                        <button class="btn btn-danger stop-btn">Stop</button>
                    </div>
                    <div class="cb-controls">
                        <button class="btn cb-open">CB Open</button>
                        <button class="btn cb-close">CB Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
