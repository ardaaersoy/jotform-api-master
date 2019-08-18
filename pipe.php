<?php


?>
<html>

<head>
    <title>Custom Event Test</title>
    <script type="text/javascript">
        function sendCustomEvent() {
            const headers = new Headers();
            headers.append("Content-Type", "application/json");

            const body = {
                event: "button-click",
                data: "merhaba arda"
            };
            const options = {
                method: "POST",
                headers,
                mode: "cors",
                body: JSON.stringify(body)
            };

            fetch("https://enlsckphjzcl.x.pipedream.net/", options);
        }
    </script>
</head>

<body>
    <button type="button" onclick="sendCustomEvent()">Click Here</button>
</body>

</html>